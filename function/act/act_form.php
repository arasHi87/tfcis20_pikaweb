<?php
//站務編輯表單
function act_form($act_sn)
{
    global $mysqli, $smarty;
    if (empty($act_sn)) {
        $sql    = "EXPLAIN `act`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $act[$field_name] = '';
        }
    } else {
        $sql        = "SELECT * FROM `act` WHERE `act_sn`='{$act_sn}'";
        $result     = $mysqli->query($sql) or die($mysqli->connect_error);
        $act        = $result->fetch_assoc();
        $act['pic'] = get_goods_pic($act_sn, 'actthumbs');
    }
    $smarty->assign('act', $act);
}