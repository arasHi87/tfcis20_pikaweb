<?php
//儲存單元
function insert_goods()
{
    global $mysqli, $isadmin;
    if (!$isadmin) {
        return;
    }
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $goods_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `goods` (`goods_title`, `goods_content`, `goods_another`, `goods_price`, `goods_counter`, `goods_date`, `user_sn`, `panel_sn`) VALUES ('{$goods_title}', '{$goods_content}', '{$goods_another}', '{$goods_price}', '0', '{$goods_date}', '{$_SESSION['user_sn']}', '{$panel_sn}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $goods_sn = $mysqli->insert_id;
    save_goods_pic($goods_sn, $panel_sn);
    save_goods_file($goods_sn, $panel_sn);
    return $goods_sn;
}