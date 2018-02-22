<?php
/* Smarty version 3.1.29, created on 2018-02-22 11:26:54
  from "D:\UniServerZ\www\pika\templates\latest_act.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8ea8fed4e673_73502960',
  'file_dependency' => 
  array (
    'e86345186744edd4097a165e4204ea2090f86abf' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\latest_act.html',
      1 => 1516467882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8ea8fed4e673_73502960 ($_smarty_tpl) {
?>
<h2>最新公告</h2>
<?php
$_from = $_smarty_tpl->tpl_vars['latest_act']->value;
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
  <div class="row">
    <div class="col-md-6">
      <img src="<?php echo $_smarty_tpl->tpl_vars['act']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_title'];?>
" class="img-thumbnail">
    </div>
  </div>
  <br>
  <div class="row">
    <h4><div style="color:rgb(255, 30, 0);"><?php echo $_smarty_tpl->tpl_vars['act']->value['act_title'];?>
</div></h4>
  </div>
  <br>
  <div class="row">
    <pre>
      <?php echo $_smarty_tpl->tpl_vars['act']->value['act_content'];?>

    </pre>
  </div>
<?php
$_smarty_tpl->tpl_vars['act'] = $__foreach_act_0_saved_local_item;
}
if ($__foreach_act_0_saved_item) {
$_smarty_tpl->tpl_vars['act'] = $__foreach_act_0_saved_item;
}
}
}
