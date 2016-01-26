<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TicketCdata */

$this->title = 'Create Ticket Cdata';
$this->params['breadcrumbs'][] = ['label' => 'Ticket Cdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-cdata-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
