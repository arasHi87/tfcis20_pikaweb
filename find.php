<?php
/* 引入 */
require_once "header.php";
if (!$isuser) {
    return;
}

/* 流程控制 */
$keyword = isset($_REQUEST['keyword']) ? my_filter($_REQUEST['keyword'], "string") : '';
find_result($keyword);
$op = "find_list";

/* 輸出 */
require_once "footer.php";

/* 本檔案使用函數 */
//搜尋結果
function find_result($keyword = "")
{
    global $mysqli, $smarty, $isuser;
    if (!$isuser) {
        return;
      }
    include_once "class/PageBar.php";
    //單元搜尋結果
    $where       = !empty($keyword) ? "where `goods_title` like '%{$keyword}%' or `goods_content` like '%{$keyword}%'" : "";
    $sql         = "SELECT * FROM `goods` $where ORDER BY `goods_date` desc";
    $PageBar     = getPageBar($sql, 20, 10);
    $goods_bar   = $PageBar['bar'];
    $sql         = $PageBar['sql'];
    $goods_total = $PageBar['total'];
    $result      = $mysqli->query($sql) or die($mysqli->connect_error);

    $i = 0;
    while ($goods = $result->fetch_assoc()) {
        $all_goods[$i]        = $goods;
        $all_goods[$i]['pic'] = get_goods_pic($goods['goods_sn'], $goods['panel_sn'], "thumbs");
        $i++;
    }
    $smarty->assign('all_goods', $all_goods);
    $smarty->assign('goods_total', $goods_total);
    $smarty->assign('goods_bar', $goods_bar);
    //公告搜尋結果
    $where     = !empty($keyword) ? "where `act_title` like '%{$kwyeord}%' or `act_content` like '%{$keyword}%'" : "";
    $sql       = "SELECT * FROM `act` $where ORDER BY `act_date` desc";
    $PageBar   = getPageBar($sql, 20, 10);
    $act_bar   = $PageBar['bar'];
    $sql       = $PageBar['sql'];
    $act_total = $PageBar['total'];
    $result    = $mysqli->query($sql) or die($mysqli->connect_error);

    $i = 0;
    while ($act = $result->fetch_assoc()) {
        $all_act[$i]        = $act;
        $all_act[$i]['pic'] = get_act_pic($act['act_sn'], "actthumbs");
        $i++;
    }
    $smarty->assign('all_act', $all_act);
    $smarty->assign('act_total', $act_total);
    $smarty->assign('act_bar', $act_bar);
    //面板搜尋結果
    $where       = !empty($keyword) ? "where `panel_title` like '%{$kwyeord}%' or `panel_content` like '%{$keyword}%'" : "";
    $sql         = "SELECT * FROM `panel` $where ORDER BY `panel_date` desc";
    $PageBar     = getPageBar($sql, 20, 10);
    $panel_bar   = $PageBar['bar'];
    $sql         = $PageBar['sql'];
    $panel_total = $PageBar['total'];
    $result      = $mysqli->query($sql) or die($mysqli->connect_error);

    $i = 0;
    while ($panel = $result->fetch_assoc()) {
        $all_panel[$i]        = $panel;
        $all_panel[$i]['pic'] = get_panel_pic($panel['panel_sn'], "thumbs");
        $i++;
    }
    $smarty->assign('all_panel', $all_panel);
    $smarty->assign('panel_total', $panel_total);
    $smarty->assign('panel_bar', $panel_bar);
}