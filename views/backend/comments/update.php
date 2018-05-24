<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\comment\models\Comment */

$this->title = 'Update Comment: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comment-update">

    <h1><?= Html::encode($this->username) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
