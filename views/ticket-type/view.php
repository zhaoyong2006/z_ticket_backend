<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TicketType */

$this->title = $model->type_id;
$this->params['breadcrumbs'][] = ['label' => 'Ticket Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-type-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->type_id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->type_id], [
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
            'type_id',
            'type_name',
            'manager_id',
            'dept_signature:ntext',
            'ispublic',
            'updated',
            'created',
        ],
    ]) ?>

</div>
