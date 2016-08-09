<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = Yii::t('app', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="form-box" id="login-box">
    <div class="header"><?php echo Html::encode($this->title); ?></div>
    <?php $form = ActiveForm::begin(); ?>
    <div class="body bg-gray">
        <?= $form->field($model, 'username')->textInput(['placeholder' => $model->getAttributeLabel('username')])->label(false) ?>
        <?= $form->field($model, 'password')->passwordInput(['placeholder' => $model->getAttributeLabel('password')])->label(false) ?>
        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <?= $form->field($model, 'verifyCode', ['options'=>['class'=>''], ])->label(false)->widget(\yii\captcha\Captcha::className(),
            [
                'captchaAction'=>'site/captcha',
                'template' => '<div style="margin-bottom:3px;">{image}</div><div>{input}</div>',
                'options' => ['class'=>'form-control'],
                'imageOptions' => [
                    'title'=>'换一个', 'alt'=>'换一个',
                    'style'=>'cursor:pointer;',

                ]
            ])
        ?>

    </div>
    <div class="footer bg-gray">
        <?= Html::submitButton(Yii::t('app', 'Login'), ['class' => 'btn bg-olive btn-block']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>

