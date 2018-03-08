<?php
//上傳使用者頭貼
function save_user_pic($user_sn = "")
{
  if(!$isuser) {
    $check = true;
  }
    include_once "class/upload/class.upload.php";
    $pic = new Upload($_FILES['user_pic'], 'zh_TW');
    if ($pic->uploaded) {
        //大圖
        $pic->file_new_name_body = $user_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 600;
        $pic->image_y            = 400;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/user/');
        if (!$pic->processed) {
            return 'error : ' . $pic->error;
        }
        //縮圖
        $pic->file_new_name_body = $user_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 300;
        $pic->image_y            = 200;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/userthumbs/');
        if ($pic->processed) {
            $pic->Clean();
        } else {
            return 'error : ' . $pic->error;
        }
    }
}