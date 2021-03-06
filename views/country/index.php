<?php
    use yii\helpers\Html;
    use yii\widgets\LinkPager;
?>

<h1>Paises</h1>
<ul>
    <?php foreach ($countries as $country): ?>
        <li>
            <?= Html::encode("Pais: {$country->name} ({$country->code})") ?>:
            <?= $country->population ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
