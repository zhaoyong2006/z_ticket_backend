<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TicketStatus */

$this->title = 'Create Ticket Status';
$this->params['breadcrumbs'][] = ['label' => 'Ticket Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-status-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
