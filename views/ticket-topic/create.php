<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TicketTopic */

$this->title = 'Create Ticket Topic';
$this->params['breadcrumbs'][] = ['label' => 'Ticket Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-topic-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
