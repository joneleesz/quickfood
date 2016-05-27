<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TextBlock */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Text Block',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Text Blocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="text-block-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
