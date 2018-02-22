<?php
/* Smarty version 3.1.29, created on 2018-02-22 11:33:34
  from "D:\UniServerZ\www\pika\templates\panel_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8eaa8e908db3_36476513',
  'file_dependency' => 
  array (
    '83cec5db92df8fc2eebf8ea0cb99f1df7e927616' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\panel_list.html',
      1 => 1519299207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8eaa8e908db3_36476513 ($_smarty_tpl) {
?>
<div class="row">
  <?php
$_from = $_smarty_tpl->tpl_vars['all_panel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_panel_0_saved_item = isset($_smarty_tpl->tpl_vars['panel']) ? $_smarty_tpl->tpl_vars['panel'] : false;
$_smarty_tpl->tpl_vars['panel'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['panel']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->_loop = true;
$__foreach_panel_0_saved_local_item = $_smarty_tpl->tpl_vars['panel'];
?>
  <div class="col-md-12">
    <div class="thumbnail">
      <a href="panel.php?op=display_panel&panel_sn=<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['panel']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_title'];?>
">
        <div class="caption">
          <div style="height: 60px">
            <h3><a href="panel.php?op=display_panel&panel_sn=<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_title'];?>
</a></h3>
              <div class="col-md-6" style="font-size: 20px">本版人氣：<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_counter'];?>
</div>
          </div>
        </div>
      </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['panel'] = $__foreach_panel_0_saved_local_item;
}
if ($__foreach_panel_0_saved_item) {
$_smarty_tpl->tpl_vars['panel'] = $__foreach_panel_0_saved_item;
}
?>
  </div>
共有<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
個面板
<?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

<?php }
}
