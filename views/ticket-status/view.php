<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TicketStatus */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ticket Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-status-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->status_id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->status_id], [
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
            'status_id',
            'name',
            'sort',
            'properties:ntext',
            'created',
            'updated',
        ],
    ]) ?>

</div>
