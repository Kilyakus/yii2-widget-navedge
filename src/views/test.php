<?php
use yii\helpers\Url;
use kilyakus\button\Button;
use kilyakus\nav\Nav;
?>

<?php if(isset($left['items'])) : ?>

    <?= Nav::widget([
        'options' => [
            'class' => 'nav-edge nav-edge--left nav-edge--'.$left['theme'],
        ],
        'items' => $left['items']
    ]) ?>

<?php endif; ?>

<?php if(isset($right['items'])) : ?>

    <?= Nav::widget([
        'options' => [
            'class' => 'nav-edge nav-edge--right nav-edge--'.$left['theme'],
        ],
        'items' => $right['items']
    ]) ?>
    
<?php endif; ?>
<style>

</style>
