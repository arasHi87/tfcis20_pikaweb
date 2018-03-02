<?php
/* Smarty version 3.1.29, created on 2018-02-26 04:52:12
  from "D:\UniServerZ\www\pika\templates\panel_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a93927c3adce2_66365884',
  'file_dependency' => 
  array (
    '94362f9da4df5b0e1114c29b3d6fe222bbf66dec' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\panel_form.html',
      1 => 1519620713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a93927c3adce2_66365884 ($_smarty_tpl) {
?>
<h1>編輯面板</h1>
<form action="panel.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-md-2 control-label">面板名稱：</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="panel_title" id="panel_title" placeholder="請輸入面板名稱" value="<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_title'];?>
">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label">面板簡介：</label>
    <div class="col-md-10">
      <textarea class="form-control" name="panel_content" id="panel_content" placeholder="請輸入面板簡介"><?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_content'];?>
</textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label">面板圖片：</label>
    <div class="col-md-10">
      <input type="file" name="panel_pic" id="panel_pic">
      <?php if (isset($_smarty_tpl->tpl_vars['panel']->value['pic'])) {?>
          <img src="<?php echo $_smarty_tpl->tpl_vars['panel']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_title'];?>
">
      <?php }?>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-offset-2">
      <?php if (isset($_smarty_tpl->tpl_vars['panel']->value['panel_sn']) && $_smarty_tpl->tpl_vars['panel']->value['panel_sn'] > 0) {?>
          <input type="hidden" name="op" value="update_panel">
          <input type="hidden" name="panel_sn" value="<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_sn'];?>
">
      <?php } else { ?>
          <input type="hidden" name="op" value="insert_panel">
      <?php }?>
      <button type="submit" class="btn btn-primary">儲存面板</button>
    </div>
  </div>
</form>
<?php }
}
