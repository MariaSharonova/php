<?php
include_once "db.php";
function goods_new($link, $name, $info, $src, $small_src, $price){

    $t = "INSERT INTO shop (name, info, src, small_src, price) VALUES ('%s','%s','%s','%s','%s')";

    $query = sprintf($t, mysqli_real_escape_string($link, $name),mysqli_real_escape_string($link, $info),mysqli_real_escape_string($link, $src),mysqli_real_escape_string($link, $small_src),mysqli_real_escape_string($link, $price));

    $result = mysqli_query($link, $query);

    if(!$result){
        die(mysqli_error($link));
    }

    return true;
}

function goods_all($link){
    $query ="SELECT * FROM shop order by id desc ";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $goods = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $goods;
}

function goods_get($link, $id){
    $query = sprintf("SELECT * FROM shop where id=%d", (int)$id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $good = mysqli_fetch_assoc($result);

    return $good;
}

