<?php
//刪除會員頭貼
function delete_user_pic($user_sn = "")
{
  if(!$isuser) {
    $check = true;
  }
  if (file_exists("uploads/user/{$user_sn}.png")) {
    unlink("uploads/user/{$user_sn}.png");
  }
  if (file_exists("uploads/userthumbs/{$user_sn}.png")) {
    unlink("uploads/userthumbs/{$user_sn}.png");
  }
}