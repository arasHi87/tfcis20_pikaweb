<?php
//站務列表
function act_list()
{
    global $mysqli, $smarty;
    include_once "class/PageBar.php";
    $sql     = "SELECT * FROM `act` ORDER BY `act_date` desc";
    $PageBar = getPageBar($sql, 20, 10);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $i = 0;
    while ($act = $result->fetch_assoc()) {
        $all_act[$i]       = $act;
        $all_act[$i]['pic'] = get_act_pic($act['act_sn'], 'actthumbs');
        $i++;
    }

    $smarty->assign('all_act', $all_act);
    $smarty->assign('total', $total);
    $smarty->assign('bar', $bar);
}