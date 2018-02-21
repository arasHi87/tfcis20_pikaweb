<?php
/* Smarty version 3.1.29, created on 2018-02-21 06:09:10
  from "D:\UniServerZ\www\pika\templates\user_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8d0d06272a09_63128209',
  'file_dependency' => 
  array (
    'e2918d633384cf58336f1c0b938ce14e94c95cf6' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\user_list.html',
      1 => 1513749899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8d0d06272a09_63128209 ($_smarty_tpl) {
?>
<h3>使用者一覽</h3>
<?php if ($_smarty_tpl->tpl_vars['isadmin']->value || $_smarty_tpl->tpl_vars['topadmin']->value) {?>
  <table class="table table-border table-hover">
    <tr class="danger">
      <td>使用者編號</td><td>使用者姓名</td><td>使用者信箱</td><td>使用者電話</td><td>使用者權限</td>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['all_users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
      <tr>
        <td><a href="user.php?op=display_user&user_sn=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_tel'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_right'];?>
</td>
      </tr>
    <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
?>
  </table>
 <?php }
}
}
