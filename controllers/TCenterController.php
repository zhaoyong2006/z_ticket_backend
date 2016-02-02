<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\models\Ticket;
use common\models\TicketStatus;
use common\models\TicketTopic;
use common\models\File;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;

/**
 * Class TCenterController
 * @package backend\controllers
 */
class TCenterController extends Controller{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex($type = "all"){

        $menu = $this->getMenuRoute($type);
        if(empty($menu)){
            throw new BadRequestHttpException("不存在的路由");
        }
        $menu_title = $menu['name'];
        unset($menu['name']);
        $ticket_list = Ticket::find()->where($menu)
            ->joinWith('cdata')
            ->joinWith('userProfile')
            ->all();

        return $this->render('index',array(
            'menu_title' => $menu_title,
            'ticket_list' => $ticket_list
        ));
    }

    public function actionDetail($number){

        $ticket_detail = Ticket::find()->where(array('number'=>$number))->one();
        if(empty($ticket_detail)){
            throw new BadRequestHttpException("不存在该工单");
        }

        return $this->render('detail',array(
            'detail' => $ticket_detail
        ));
    }
    /**
     * @param $id
     * @return $this
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionAttachmentDownload($id)
    {
        $model = File::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException;
        }

        return \Yii::$app->response->sendStreamAsFile(
            \Yii::$app->fileStorage->getFilesystem()->readStream($model->file_index),
            $model->file_name
        );
    }

    private function getMenuRoute($key){
        $menu_map = array(
            'all' => array(
                'name' => "全部工单",
                'status_id' => array(
                    TicketStatus::CREATED,
                    TicketStatus::RESOLVED,
                    TicketStatus::DELETED,
                    TicketStatus::CLOSED,
                    TicketStatus::ACCEPTED,
                    TicketStatus::PEDDING
                )
            ),
            'no_accepted' => array(
                'name' => "全部未受理工单",
                'status_id' => array(
                    TicketStatus::CREATED,
                )
            ),
            'dealing' => array(
                'name' => "我的受理中工单",
                'staff_id' => Yii::$app->user->identity->id,
                'status_id' => array(
                    TicketStatus::ACCEPTED,
                    TicketStatus::PEDDING
                )
            ),
            'pending' => array(
                'name' => "我的升级工单",
                'staff_id' => Yii::$app->user->identity->id,
                'status_id' => array(
                    TicketStatus::PEDDING
                )
            ),
            'finish' => array(
                'name' => "我的已完结工单",
                'staff_id' => Yii::$app->user->identity->id,
                'status_id' => array(
                    TicketStatus::RESOLVED
                )
            )
        );

        if(!empty($key)){
            return isset($menu_map[$key]) ? $menu_map[$key] : '';
        }
        return $menu_map;
    }
}


?>