<?php
/* Smarty version 3.1.29, created on 2018-02-23 01:36:49
  from "D:\UniServerZ\www\pika\templates\side_tool.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8f703177fd57_27858497',
  'file_dependency' => 
  array (
    'eaefa247a88baa80889fd876decc7137fca4cd8f' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\side_tool.html',
      1 => 1519349586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8f703177fd57_27858497 ($_smarty_tpl) {
?>
<form action="find.php" method="get" role="form">
  <div class="input-group">
    <input name="keyword" type="text"class="form-control" placeholder="請輸入關鍵字">
    <span class="input-group-btn">
      <button class="btn btn-warning" type="submit">搜尋</button>
    </span>
  </div>
</form>
<br>
<form action="user.php" method="post" role="form" class="form-horizion">
  <div class="panel panel-primary">
    <div class="panel-heading">側欄工具</div>
    <div class="panel-body">
      <a href="index.php" class="btn btn-block btn-primary">回到主頁</a>
      <?php if ($_smarty_tpl->tpl_vars['isadmin']->value) {?>
        <a href="panel.php?op=panel_form" class="btn btn-block btn-info">新增面板</a>
        <a href="act.php?op=act_form" class="btn btn-block btn-yellow">發布公告</a>
      <?php }?>
      <a href="user.php" class="btn btn-block btn-success">我的資料</a>
      <a href="act.php?op=act_list" class="btn btn-block btn-warning">查看公告</a>
      <?php if ($_smarty_tpl->tpl_vars['isuser']->value) {?>
        <a href="user.php?op=user_logout" class="btn btn-block btn-danger">登出</a>
      <?php }?>
    </div>
  </div>
</form>
<?php }
}
