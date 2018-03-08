<?php
if (!$isadmin) {
    return;
  }
//刪除公告
function delete_act($act_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `act` WHERE `act_sn`='{$act_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    delete_act_pic($act_sn);
}