<?php
//增加公告記數
function add_act_counter($act_sn)
{
    global $mysqli;

    $sql = "UPDATE `act` SET `act_counter`=`act_counter`+1 WHERE `act_sn`='{$act_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}