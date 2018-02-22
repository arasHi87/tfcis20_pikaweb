<?php
//觀看某一公告
function display_act($act_sn = '')
{
    global $mysqli, $smarty;
    add_act_counter($act_sn);
    $sql        = "SELECT * FROM `act` WHERE `act_sn`='{$act_sn}'";
    $result     = $mysqli->query($sql) or die($mysqli->connect_error);
    $act        = $result->fetch_assoc();
    $act['pic'] = get_act_pic($act_sn, "act");
    $smarty->assign('act', $act);
}