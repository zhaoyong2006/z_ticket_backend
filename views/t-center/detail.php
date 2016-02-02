<?php

use yii\helpers\Html;
use common\models\TicketStatus;
use common\models\TicketTopic;
use common\models\User;

/* @var $detail  */
?>
<style type="text/css">
    .ticket_head{
        background-color: #c5dbec;
        padding: 5px 0;
        border-radius: 5px;
    }
    .select_bar{
        padding: 20px 10px;
    }
    .ticket_content{
        padding: 20px 20px;
    }
    .ticket_content > .content_detail{
        padding: 20px;
    }
    .ticket_content > .response_box{
        padding: 20px;
    }
    .ticket_content > .content_log > ul > li{
        list-style: none;
        padding: 5px 0px;
    }
    .ticket_foot{
        background-color: #c5dbec;
        padding: 5px 0;
        border-radius: 5px;
    }

</style>
<div class="content">
    <div class="ticket_head col-md-12">
        <div class="col-md-4">
            <span class="user pull-left">工单发起人:<?= $detail->userProfile->firstname;?>(pbzyong@126.com)</span>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <span>意见反馈</span>
            <span class="badge">
                <?=
                   isset(TicketStatus::$status_map[$detail->status_id])? TicketStatus::$status_map[$detail->status_id]['name'] : '未知';
                ?>
            </span>
        </div>
    </div>
    <div class="select_bar col-md-3">
        <form class="form-horizontal">
            <fieldset>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class=" control-label" for="selectbasic">受理客服组</label>
                    <div class="">
                        <select id="selectbasic" name="selectbasic" class="form-control">
                            <option value="">请选择客服组</option>
                            <option value="1">Option one</option>
                            <option value="2">Option two</option>
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class=" control-label" for="selectbasic">受理客服</label>
                    <div class="">
                        <select id="selectbasic" name="user_id" class="form-control">
                            <option value="">请选择客服</option>
                            <?php
                                foreach(User::getUserList() as $k=>$v):
                            ?>
                                    <option value="<?= $k ?>"><?= $v ?></option>
                            <?php
                                endforeach;
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class=" control-label" for="selectbasic">选择工单状态</label>
                    <div class="">
                        <select id="selectbasic" name="status_id" class="form-control">
                            <option value="">请选择工单状态</option>
                            <?php
                                foreach(TicketStatus::$status_map as $k=>$v):
                            ?>
                            <option value="<?= $k ?>"><?= $v['name'] ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>

                <!-- Multiple Checkboxes (inline) -->
                <div class="form-group">
                    <label class=" control-label" for="checkboxes">选择工单所属话题</label>
                    <div class="">
                        <?php
                            foreach(TicketTopic::getTicketTopicList() as $k=>$v):
                        ?>
                        <label class="checkbox-inline" for="checkboxes-<?= $k ?>">
                            <input type="checkbox" name="topic" id="checkboxes-<?= $k ?>" value="<?= $k ?>">
                            <?= $v ?>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class=" control-label" for="textinput">订单号</label>
                    <div class="">
                        <input id="textinput" name="order_id" type="text" placeholder="请输入订单号" class="form-control input-md">
                        <span class="help-block">订单详情页面的订单号</span>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
    <div class="ticket_content col-md-9">
        <div class="content_title col-md-12">
            <h4><?= $detail->cdata->subject ?><small>创建于<?= $detail->created ?>, 更新于<?= $detail->updated ?></small></h4>
        </div>
        <div class="content_detail col-md-12">
            <div class="col-md-12">
                <p><?= $detail->cdata->detail ?></p>
            </div>
            <div class="col-md-12">
                <?php
                    if(!empty($detail->file)):
                ?>
                <span><?php echo Yii::t('frontend', 'Attachments') ?>:</span>
                        <?php foreach ($detail->file as $attachment): ?>
                        <li>
                            <?php echo Html::a(
                                $attachment['file_name'],
                                ['attachment-download', 'id' => $attachment['attach_id']])
                            ?>
                            (<?php echo Yii::$app->formatter->asSize($attachment['size']) ?>)
                        </li>
                    <?php endforeach; ?>
                <?php endif;?>
            </div>

        </div>
        <div class="response_box col-md-12">
            <form class="form-horizontal">
                <fieldset>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class=" control-label" for="textarea">工单回复</label>
                        <div class="">
                            <textarea class="form-control" id="textarea" name="textarea" rows="5">请输入回复内容</textarea>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
        <div class="content_log col-md-12">
            <div class="form-group">
                <label class=" control-label" for="textarea">历史回复</label>
                <div class="">
                    <ul>
                        <li>
                            Simon 2015-11-11 11:11:11 :
                            <ol>
                                你好
                            </ol>
                        </li>
                        <li>
                            客服 2015-11-11 11:11:11 :
                            <ol>
                                sdasdasdas<br/>
                                附件: xxxxx
                            </ol>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="ticket_foot col-md-12">
        <div class="col-md-9"></div>
        <div class="col-md-3">
            <button class="btn btn-info">提交</button>
        </div>
    </div>
</div>