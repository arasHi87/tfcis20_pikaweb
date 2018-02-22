<?php
//面板列表
function panel_list()
{
    global $mysqli, $smarty;
    include_once "class/PageBar.php";
    $sql     = "SELECT * FROM `panel` ORDER BY `panel_date` desc";
    $PageBar = getPageBar($sql, 4, 100);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $i = 0;
    while ($panel = $result->fetch_assoc()) {
        $all_panel[$i]        = $panel;
        $all_panel[$i]['pic'] = get_panel_pic($panel['panel_sn'], 'panel');
        $i++;
    }
    $smarty->assign('all_panel', $all_panel);
    $smarty->assign('total', $total);
    $smarty->assign('bar', $bar);
}