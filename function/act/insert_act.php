<?php
if (!$isadmin) {
  return;
}
//儲存公告
function insert_act()
{
  global $mysqli;
  foreach ($_POST as $var_name => $var_val) {
      $$var_name = $mysqli->real_escape_string($var_val);
  }
  $act_date = date("Y-m-d H:i:s");

  $sql = "INSERT INTO `act` (`act_title`, `act_content`, `act_counter`, `act_date`) VALUES ('{$act_title}', '{$act_content}', '0', '{$act_date}')";
  $mysqli->query($sql) or die($mysqli->connect_error);
  $act_sn = $mysqli->insert_id;
  save_act_pic($act_sn);
  return $act_sn;
}