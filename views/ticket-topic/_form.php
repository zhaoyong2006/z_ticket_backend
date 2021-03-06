<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TicketTopic */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="ticket-topic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'topic_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'topic_signature')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'created')->textInput() ?>

    <?php echo $form->field($model, 'updated')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
