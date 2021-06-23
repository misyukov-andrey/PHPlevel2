<h2>Корзина</h2>

<?php foreach ($basket as $item):?>
    <div>
        <h4><?=$item['name']?></h4>
        <p>price: <?=$item['price']?></p>
    </div>
<?php endforeach;?>

Всего :