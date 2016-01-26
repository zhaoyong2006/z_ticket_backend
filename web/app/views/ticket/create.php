<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ticket */

$this->title = 'Create Ticket';
$this->params['breadcrumbs'][] = ['label' => 'Tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
