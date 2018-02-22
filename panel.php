<?php
/* 引入 */
require_once "header.php";
if (!$isuser) {
    return;
}

/* 流程控制 */
$op       = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$panel_sn = isset($_REQUEST['panel_sn']) ? my_filter($_REQUEST['panel_sn'], "int") : 0;

switch ($op) {
  case 'panel_form':
    require_once "function/panel/panel_form.php";
    panel_form($panel_sn);
    break;

  case 'insert_panel':
    require_once "function/panel/save_panel_pic.php";
    require_once "function/panel/insert_panel.php";
    $panel_sn = insert_panel();
    header("location:index.php?panel_sn={$panel_sn}");
    break;

  case 'update_panel':
    require_once "function/panel/update_panel.php";
    require_once "function/panel/save_panel_pic.php";
    update_panel();
    header("location:index.php");
    break;

  case 'delete_panel':
    require_once "function/panel/delete_panel.php";
    require_once "function/panel/delete_panel_pic.php";
    delete_panel($panel_sn);
    header("location:index.php");
    break;

  case 'display_panel':
    require_once "function/panel/add_panel_counter.php";
    require_once "function/panel/display_panel.php";
    display_panel($panel_sn);
    break;

  default:
    require_once "function/panel/panel_list.php";
    panel_list();
}

/* 輸出 */
require_once "footer.php";