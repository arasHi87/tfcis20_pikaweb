<?php
//觀看所有使用者
function user_list($user_sn)
{
  global $mysqli, $smarty, $isuser, $isadmin, $topadmin;
  if (empty($user_sn)) {
    $user_sn = $_SESSION['user_sn'];
  }

  if ($isuser) {
    $user_sn = $isadmin ? $user_sn : $_SESSION['user_sn'];
  } else {
    die('請先登入');
  }

  $sql = "SELECT * FROM  `users` ORDER BY `user_sn` desc";
  $result = $mysqli->query($sql) or die($mysqli->connect_error);
  $i = 0;
  while ($user = $result->fetch_assoc()) {
    $all_users[$i] = $user;
    $i++;
  }
  $smarty->assign('all_users', $all_users);
  $smarty->assign('now_user_sn', $user_sn);
}