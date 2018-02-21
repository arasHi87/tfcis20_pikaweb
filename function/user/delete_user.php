<?php
//刪除會員
function delete_user($user_sn)
{
  global $mysqli, $isadmin, $topadmin;

  if (!$isadmin) {
    return;
  }
  $sql = "DELETE FROM `users` WHERE `user_sn`='{$user_sn}'";
  $mysqli->query($sql) or die($mysqli->connect_error);
  delete_user_pic($user_sn);
}