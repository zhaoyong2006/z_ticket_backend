<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TicketTopic */

$this->title = 'Update Ticket Topic: ' . ' ' . $model->topic_id;
$this->params['breadcrumbs'][] = ['label' => 'Ticket Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->topic_id, 'url' => ['view', 'id' => $model->topic_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ticket-topic-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
