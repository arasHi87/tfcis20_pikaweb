<?php
/* Smarty version 3.1.29, created on 2018-02-22 13:54:37
  from "D:\UniServerZ\www\pika\templates\goods_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8ecb9dc0d290_71396011',
  'file_dependency' => 
  array (
    'f875ce0e00a7bbd4a46244ef724836e0e0b114f8' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\goods_form.html',
      1 => 1516970562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8ecb9dc0d290_71396011 ($_smarty_tpl) {
?>
<h1>編輯單元</h1>
<form action="good.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-md-2 control-label">單元名稱：</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="goods_title" id="goods_title" placeholder="請輸入單元名稱" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">單元內容：</label>
        <div class="col-md-10">
            <textarea class="form-control" name="goods_content" id="goods_content" placeholder="請輸入單元內容"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>
</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-lanel">單元補充：</label>
        <div class="col-md-10">
            <textarea class="form-control" name="goods_another" id="goods_another" placeholder="請輸入單元補充"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_another'];?>
</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">上傳檔案：</label>
        <div class="col-md-10">
            <input type="file" name="goods_file" id="goods_file">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">單元圖片：</label>
        <div class="col-md-10">
            <input type="file" name="goods_pic" id="goods_pic">
            <br>
            <?php if (isset($_smarty_tpl->tpl_vars['goods']->value['pic'])) {?>
              <div class="row">
                <div class="col-md-6">
                  <a href="#" class="thumbnail">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
">
                  </a>
                </div>
              </div>
            <?php }?>
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">面板位置：</label>
      <div class="col-md-10">
        <input type="hidden" name="panel_sn" id="panel_sn" value="<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_sn'];?>
">
        <p class="text-danger bg-danger"><?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_title'];?>
</p>
      </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <?php if (isset($_smarty_tpl->tpl_vars['goods']->value['goods_sn']) && $_smarty_tpl->tpl_vars['goods']->value['goods_sn'] > 0) {?>
                <input type="hidden" name="op" value="update_goods">
                <input type="hidden" name="goods_sn" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
">
            <?php } else { ?>
                <input type="hidden" name="op" value="insert_goods">
            <?php }?>
            <button type="submit" class="btn btn-primary">儲存內容</button>
        </div>
    </div>
</form><?php }
}
