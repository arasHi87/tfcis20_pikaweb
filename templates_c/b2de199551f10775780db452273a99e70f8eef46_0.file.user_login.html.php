<?php
/* Smarty version 3.1.29, created on 2018-02-23 05:07:59
  from "D:\UniServerZ\www\pika\templates\user_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8fa1af09f8d6_46878904',
  'file_dependency' => 
  array (
    'b2de199551f10775780db452273a99e70f8eef46' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\user_login.html',
      1 => 1519362472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8fa1af09f8d6_46878904 ($_smarty_tpl) {
?>
<form action="user.php" method="post" role="form" class="form-horizontal">
  <div class="form-group">
    <label class="col-md-2 control-label">帳號 : </label>
    <div class="col-md-5">
      <input type="text" name="user_id" id="user_id" class="form-control" placeholder="請輸入帳號">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label">密碼 : </label>
    <div class="col-md-5">
      <input type="password" name="user_passwd" id="user_passwd" class="form-control" placeholder="請輸入密碼">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-2"></div>
    <div class="col-md-5">
      <input type="hidden" name="op" value="user_login">
      <button type="submit" name="button" class="btn btn-primary btn-block">登入</button>
    </div>
  </div>
</form>
<?php }
}
