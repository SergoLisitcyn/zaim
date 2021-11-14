<?php
namespace frontend\controllers;

use common\models\City;
use common\models\Main;
use common\models\MainPage;
use common\models\Mfo;
use common\models\Pages;
use common\models\TypeCredit;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\db\Expression;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $main = Main::findOne(1);
        return $this->render('index', [
            'main' => $main,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if(isset($_POST['email'])){
            (new MainPage)->unisender($_POST['email']);
            return $this->refresh();
        }
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionFaq()
    {
        if(isset($_POST['email'])){
            (new MainPage)->unisender($_POST['email']);
            return $this->refresh();
        }
        return $this->render('faq');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }


    public function actionCalculator()
    {
        return $this->render('calculator');
    }

    /**
     * @throws HttpException
     */
    public function actionFilter($slug)
    {
        $city = City::find()->where(['url' => $slug])->one();
        $typeCredit = TypeCredit::find()->where(['url' => $slug])->one();

        if(isset($city)){
            $join = 'city';
            $where = 'city.url';
        } else {
            if(!$typeCredit) throw new HttpException(404, 'Страница не существует.');
            $join = 'type';
            $where = 'type_credit.url';
        }
        if(isset($_POST['email'])){
            (new MainPage)->unisender($_POST['email']);
            return $this->refresh();
        }
        $output = Mfo::find()
            ->joinWith($join)
            ->where([$where => $slug])
            ->andWhere(['mfo.status' => '1'])
            ->all();

        return $this->render('filter', [
            'output' => $output,
            'typeCredit' => $typeCredit
        ]);
    }

    public function actionRating()
    {
        $mfo = Mfo::find()
            ->orderBy(['sort' => SORT_ASC])
            ->all();

        return $this->render('rating', [
            'mfo' => $mfo
        ]);
    }

    public function actionUnisender(){
        if(isset($_POST['email'])){
            (new MainPage)->unisender($_POST['email']);
        }
        return $this->redirect('/');
    }

    public function actionCurrency()
    {
        $valutes = [];
        $url = "http://www.nationalbank.kz/rss/rates_all.xml";
        $dataObj = simplexml_load_file($url);
        if ($dataObj){
            foreach ($dataObj->channel->item as $item){
                $valutes[strval($item->title)] = strval($item->description);
            }
        }

        $month = [
            '01' => 'қаңтар',
            '02' => 'ақпан',
            '03' => 'наурыз',
            '04' => 'сәуір',
            '05' => 'мамыр',
            '06' => 'маусым',
            '07' => 'шілде',
            '08' => 'тамыз',
            '09' => 'қыркүйек',
            '10' => 'қазан',
            '11' => 'қараша',
            '12' => 'желтоқсан',
        ];
        $day = [
            '0' => 'Жексенбі',
            '1' => 'Дүйсенбіге',
            '2' => 'Сейсенбі',
            '3' => 'Сәрсенбі',
            '4' => 'Бейсенбі',
            '5' => 'Жұма',
            '6' => 'Сенбі',
        ];
        return $this->render('currency', [
            'valutes' => $valutes,
            'month' => $month,
            'day' => $day,
        ]);

    }
}
