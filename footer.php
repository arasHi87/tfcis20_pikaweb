<?php
$user_sn = $_SESSION['user_sn'];
//顯示訊息
if (isset($_REQUEST['msg'])) {
  $smarty->assign('msg', $_REQUEST['msg']);
}
 if ($isuser) {
   if (empty($_COOKIE['user_token'])) {
     unset($_SESSION['user_sn']);
     unset($_SESSION['user']);
     header("location:index.php?msg=請先登入");
   } else{
    $sql = "SELECT * FROM `users` WHERE `user_sn`='{$user_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $user = $result->fetch_assoc();
    if ($_COOKIE['user_token'] != $user['user_token']) {
      unset($_SESSION['user_sn']);
      unset($_SESSION['user']);
      header("location:index.php?msg=請先登入");
    }
   }
 }

$smarty->assign('system_name', _system_name);
$smarty->assign('op', $op);
$smarty->display('index.html');