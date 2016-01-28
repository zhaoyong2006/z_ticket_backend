<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TicketType */

$this->title = 'Create Ticket Type';
$this->params['breadcrumbs'][] = ['label' => 'Ticket Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-type-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
