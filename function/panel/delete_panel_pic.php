<?php
//刪除圖片
function delete_panel_pic($panel_sn = "")
{
    if (file_exists("uploads/panel/{$panel_sn}.png")) {
        unlink("uploads/panel/{$panel_sn}.png");
    }
    if (file_exists("uploads/panelthumbs/{$panel_sn}.png")) {
        unlink("uploads/panelthumbs/{$panel_sn}.png");
    }
    $path = "uploads/goods/{$panel_sn}";
    delete_panel_file($path);
    $path = "uploads/thumbs/{$panel_sn}";
    delete_panel_file($path);
    
}