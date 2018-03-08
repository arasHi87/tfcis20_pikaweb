<?php
function panel_form($panel_sn)
{
    global $mysqli, $smarty, $isadmin;
    if (!$isadmin) {
        return;
    }
    if (empty($panel_sn)) {
        $sql    = "EXPLAIN `panel`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $panel[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `panel` WHERE `panel_sn`='{$panel_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $panel        = $result->fetch_assoc();
        $panel['pic'] = get_panel_pic($panel_sn, 'panelthumbs');
    }
    $smarty->assign('panel', $panel);
}