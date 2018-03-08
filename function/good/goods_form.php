<?php
//單元編輯表單
function goods_form($goods_sn, $panel_sn)
{
    global $mysqli, $smarty, $isadmin;
    if (!$isadmin) {
        return;
    }
    if (empty($goods_sn)) {
        $sql    = "EXPLAIN `goods`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $goods[$field_name] = '';
        }
    } else {
        $sql = "SELECT a.* , b.* FROM `goods` AS a
        JOIN `panel` AS b on a.`panel_sn`=b.`panel_sn`
        WHERE a.`goods_sn`='{$goods_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $goods        = $result->fetch_assoc();
        $goods['pic'] = get_goods_pic($goods_sn, $panel_sn, 'thumbs');
    }
    $smarty->assign('goods', $goods);

    $sql = "SELECT * FROM `panel` WHERE `panel_sn`='{$panel_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $panel  = $result->fetch_assoc();
    $smarty->assign('panel', $panel);
}