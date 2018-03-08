<?php
//觀看某一單元
function display_goods($goods_sn = '', $panel_sn = '')
{
    global $mysqli, $smarty, $isuser;
    add_goods_counter($goods_sn);
    $sql = "SELECT a.*,b.* FROM `goods` AS a
    JOIN `users` AS b on a.`user_sn`=b.`user_sn`
    WHERE a.`goods_sn`='{$goods_sn}'";
    $result       = $mysqli->query($sql) or die($mysqli->connect_error);
    $goods        = $result->fetch_assoc();
    $goods['pic'] = get_goods_pic($goods_sn, $panel_sn, 'goods');
    $smarty->assign('goods', $goods);
}