<?php
//刪除圖片
function delete_goods_pic($goods_sn = "", $panel_sn="")
{
    global $isadmin;
    if (!$isadmin) {
        return;
    }
    if (file_exists("uploads/goods/{$panel_sn}/{$goods_sn}.png")) {
        unlink("uploads/goods/{$panel_sn}/{$goods_sn}.png");
    }
    if (file_exists("uploads/thumbs/{$panel_sn}/{$goods_sn}.png")) {
        unlink("uploads/thumbs/{$panel_sn}/{$goods_sn}.png");
    }
}