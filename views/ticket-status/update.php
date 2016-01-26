<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TicketStatus */

$this->title = 'Update Ticket Status: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ticket Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->status_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ticket-status-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
