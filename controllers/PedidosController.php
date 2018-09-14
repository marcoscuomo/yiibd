<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/09/2018
 * Time: 23:32
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Pedidos;

class PedidosController extends Controller {


    public function actionIndex(){

        $query = Pedidos::find();
        $pedidos = $query->all();

        //$p = \Yii::$app->db->createCommand('SELECT * FROM pedidos WHERE id=12132')->queryOne();
        $p = $query->select(['dt_pedido', 'dt_entrega'])
                    ->from('pedidos')
                    ->where(['id' => '12132'])
                    ->all();

        foreach ($p as $y){
            $data1 = $y->dt_entrega;
        }


        return $this->render('index', ['pedidos' => $pedidos, 'p' => $p, 'data1' => $data1]);

    }

}