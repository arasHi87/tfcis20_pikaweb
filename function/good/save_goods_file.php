<?php
//儲存檔案
function save_goods_file($goods_sn = '', $panel_sn = '') {
    if (!isset($_FILES['goods_file']['tmp_name'])) {
        return;
    } else {
        $size = $_FILES['goods_file']['size'];
        if ($size > 10240000) {
            die("檔案過大請重新上傳");
        } else {
            if (is_dir("uploads/xfile/{$panel_sn}/{$goods_sn}")) {
                move_uploaded_file($_FILES['goods_file']['tmp_name'], "uploads/xfile/{$panel_sn}/{$goods_sn}/" . $_FILES['goods_file']['name']);
            } else {
                mkdir("uploads/xfile/");
                mkdir("uploads/xfile/{$panel_sn}");
                mkdir("uploads/xfile/{$panel_sn}/{$goods_sn}");
                move_uploaded_file($_FILES['goods_file']['tmp_name'], "uploads/xfile/{$panel_sn}/{$goods_sn}/" . $_FILES['goods_file']['name']);
            }
        }
    }
}