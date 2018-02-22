<?php
/* Smarty version 3.1.29, created on 2018-02-22 11:34:13
  from "D:\UniServerZ\www\pika\templates\display_goods.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8eaab5be4936_97388921',
  'file_dependency' => 
  array (
    'b2c1787be45be8e70f91ed2f83a06cf75ea83c10' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\display_goods.html',
      1 => 1516970766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8eaab5be4936_97388921 ($_smarty_tpl) {
?>
<div class="row">
  <div class="col-md-6">
    <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
" class="img-thumbnail">
  </div>
  <div class="col-md-6">
    <h2><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</h2>
    <p>瀏覽人數：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</p>
    <p>發布者：<?php echo $_smarty_tpl->tpl_vars['goods']->value['user_name'];?>
</p>
    <p>發布時間：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_date'];?>
</p>
    <div>
    <?php if ($_smarty_tpl->tpl_vars['isadmin']->value) {?>
        <a href="good.php?op=goods_form&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
&panel_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['panel_sn'];?>
" class="btn btn-warning">編輯資料</a>
        <a href="good.php?op=delete_goods&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
&panel_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['panel_sn'];?>
" class="btn btn-danger">刪除單元</a>
    <?php }?>
    </div>
  </div>
</div>
<div>
  <h3><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</h3>
  <pre>
    <span style="font-size:20px;">
        <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>

    </span>
  </pre>
</div>
<br>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#another_goods" aria-controls="another_goods" role="tab" data-toggle="tab">補充資料</a></li>
  <li role="presentation"><a href="#goods_file" aria-controls="goods_file" role="tab" data-toggle="tab">檔案下載</a></li>
</ul>
<br>
<div class="tab-content">
  <div role="tabpanel" class="tab-pane" id="another_goods">
    <?php if (isset($_smarty_tpl->tpl_vars['goods']->value['goods_another']) && $_smarty_tpl->tpl_vars['goods']->value['goods_another'] != '') {?>
      <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_another'];?>

    <?php } else { ?>
      本單元暫時沒有補充喔!!!
    <?php }?>
  </div>
  <div role="tabpanel" class="tab-pane" id="goods_file">
    <?php if (isset($_smarty_tpl->tpl_vars['goods']->value['goods_name']) && ($_smarty_tpl->tpl_vars['goods']->value['goods_name']) != '') {?>
      <a href="good.php?op=download_file&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
&panel_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['panel_sn'];?>
">點我下載檔案</a>
    <?php } else { ?>
      本單元暫時沒有檔案可以下載喔!！!
    <?php }?>
  </div>
</div>

<?php }
}
