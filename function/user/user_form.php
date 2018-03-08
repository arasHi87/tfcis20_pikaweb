<?php
//註冊會員表單
function user_form($user_sn)
{
    global $mysqli, $smarty, $isadmin;
    if (empty($user_sn)) {
        $sql    = "EXPLAIN `users`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $user[$field_name] = '';
        }
    } else {
        if (!$isadmin) {
          if ($user_sn != $_SESSION['user_sn']) {
            die("你以為你找到漏洞了??  呵呵  笑你~~");
          }
        }
        $sql    = "SELECT * FROM `users` WHERE `user_sn`='{$user_sn}'";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        $user   = $result->fetch_assoc();
        $user['pic'] = get_user_pic($user_sn, 'userthumbs');
    }
    $smarty->assign('user', $user);
}