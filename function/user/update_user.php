<?php
//更新會員
function update_user()
{
  global $mysqli, $isadmin, $isuser, $topadmin;
   foreach ($_POST as $var_title => $var_value) {
       $$var_title = $mysqli->real_escape_string($_POST[$var_title]);
   }
   $passwd_update = '';
   if (!empty($_POST['user_passwd'])) {
       $user_passwd   = password_hash($_POST['user_passwd'], PASSWORD_DEFAULT);
       $passwd_update = "`user_passwd` = '{$user_passwd}',";
   }
   if ($isuser) {
       $user_sn = $isadmin ? $user_sn : $_SESSION['user_sn'];
   } else {
       $check = true;
   }
   $sql = "UPDATE `users` SET
     `user_name` = '{$user_name}',
     `user_id` = '{$user_id}',
     {$passwd_update}
     `user_email` = '{$user_email}',
     `user_sex` = '{$user_sex}',
     `user_tel` = '{$user_tel}',
     `user_content`='{$user_content}'
   WHERE `user_sn` = '{$user_sn}'";
   save_user_pic($user_sn);
   $mysqli->query($sql) or die($mysqli->connect_error);
}