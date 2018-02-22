<?php
/* Smarty version 3.1.29, created on 2018-02-22 14:26:36
  from "D:\UniServerZ\www\pika\templates\act_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8ed31c8e20a1_06400733',
  'file_dependency' => 
  array (
    '888d136962e30e519e3d059208ca4313daf966b4' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\act_form.html',
      1 => 1503761926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8ed31c8e20a1_06400733 ($_smarty_tpl) {
?>
<h1>編輯站務</h1>
<form action="act.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-md-2 control-label">公告名稱：</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="act_title" id="act_title" placeholder="請輸入公告名稱" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_title'];?>
">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label">公告內容：</label>
    <div class="col-md-10">
      <textarea class="form-control" name="act_content" id="act_content" placeholder="請輸入公告內容"><?php echo $_smarty_tpl->tpl_vars['act']->value['act_content'];?>
</textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label">公告圖片：</label>
    <div class="col-md-10">
      <input type="file" name="act_pic" id="act_pic">
      <?php if (isset($_smarty_tpl->tpl_vars['act']->value['pic'])) {?>
          <img src="<?php echo $_smarty_tpl->tpl_vars['act']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_title'];?>
">
      <?php }?>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
      <?php if (isset($_smarty_tpl->tpl_vars['act']->value['act_sn']) && $_smarty_tpl->tpl_vars['act']->value['act_sn'] > 0) {?>
        <input type="hidden" name="op" value="update_act">
        <input type="hidden" name="act_sn" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_sn'];?>
">
      <?php } else { ?>
        <input type="hidden" name="op" value="insert_act">
      <?php }?>
      <button type="submit" class="btn btn-primary">發佈公告</button>
    </div>
  </div>
</form>
<?php }
}
