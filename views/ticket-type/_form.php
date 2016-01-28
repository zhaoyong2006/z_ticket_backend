<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TicketType */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="ticket-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'type_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'manager_id')->textInput() ?>

    <?php echo $form->field($model, 'dept_signature')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'ispublic')->textInput() ?>

    <?php echo $form->field($model, 'updated')->textInput() ?>

    <?php echo $form->field($model, 'created')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
