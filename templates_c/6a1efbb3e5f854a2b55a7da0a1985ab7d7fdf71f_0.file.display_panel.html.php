<?php
/* Smarty version 3.1.29, created on 2018-02-22 10:15:26
  from "D:\UniServerZ\www\pika\templates\display_panel.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8e983edd03e0_05284232',
  'file_dependency' => 
  array (
    '6a1efbb3e5f854a2b55a7da0a1985ab7d7fdf71f' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\display_panel.html',
      1 => 1519294521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8e983edd03e0_05284232 ($_smarty_tpl) {
?>
<div class="row">
  <?php if ($_smarty_tpl->tpl_vars['isadmin']->value) {?>
    <div class="col-md-4">
      <a href="panel.php?op=goods_form&panel_sn=<?php echo $_smarty_tpl->tpl_vars['panel_sn']->value;?>
" class="btn btn-block btn-primary">新增投稿</a>
    </div>
    <div class="col-md-4">
      <a href="panel.php?op=panel_form&panel_sn=<?php echo $_smarty_tpl->tpl_vars['panel_sn']->value;?>
" class="btn btn-block btn-warning">編輯面板</a>
    </div>
    <div class="col-md-4">
      <a href="panel.php?op=delete_panel&panel_sn=<?php echo $_smarty_tpl->tpl_vars['panel_sn']->value;?>
" class="btn btn-block btn-danger">刪除面板</a>
    </div>
    <br>
  <?php }?>
  <?php
$_from = $_smarty_tpl->tpl_vars['panel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_goods_0_saved_item = isset($_smarty_tpl->tpl_vars['goods']) ? $_smarty_tpl->tpl_vars['goods'] : false;
$_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['goods']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
$__foreach_goods_0_saved_local_item = $_smarty_tpl->tpl_vars['goods'];
?>
  <ul>
    <li><a href="index.php?op=display_goods&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</a></li>
  </ul>
  <?php
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_local_item;
}
if ($__foreach_goods_0_saved_item) {
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_item;
}
?>
</div>

共有<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
件資料
<?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

<?php }
}
