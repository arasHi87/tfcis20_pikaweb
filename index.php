<?php
/*  引入  */
require_once "header.php";

/*  流程控制  */
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';

switch ($op) {

  default:
      if ($op == 'user_login') {
        $op = 'user_login';
      } else {
        header("location:panel.php");
      }
      break;
}

/* 輸出 */
require_once "footer.php";
