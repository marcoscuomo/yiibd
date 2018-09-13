<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/09/2018
 * Time: 23:32
 */

namespace app\controllers;

use yii\web\Controller;

class PedidosController extends Controller {

    public function actionIndex(){

        $query = Pedidos::find();
        $pedidos = $query->all();

        return $this->render('index', ['pedidos' => $pedidos]);

    }

}