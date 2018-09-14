<?php
use yii\helpers\Html;
?>

<h1>Pedidos</h1>
<ul>


    <?php foreach ($p as $x): ?>
        <li>
            <?php
                $dt_pedido = $x->dt_pedido;
                $dt_entrega = $x->dt_entrega;
                echo $dt_pedido. "<br>";
                echo $dt_entrega. "<br>";
                $data_inicio = strtotime($dt_pedido);
                $data_fim = strtotime($dt_entrega);

                $data1 = new DateTime( $x->dt_pedido );
                $data2 = new DateTime( $x->dt_entrega );

                $intervalo = $data1->diff( $data2 );
                $dias = $intervalo->d;
                echo $dias."<br>";
            ?>
        </li>
    <?php endforeach; ?>

    <?php foreach ($data1 as $y): ?>
        <?php
            echo $y;
        ?>
    <?php endforeach; ?>



</ul>
