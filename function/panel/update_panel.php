<?php
function update_panel()
{
  global $mysqli, $isadmin;
  if (!$isadmin) {
    return;
  }
  foreach ($_POST as $var_name => $var_val) {
    $$var_name = $mysqli->real_escape_string($var_val);
  }

  $panel_date = date("Y-m-d H:i:s");

  $sql = "UPDATE `panel` SET
  `panel_title`='{$panel_title}',
  `panel_content`='{$panel_content}',
  `panel_date`='{$panel_date}'
  WHERE `panel_sn`='{$panel_sn}'";
  $mysqli->query($sql) or die($mysqli->connect_error);
  save_panel_pic($panel_sn);
}