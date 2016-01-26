<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Ticket */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="ticket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'user_id')->textInput() ?>

    <?php echo $form->field($model, 'status_id')->textInput() ?>

    <?php echo $form->field($model, 'type_id')->textInput() ?>

    <?php echo $form->field($model, 'topic_id')->textInput() ?>

    <?php echo $form->field($model, 'staff_id')->textInput() ?>

    <?php echo $form->field($model, 'team_id')->textInput() ?>

    <?php echo $form->field($model, 'ip_address')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'source_id')->textInput() ?>

    <?php echo $form->field($model, 'created')->textInput() ?>

    <?php echo $form->field($model, 'updated')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
