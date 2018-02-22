<?php
/* Smarty version 3.1.29, created on 2018-02-22 11:25:55
  from "D:\UniServerZ\www\pika\templates\side_act.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8ea8c3d3f9e4_52152480',
  'file_dependency' => 
  array (
    'c2f9a24e9f8640322a1cc80c371e5755de4eb1f2' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\side_act.html',
      1 => 1516460889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8ea8c3d3f9e4_52152480 ($_smarty_tpl) {
?>
<div class="panel panel-danger">
  <div class="panel-heading">站務公告</div>
  <div class="panel-body">
    <?php
$_from = $_smarty_tpl->tpl_vars['new_act']->value;
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
    <div class="col-md-12">
      <div class="thumbnail">
        <a href="act.php?op=display_act&act_sn=<?php echo $_smarty_tpl->tpl_vars['act']->value['act_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['act']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_title'];?>
"></a>
        <div class="caption">
          <div style="height: 60px;">
            <h3><a href="act.php?op=display_act&act_sn=<?php echo $_smarty_tpl->tpl_vars['act']->value['act_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['act']->value['act_title'];?>
</a></h3>
          </div>
          <div class="row">
            <div class="col-md-12">瀏覽人數：<?php echo $_smarty_tpl->tpl_vars['act']->value['act_counter'];?>
</div>
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
    <a href="act.php?op=act_list">點我查看全部...</a>
  </div>
</div>
<?php }
}
