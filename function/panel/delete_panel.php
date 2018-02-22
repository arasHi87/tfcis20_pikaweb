<?php
//刪除面板
function delete_panel($panel_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `panel` WHERE `panel_sn`='{$panel_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);

    delete_panel_pic($panel_sn);

    $sql = "DELETE FROM `goods` WHERE `panel_sn`='{$panel_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}