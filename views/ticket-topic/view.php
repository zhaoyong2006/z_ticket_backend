<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TicketTopic */

$this->title = $model->topic_id;
$this->params['breadcrumbs'][] = ['label' => 'Ticket Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-topic-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->topic_id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->topic_id], [
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
            'topic_id',
            'topic_name',
            'topic_signature:ntext',
            'created',
            'updated',
        ],
    ]) ?>

</div>
