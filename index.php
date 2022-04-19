<?php
include_once "function.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Интернет-магазин авто</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <? include "./templates/header.php"; ?>
    <div class="leftblock">
        <? include "./templates/menu.php"; ?>
    </div>
    <div class="content">
        <h1>Интернет-магазин авто</h1>
        <hr>
        <?php
        $goods = goods_all($link);
        if($goods){
            foreach ($goods as $good){?>
                <div class="item">
                    <a href="goods.php?id=<?=$good['id']?>"><img src="<?=$good['small_src']?>" alt="<?=$good['name']?>" title="<?=$good['name']?>"></a>
                    <h3 class="item-name"><a href="goods.php?id=<?=$good['id']?>"><?=$good['name']?></a></h3>
                    <p class="price"><?=$good['price']?>р.</p>
                    <p class="add-to-basket"><a href="#" title="Добавить в корзину">Купить</a></p>
                </div>
            <?}
        }
        ?>
    </div>
    <footer>
        <? include "./templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>