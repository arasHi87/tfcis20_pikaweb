<?php
//下載檔案
function download_file($panel_sn = '', $goods_sn = '') {
    global $mysqli, $isuser;
    
    if (!$isuser) {
        return;
    }

    $sql = "SELECT * FROM `goods` WHERE `goods_sn`='{$goods_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $goods  = $result->fetch_assoc();
    $name = "uploads/xfile/{$panel_sn}/{$goods_sn}/{$goods['goods_name']}";
    header("Content-type:application");
    header("Content-Length: " .(string)(filesize($name)));
    header("Content-Disposition: attachment; filename=".$goods['goods_name']);
    readfile($name);
}