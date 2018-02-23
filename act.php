<?php
/* 引入 */
require_once "header.php";

/* 流程控制 */
$op       = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$act_sn  = isset($_REQUEST['act_sn']) ? my_filter($_REQUEST['act_sn'], "int") : 0;

switch ($op) {
  case 'act_form':
    require_once "function/act/act_form.php";
    act_form($act_sn);
    break;

  case 'update_act':
    require_once "function/act/update_act.php";
    require_once "function/act/save_act_pic.php";
    update_act($act_sn);
    header("location:index.php?act_sn={$act_sn}");
    exit;
    break;

  case 'insert_act':
    require_once "function/act/insert_act.php";
    require_once "function/act/save_act_pic.php";
    $act_sn = insert_act();
    header("location:index.php?act_sn={$act_sn}");
    exit;
    break;

  case 'delete_act':
    require_once "function/act/delete_act.php";
    require_once "function/act/delete_act_pic.php";
    delete_act($act_sn);
    header("location:index.php?op=act_list");
    exit;
    break;

  case 'display_act':
    require_once "function/act/display_act.php";
    require_once "function/act/add_act_counter.php";
    display_act($act_sn);
    break;

  case 'act_list':
    require_once "function/act/act_list.php";
    act_list();
    break;
   }

/* 輸出 */
require_once "footer.php";