<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\File */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="file-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'attribute')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'attribute_id')->textInput() ?>

    <?php echo $form->field($model, 'file_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'file_index')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'created')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
