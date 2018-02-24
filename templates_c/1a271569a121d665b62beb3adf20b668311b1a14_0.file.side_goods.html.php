<?php
/* Smarty version 3.1.29, created on 2018-02-23 16:30:08
  from "D:\UniServerZ\www\pika\templates\side_goods.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a904190d374d4_99385869',
  'file_dependency' => 
  array (
    '1a271569a121d665b62beb3adf20b668311b1a14' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\side_goods.html',
      1 => 1519403358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a904190d374d4_99385869 ($_smarty_tpl) {
?>
<div class="panel panel-info">
    <div class="panel-heading">熱門貼文</div>
    <div class="panel-body">
      <?php
$_from = $_smarty_tpl->tpl_vars['all_hot_goods']->value;
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
      <div class="col-md-12">
        <div class="thumbnail">
          <a href="good.php?op=display_goods&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
"></a>
          <div class="caption">
            <div style="height: 60px;">
              <h3><a href="good.php?op=display_goods&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</a></h3>
            </div>
            <div class="row">
              <div class="col-md-12">瀏覽人數：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</div>
            </div>
          </div>
        </div>
      </div>
      <?php
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_local_item;
}
if ($__foreach_goods_0_saved_item) {
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_item;
}
?>
    </div>
  </div><?php }
}
