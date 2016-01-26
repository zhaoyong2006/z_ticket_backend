<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TicketCdata */

$this->title = 'Update Ticket Cdata: ' . ' ' . $model->ticket_id;
$this->params['breadcrumbs'][] = ['label' => 'Ticket Cdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ticket_id, 'url' => ['view', 'id' => $model->ticket_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ticket-cdata-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
