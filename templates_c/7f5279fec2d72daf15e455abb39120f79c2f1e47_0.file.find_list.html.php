<?php
/* Smarty version 3.1.29, created on 2018-02-22 14:47:54
  from "D:\UniServerZ\www\pika\templates\find_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8ed81a420fc2_63618118',
  'file_dependency' => 
  array (
    '7f5279fec2d72daf15e455abb39120f79c2f1e47' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\find_list.html',
      1 => 1517930293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8ed81a420fc2_63618118 ($_smarty_tpl) {
?>
<h1>搜尋結果</h1>
<h3>單元搜尋結果</h3>
<?php if (isset($_smarty_tpl->tpl_vars['all_goods']->value) && $_smarty_tpl->tpl_vars['all_goods']->value != '') {?>
<div class="row">
  <?php
$_from = $_smarty_tpl->tpl_vars['all_goods']->value;
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
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <a href="good.php?op=display_goods&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
&panel_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['panel_sn'];?>
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
            <div class="col-md-6">人氣：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
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
<?php } else { ?>
在單元中並沒有符合的搜尋結果喔QAQ
<?php }?>
<h3>公告搜尋結果</h3>
<?php if (isset($_smarty_tpl->tpl_vars['all_act']->value) && $_smarty_tpl->tpl_vars['all_act']->value != '') {?>
<div class="row">
  <?php
$_from = $_smarty_tpl->tpl_vars['all_act']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_act_1_saved_item = isset($_smarty_tpl->tpl_vars['act']) ? $_smarty_tpl->tpl_vars['act'] : false;
$_smarty_tpl->tpl_vars['act'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['act']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['act']->value) {
$_smarty_tpl->tpl_vars['act']->_loop = true;
$__foreach_act_1_saved_local_item = $_smarty_tpl->tpl_vars['act'];
?>
    <div class="col-sm-6 col-md-4">
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
            <div class="col-md-6">人氣：<?php echo $_smarty_tpl->tpl_vars['act']->value['act_counter'];?>
</div>
          </div>
        </div>
      </div>
    </div>
  <?php
$_smarty_tpl->tpl_vars['act'] = $__foreach_act_1_saved_local_item;
}
if ($__foreach_act_1_saved_item) {
$_smarty_tpl->tpl_vars['act'] = $__foreach_act_1_saved_item;
}
?>
</div>
<?php } else { ?>
在公告中沒有符合的搜尋結果喔QAQ
<?php }
}
}
