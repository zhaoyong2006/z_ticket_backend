<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TicketStatus */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="ticket-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'sort')->textInput() ?>

    <?php echo $form->field($model, 'properties')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'created')->textInput() ?>

    <?php echo $form->field($model, 'updated')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
