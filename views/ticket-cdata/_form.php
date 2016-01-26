<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TicketCdata */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="ticket-cdata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'ticket_id')->textInput() ?>

    <?php echo $form->field($model, 'subject')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'priority')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
