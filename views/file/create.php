<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\File */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'File',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Files'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
