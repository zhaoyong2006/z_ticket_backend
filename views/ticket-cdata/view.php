<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TicketCdata */

$this->title = $model->ticket_id;
$this->params['breadcrumbs'][] = ['label' => 'Ticket Cdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-cdata-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->ticket_id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->ticket_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ticket_id',
            'subject:ntext',
            'detail:ntext',
            'priority',
        ],
    ]) ?>

</div>
