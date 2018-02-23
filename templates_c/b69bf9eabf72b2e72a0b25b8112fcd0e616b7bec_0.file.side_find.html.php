<?php
/* Smarty version 3.1.29, created on 2018-02-23 00:36:25
  from "D:\UniServerZ\www\pika\templates\side_find.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8f6209a6e6e8_35943947',
  'file_dependency' => 
  array (
    'b69bf9eabf72b2e72a0b25b8112fcd0e616b7bec' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\side_find.html',
      1 => 1519346162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8f6209a6e6e8_35943947 ($_smarty_tpl) {
?>
<form action="find.php" method="get" role="form">
    <div class="input-group">
      <input name="keyword" type="text"class="form-control" placeholder="請輸入關鍵字">
      <span class="input-group-btn">
        <button class="btn btn-warning" type="submit">搜尋</button>
      </span>
    </div>
  </form><?php }
}
