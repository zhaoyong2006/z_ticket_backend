<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TicketType */

$this->title = 'Update Ticket Type: ' . ' ' . $model->type_id;
$this->params['breadcrumbs'][] = ['label' => 'Ticket Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type_id, 'url' => ['view', 'id' => $model->type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ticket-type-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
