<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\File */

$this->title = 'Update File: ' . ' ' . $model->attach_id;
$this->params['breadcrumbs'][] = ['label' => 'Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->attach_id, 'url' => ['view', 'id' => $model->attach_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="file-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
