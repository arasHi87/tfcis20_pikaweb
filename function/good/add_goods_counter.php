<?php
//增加單元計數器
function add_goods_counter($goods_sn)
{
    global $mysqli;

    $sql = "UPDATE `goods` SET `goods_counter`=`goods_counter`+1 WHERE `goods_sn`='{$goods_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}