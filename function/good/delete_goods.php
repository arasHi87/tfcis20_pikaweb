<?php
//刪除商品
function delete_goods($goods_sn, $panel_sn)
{
    global $mysqli, $isadmin;
    if (!$isadmin) {
        return;
    }
    $sql = "DELETE FROM `goods` WHERE `goods_sn`='{$goods_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    delete_goods_pic($goods_sn, $panel_sn);
}