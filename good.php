<?php
/*  引入  */
require_once "header.php";

/*  流程控制  */
$op       = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$goods_sn = isset($_REQUEST['goods_sn']) ? my_filter($_REQUEST['goods_sn'], "int") : 0;
$user_sn  = isset($_REQUEST['user_sn']) ? my_filter($_REQUEST['user_sn'], "int") : 0;
$panel_sn = isset($_REQUEST['panel_sn']) ? my_filter($_REQUEST['panel_sn'], "int") : 0;
$keyword  = isset($_REQUEST['keyword']) ? my_filter($_REQUEST['keyword'], "string") : '';
switch ($op) {
    case 'goods_form':
        require_once "function/good/goods_form.php";
        goods_form($goods_sn, $panel_sn);
        break;

    case 'update_goods':
        require_once "function/good/save_goods_file.php";
        require_once "function/goood/save_goods_pic.php";
        require_once "function/good/update_goods.php";
        update_goods($goods_sn);
        header("location:good.php?op=display_goods&goods_sn={$goods_sn}&panel_sn={$panel_sn}");
        exit;
        break;

    case 'delete_goods':
        require_once "function/good/delete_goods.php";
        require_once "function/good/delete_goods_pic.php";
        delete_goods($goods_sn, $panel_sn);
        header("location:panel.php?op=display_panel&panel_sn={$panel_sn}");
        exit;
        break;

    case 'insert_goods':
        require_once "function/good/save_goods_file.php";
        require_once "function/good/save_goods_pic.php";
        require_once "function/good/insert_goods.php";
        $goods_sn = insert_goods();
        header("location:good.php?op=display_goods&goods_sn={$goods_sn}&panel_sn={$panel_sn}");
        break;

    case 'display_goods':
        require_once "function/good/display_goods.php";
        require_once "function/good/add_goods_counter.php";
        display_goods($goods_sn, $panel_sn);
        break;

    case 'download_file':
        require_once "function/good/download_file.php";
        download_file($panel_sn, $goods_sn);
        if(isset($check)) {
            header("location:index.php?msg=請先登入");
        }
        break;

    default:
        require_once "function/good/goods_list.php";
        if(isset($keyword) and $keyword != '') {
            $op = 'goods_list';
            goods_list($keyword);
          }
}

/*  輸出  */
require_once "footer.php";
