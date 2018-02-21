<?php
//觀看單一使用者
function display_user($user_sn)
{
  global $mysqli, $smarty, $isadmin, $isuser, $topadmin;
  if (empty($user_sn)) {
    $user_sn = $_SESSION['user_sn'];
  }
  if (!$isuser) {
    $check = true;
  }
  $sql    = "SELECT * FROM `users` WHERE `user_sn`='{$user_sn}'";
  $result = $mysqli->query($sql) or die($mysqli->connect_error);
  $user   = $result->fetch_assoc();
  $user['pic'] = get_user_pic($user_sn, $type = 'user');
  $smarty->assign('user', $user);
  $smarty->assign('now_user_sn', $user_sn);
}