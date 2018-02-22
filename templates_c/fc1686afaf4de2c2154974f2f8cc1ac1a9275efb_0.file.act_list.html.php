<?php
/* Smarty version 3.1.29, created on 2018-02-22 14:30:37
  from "D:\UniServerZ\www\pika\templates\act_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8ed40dd8f341_62499392',
  'file_dependency' => 
  array (
    'fc1686afaf4de2c2154974f2f8cc1ac1a9275efb' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\act_list.html',
      1 => 1516457855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8ed40dd8f341_62499392 ($_smarty_tpl) {
?>
<div class="row">
  <?php
$_from = $_smarty_tpl->tpl_vars['all_act']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_act_0_saved_item = isset($_smarty_tpl->tpl_vars['act']) ? $_smarty_tpl->tpl_vars['act'] : false;
$_smarty_tpl->tpl_vars['act'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['act']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['act']->value) {
$_smarty_tpl->tpl_vars['act']->_loop = true;
$__foreach_act_0_saved_local_item = $_smarty_tpl->tpl_vars['act'];
?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
      <a href="index.php?op=display_act&act_sn=<?php echo $_smarty_tpl->tpl_vars['act']->value['act_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['act']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_title'];?>
"></a>
        <div class="caption">
          <div style="height: 60px;">
            <h3><a href="act.php?op=display_act&act_sn=<?php echo $_smarty_tpl->tpl_vars['act']->value['act_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['act']->value['act_title'];?>
</a></h3>
          </div>
        </div>
      </div>
    </div>
  <?php
$_smarty_tpl->tpl_vars['act'] = $__foreach_act_0_saved_local_item;
}
if ($__foreach_act_0_saved_item) {
$_smarty_tpl->tpl_vars['act'] = $__foreach_act_0_saved_item;
}
?>
</div>

共有 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 件公告
<?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

<?php }
}
