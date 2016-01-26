<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ticket Cdatas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-cdata-index">


    <p>
        <?php echo Html::a('Create Ticket Cdata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ticket_id',
            'subject:ntext',
            'detail:ntext',
            'priority',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
