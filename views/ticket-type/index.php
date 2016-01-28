<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ticket Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-type-index">


    <p>
        <?php echo Html::a('Create Ticket Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'type_id',
            'type_name',
            'manager_id',
            'dept_signature:ntext',
            'ispublic',
            // 'updated',
            // 'created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
