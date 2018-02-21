<?php
//會員登出
function user_logout()
{
  setcookie("user_token", $user_token, time()-216000);
  unset($_SESSION['user_sn']);
  unset($_SESSION['user']);
}