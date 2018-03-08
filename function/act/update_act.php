<?php
if (!$isadmin) {
  return;
}
function update_act()
{
  global $mysqli;
  foreach ($_POST as $var_name => $var_val) {
    $$var_name = $mysqli->real_escape_string($var_val);
  }

  $act_date = date("Y-m-d H:i:s");

  $sql = "UPDATE `act` SET
  `act_title`='{$act_title}',
  `act_content`='{$act_content}',
  `act_date`='{$act_date}'
  WHERE `act_sn`='{$act_sn}'";
  $mysqli->query($sql) or die($mysqli->connect_error);
  save_act_pic($act_sn);
}