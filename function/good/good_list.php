<?php
//單元列表
function goods_list($keyword = "")
{
    global $mysqli, $smarty, $isuser;
    if (!$isuser) {
        return;
      }
    include_once "class/PageBar.php";
    $where   = !empty($keyword) ? "where `goods_title` like '%{$keyword}%' or `goods_content` like '%{$keyword}%'" : "";
    $sql     = "SELECT * FROM `goods` $where ORDER BY `goods_date` desc";
    $PageBar = getPageBar($sql, 20, 10);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $i = 0;
    while ($goods = $result->fetch_assoc()) {
        $all_goods[$i]        = $goods;
        $all_goods[$i]['pic'] = get_goods_pic($goods['goods_sn'], $goods['panel_sn'], "thumbs");
        $i++;
    }
    $smarty->assign('all_goods', $all_goods);
    $smarty->assign('total', $total);
    $smarty->assign('bar', $bar);
}