<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\File */

$this->title = 'Create File';
$this->params['breadcrumbs'][] = ['label' => 'Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
