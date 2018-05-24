<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\comment\models\Comment */

$this->title = 'Create Comment';
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->username;
?>
<div class="comment-create">

    <h1><?= Html::encode($this->username) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
