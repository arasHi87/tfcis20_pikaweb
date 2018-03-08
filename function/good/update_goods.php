<?php
//單元修改
function update_goods($goods_sn)
{
    global $mysqli, $isadmin;
    if (!$isadmin) {
        return;
    }
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $name = $_FILES['goods_file']['name'];
    if (!empty($name)) {
        $goods_name = "`goods_name` = '{$name}',";
    }

    $goods_date = date("Y-m-d H:i:s");

    $sql = "UPDATE `goods` SET
    `goods_title`='{$goods_title}',
    `goods_content`='{$goods_content}',
    `goods_another` = '{$goods_another}',
    {$goods_name}
    `goods_price`='{$goods_price}',
    `goods_date`='{$goods_date}'
    WHERE `goods_sn`='{$goods_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    save_goods_pic($goods_sn, $panel_sn);
    save_goods_file($goods_sn, $panel_sn);
}