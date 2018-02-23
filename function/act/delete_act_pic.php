<?php
if (!$isadmin) {
    return;
  }
//刪除圖片
function delete_act_pic($act_sn = "")
{
    if (file_exists("uploads/act/{$act_sn}.png")) {
        unlink("uploads/act/{$act_sn}.png");
    }
    if (file_exists("uploads/actthumbs/{$act_sn}.png")) {
        unlink("uploads/actthumbs/{$act_sn}.png");
    }
}