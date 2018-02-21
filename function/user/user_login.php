<?php
//會員登入
 function user_login($user_id)
{
  global $mysqli;
  if (empty($user_id)) {
    return false;
  }

  $sql    = "SELECT * FROM `users` WHERE `user_id`='{$user_id}'";
  $result = $mysqli->query($sql) or die($mysqli->connect_error);
  $user   = $result->fetch_assoc();
  if (!empty($user)) {
    if (password_verify($_POST['user_passwd'], $user['user_passwd'])) {
      $_SESSION['user_sn'] = $user['user_sn'];
      $_SESSION['user']    = $user;
      $user_sn = $_SESSION['user_sn'];
      //new token on server
      $user_date = date("Y-m-d H:i:s");
      $user_token = password_hash($user_date, PASSWORD_DEFAULT);
      $sql = "UPDATE `users` SET `user_token`='{$user_token}' WHERE `user_sn`='{$user_sn}'";
      $mysqli->query($sql) or die($mysqli->connect_error);
      $sql = "SELECT * FROM `users` WHERE  `user_sn`='{$user_sn}'";
      $result = $mysqli->query($sql) or die($mysqli->connect_error);
      $user = $result->fetch_assoc();
      //new token on client
      setcookie("user_token", $user_token, time()+216000);
      return true;
    }
  }
  return false;
}