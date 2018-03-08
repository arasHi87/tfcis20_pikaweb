<?php
function insert_user()
{
  require_once "config.php";
  global $mysqli, $admin_array, $topadmin_array;
     foreach ($_POST as $var_name => $var_val) {
         $$var_name = $mysqli->real_escape_string($var_val);
     }
     if ($key != $_SESSION['key']) {
       die("認證碼錯誤,請回上頁重新輸入");
     }

     $sql = "SELECT * FROM `users` where `user_id`='{$user_id}'";
     $result = $mysqli->query($sql) or die($mysqli->connect_error);
     $assoc = $result->fetch_assoc();
     if (!empty($assoc)) {
       die("帳號已存在!");
     }

     $user_passwd = password_hash($_POST['user_passwd'], PASSWORD_DEFAULT);
     if (in_array($user_id, $topadmin_array)) {
       $user_right = 'topadmin';
       if(in_array($user_id, $admin_array)) {
         $user_right = 'isadmin';
       }
     } else {
       $user_right = 'isuser';
     }

     $sql = "INSERT INTO `users` (`user_name`,
       `user_id`,
       `user_passwd`,
       `user_email`,
       `user_sex`,
       `user_tel`,
       `user_content`,
       `user_right`) VALUES ('{$user_name}',
         '{$user_id}',
         '{$user_passwd}',
         '{$user_email}',
         '{$user_sex}',
         '{$user_tel}',
         '{$user_content}',
         '{$user_right}')";
     $mysqli->query($sql) or die($mysqli->connect_error);
     $user_sn             = $mysqli->insert_id;
     $_SESSION['user_sn'] = $user_sn;
     $_POST['user_sn']    = $user_sn;
     $_SESSION['user']    = $_POST;
     save_user_pic($user_sn);
     return $user_sn;
   }