<?php
//增加面板人氣
function add_panel_counter($panel_sn)
{
    global $mysqli;

    $sql = "UPDATE `panel` SET `panel_counter`=`panel_counter`+1 WHERE `panel_sn`='{$panel_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}