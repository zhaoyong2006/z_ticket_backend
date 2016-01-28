<?php
use yii\helpers\Html;
use backend\models\Ticket;
use common\models\TicketStatus;
use yii\helpers\Url;

$this->title = "ticket center";

$this->params['breadcrumbs'][] = $this->title;

/* @var $ticketModel */
/* @var $ticket_list */
?>
<style type="text/css">
    .top{
        display: block;
        padding: 20px 0;
    }
    .top > ul > li{
        width: 20%;
        float: left;
        list-style: none;
    }
    .tickets{
        padding: 10px 20px;
    }
</style>
<div class="content">
    <div class="top">
        <ul>
            <li>
                <?= Html::a("全部工单",Yii::$app->urlManager->createUrl(array('t-center/index','type'=>"all")));?>
                <span class="badge"><?php echo Ticket::find()->count();?></span>
            </li>
            <li>
                <?= Html::a("全部未受理工单",Yii::$app->urlManager->createUrl(array('t-center/index','type'=>"no_accepted")));?>
                <span class="badge"><?php echo Ticket::find()->where(array('status_id'=>TicketStatus::CREATED))->count();?></span>
            </li>
            <li>
                <?= Html::a("我的受理中工单",Yii::$app->urlManager->createUrl(array('t-center/index','type'=>"dealing")));?>
                <span class="badge">
                    <?php echo Ticket::find()
                        ->where(
                            array(
                                'staff_id'=>Yii::$app->user->identity->id,
                                'status_id'=>array(TicketStatus::ACCEPTED,TicketStatus::PEDDING)
                            )
                        )->count();?>
                </span>
            </li>
            <li>
                <?= Html::a("我的升级工单",Yii::$app->urlManager->createUrl(array('t-center/index','type'=>"pending")));?>
                <span class="badge">
                    <?php echo Ticket::find()
                        ->where(array(
                            'staff_id' => Yii::$app->user->identity->id,
                            'status_id' => TicketStatus::PEDDING
                        ))->count();
                    ?>
                </span>
            </li>
            <li>
                <?= Html::a("我的已完结工单",Yii::$app->urlManager->createUrl(array('t-center/index','type'=>"finish")));?>
                <span class="badge">
                    <?php echo Ticket::find()
                        ->where(array(
                            'staff_id' => Yii::$app->user->identity->id,
                            'status_id' => TicketStatus::RESOLVED
                        ))->count();
                    ?>
                </span>
            </li>
        </ul>
    </div>
    <div>
        <hr/>
    </div>
    <div class="tickets">
        <table class="table table-hover">
            <thead>
            <tr>
                <th class="col-md-2">工单号</th>
                <th class="col-md-4">描述</th>
                <th class="col-md-2">状态</th>
                <th class="col-md-2">受理人</th>
                <th class="col-md-2">更新时间</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach($ticket_list as $ticket):
            ?>
            <tr>
                <td><?= $ticket->number?></td>
                <td><?= Html::a($ticket->cdata->subject,Yii::$app->urlManager->createUrl(array('t-center/detail','number'=>$ticket->number)));?></td>
                <td><?= isset(TicketStatus::$status_map[$ticket->status_id]['name'])?TicketStatus::$status_map[$ticket->status_id]['name']:"未知"?></td>
                <td><?= isset($ticket->userProfile->lastname)?$ticket->userProfile->lastname:"无"?></td>
                <td><?= $ticket->updated ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>