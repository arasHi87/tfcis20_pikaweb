<?php
function insert_panel()
{
  global $mysqli, $isadmin;
  if (!$isadmin) {
    return;
  }
  foreach ($_POST as $var_name => $var_val) {
      $$var_name = $mysqli->real_escape_string($var_val);
  }
  $panel_date = date("Y-m-d H:i:s");

  $sql = "INSERT INTO `panel` (`panel_title`, `panel_content`, `panel_counter`, `panel_date`) VALUES ('{$panel_title}', '{$panel_content}', '0', '{$panel_date}')";
  $mysqli->query($sql) or die($mysqli->connect_error);
  $panel_sn = $mysqli->insert_id;
  save_panel_pic($panel_sn);
  return $panel_sn;
}