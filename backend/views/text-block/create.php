<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TextBlock */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Text Block',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Text Blocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="text-block-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
