<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\File */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'File',
]) . ' ' . $model->attach_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Files'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->attach_id, 'url' => ['view', 'id' => $model->attach_id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="file-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
