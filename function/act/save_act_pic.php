<?php
if (!$isadmin) {
    return;
  }
//儲存圖片
function save_act_pic($act_sn = "")
{
  include_once "class/upload/class.upload.php";
  $pic = new Upload($_FILES['act_pic'], 'zh_TW');
  if ($pic->uploaded) {
    $pic->file_new_name_body = $act_sn;
    $pic->file_overwrite     = true;
    $pic->image_resize       = true;
    $pic->image_x            = 600;
    $pic->image_y            = 400;
    $pic->image_convert      = 'png';
    $pic->image_ratio_crop   = true;
    $pic->Process('uploads/act/');
    if (!$pic->processed) {
        return 'error : ' . $pic->error;
    }
    //縮圖
    $pic->file_new_name_body = $act_sn;
    $pic->file_overwrite     = true;
    $pic->image_resize       = true;
    $pic->image_x            = 300;
    $pic->image_y            = 200;
    $pic->image_convert      = 'png';
    $pic->image_ratio_crop   = true;
    $pic->Process('uploads/actthumbs/');
    if ($pic->processed) {
        $pic->Clean();
    } else {
        return 'error : ' . $pic->error;
    }
  }
}