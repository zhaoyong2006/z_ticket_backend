<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ticket Topics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-topic-index">


    <p>
        <?php echo Html::a('Create Ticket Topic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'topic_id',
            'topic_name',
            'topic_signature:ntext',
            'created',
            'updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
