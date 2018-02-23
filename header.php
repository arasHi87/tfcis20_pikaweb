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

/* 流程 */
side_act();
latest_act();

/* 本檔案使用函數 */

//站務列表
function side_act()
{
    global $mysqli, $smarty;
    include_once "class/PageBar.php";
    $sql     = "SELECT * FROM `act` ORDER BY `act_date` desc";
    $PageBar = getPageBar($sql, 3, 1);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($act = $result->fetch_assoc()) {
        $new_act[$i]       = $act;
        $new_act[$i]['pic'] = get_act_pic($act['act_sn'], 'actthumbs');
        $i++;
    }
    $smarty->assign('new_act', $new_act);
    $smarty->assign('total', $total);
    $smarty->assign('bar', $bar);
}

//最新公告
function latest_act() {
  global $mysqli, $smarty;
  include_once "class/PageBar.php";
    $sql     = "SELECT * FROM `act` ORDER BY `act_date` desc";
    $PageBar = getPageBar($sql, 1, 1);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($act = $result->fetch_assoc()) {
        $latest_act[$i] = $act;
        $latest_act[$i]['pic'] = get_act_pic($act['act_sn'], 'act');
        $i++;
    }
    $smarty->assign('latest_act', $latest_act);
    $smarty->assign('bar', $bar);
}