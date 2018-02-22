<?php
//觀看某一面板
function display_panel($panel_sn)
{
  global $mysqli, $smarty;
  add_panel_counter($panel_sn);
  include_once "class/PageBar.php";
  $sql = "SELECT a.*,b.* FROM `panel` AS a
  JOIN `goods` AS b on a.`panel_sn`=b.`panel_sn`
  WHERE a.`panel_sn`='{$panel_sn}'";
  $PageBar = getPageBar($sql, 20, 20);
  $bar     = $PageBar['bar'];
  $sql     = $PageBar['sql'];
  $total   = $PageBar['total'];
  $result = $mysqli->query($sql) or die($mysqli->connect_error);
  while ($all = $result->fetch_assoc()) {
    $panel[] = $all;
  }
  $smarty->assign('panel', $panel);
  $smarty->assign('total', $total);
  $smarty->assign('bar', $bar);
  $smarty->assign('panel_sn', $panel_sn);
}