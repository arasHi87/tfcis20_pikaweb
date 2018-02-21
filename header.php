<?php
session_start();
require_once "config.php";
require_once "function.php";
require_once 'smarty/libs/Smarty.class.php';
require_once 'class/ckfinder/config.php';
$smarty = new Smarty;

$mysqli = new mysqli(_DB_HOST, _DB_ID, _DB_PW, _DB_NAME);
if ($mysqli->connect_error) {
    die('無法連上資料庫 (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");

$topadmin = $isadmin = $isuser = false;
if (isset($_SESSION['user_sn'])) {
  $isuser = true;
  $smarty->assign('login_user', $_SESSION['user']);

  $sql = "SELECT * FROM `users` where `user_sn`='{$_SESSION['user_sn']}'";
  $result = $mysqli->query($sql) or die($mysqli->connect_error);
  $user = $result->fetch_assoc();
  if (in_array($user['user_id'], $admin_array)) {
    $isadmin = $isuser = true;
  }
  if (in_array($user['user_id'], $topadmin_array)) {
    $topadmin = $isadmin = $isuser = true;
  }
}
$smarty->assign('topadmin', $topadmin);
$smarty->assign('isadmin', $isadmin);
$smarty->assign('isuser', $isuser);
