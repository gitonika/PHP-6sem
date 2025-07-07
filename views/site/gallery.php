<?php
/** @var yii\web\View $this */
$this->title = 'Galeria';
?>

<h1>Galeria</h1>
<p>Zdjęcia naszego hotelu:</p>

<div style="display: flex; flex-wrap: wrap; gap: 20px;">
    <img src="<?= Yii::getAlias('@web') ?>/images/hotel1.jpg" width="300" alt="Hotel 1">
    <img src="<?= Yii::getAlias('@web') ?>/images/hotel2.jpg" width="300" alt="Hotel 2">
    <img src="<?= Yii::getAlias('@web') ?>/images/hotel3.jpg" width="300" alt="Hotel 3">
</div>
