<?php
require_once "header.php";

$op      = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$user_sn = isset($_REQUEST['user_sn']) ? my_filter($_REQUEST['user_sn'], "int") : 0;
$user_id = isset($_REQUEST['user_id']) ? my_filter($_REQUEST['user_id'], "string") : '';

switch ($op) {
  case 'user_form':
      require_once "function/user/user_form.php";
      user_form($user_sn);
      break;

  case 'insert_user':
      require_once "function/user/insert_user.php";
      require_once "function/user/save_user_pic.php";
      $user_sn = insert_user();
      header("location:{$_SERVER['PHP_SELF']}?op=display_user&user_sn=$user_sn");
      exit;
      break;

  case 'update_user':
      require_once "function/user/update_user.php";
      update_user();
      header("location:{$_SERVER['PHP_SELF']}?op=display_user&user_sn=$user_sn");
      exit;
      break;

  case 'delete_user':
      require_once "function/user/delete_user.php";
      require_once "function/user/delete_user_pic.php";
      delete_user($user_sn);
      header("location:{$_SERVER['PHP_SELF']}");
      exit;
      break;

  case 'delete_user_pic':
      require_once "function/user/delete_user_pic.php";
      delete_user_pic($user_sn);
      header("location:{$_SERVER['PHP_SELF']}");
      break;

  case 'user_login':
      require_once "function/user/user_login.php";
      $login = user_login($user_id);
      if ($login) {
        header("location:{$_SERVER['PHP_SELF']}");
      } else {
        header("location:index.php?msg=請再次確認帳密");
      }
      exit;
      break;

  case 'user_logout':
     require_once "function/user/user_logout.php";
     user_logout();
     header("location:index.php");
     exit;
     break;

  case 'user_list':
      require_once "function/user/user_list.php";
      user_list($user_sn);
      exit;
      break;

  case 'display_user':
      require_once "function/user/display_user.php";
      display_user($user_sn);
      break;

  default:
      if ($topadmin or $isadmin) {
        require_once "function/user/user_list.php";
        $op = 'user_list';
        user_list($user_sn);
      } else {
        require_once "function/user/display_user.php";
        $op = 'display_user';
        display_user($user_sn);
      }
      break;
}

require_once "footer.php";