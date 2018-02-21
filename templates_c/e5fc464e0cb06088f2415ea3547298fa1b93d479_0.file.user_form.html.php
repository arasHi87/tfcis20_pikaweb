<?php
/* Smarty version 3.1.29, created on 2018-02-21 05:49:19
  from "D:\UniServerZ\www\pika\templates\user_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8d085f0a0f29_32632883',
  'file_dependency' => 
  array (
    'e5fc464e0cb06088f2415ea3547298fa1b93d479' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\user_form.html',
      1 => 1516509059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8d085f0a0f29_32632883 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['user']->value['user_sn'] > 0) {?>
  <h1>使用者資料編輯</h1>
<?php } else { ?>
  <h1>使用者註冊</h1>
<?php }
echo '<script'; ?>
 src="class/jQuery-Validation-Engine/js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="class/jQuery-Validation-Engine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="class/jQuery-Validation-Engine/css/validationEngine.jquery.css" type="text/css"/>

<?php echo '<script'; ?>
 language="javascript" src="class/jquery.twzipcode-1.7.8.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
      $("#addr_form").twzipcode();
      $("#user_form").validationEngine();
    });
<?php echo '</script'; ?>
>

<form action="user.php" id="user_form" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
      <label class="col-md-2 control-label" for="user_name">姓名：</label>
      <div class="col-md-4">
        <input type="text" class="form-control validate[required]" name="user_name" id="user_name" placeholder="請輸入姓名" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
">
      </div>
      <label class="col-md-2 control-label" for="user_sex">性別：</label>
      <div class="col-md-4">
        <label class="radio-inline">
          <input type="radio" name="user_sex" class="validate[required]" id="user_sex_1" value="男" <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex'] == '男') {?>checked<?php }?>>男
        </label>
        <label class="radio-inline">
          <input type="radio" name="user_sex" class="validate[required]" id="user_sex_0" value="女" <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex'] == '女') {?>checked<?php }?>>女
        </label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label" for="user_id">帳號：</label>
      <div class="col-md-4">
        <input type="text" class="form-control validate[custom[onlyLetterNumber], minSize[6], maxSize[12]]" name="user_id" id="user_id" placeholder="請輸入帳號(6到12字元)" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
">
      </div>
      <label class="col-md-2 control-label" for="user_passwd">密碼：</label>
      <div class="col-md-4 has-error">
        <input type="text" class="form-control <?php if ($_smarty_tpl->tpl_vars['user']->value['user_passwd'] == '') {?>validate[required]<?php }?> validate[custom[onlyLetterNumber], minSize[6], maxSize[12]]" name="user_passwd" id="user_passwd" placeholder="<?php if ($_smarty_tpl->tpl_vars['user']->value['user_passwd']) {?>需要改密碼才填寫<?php } else { ?>請輸入密碼(6到12字元)<?php }?>">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label" for="user_email">Email：</label>
      <div class="col-md-4">
        <input type="text" class="form-control validate[required, custom[email]]" name="user_email" id="user_email" placeholder="請輸入Email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
">
      </div>
      <label class="col-md-2 control-label" for="user_tel">電話：</label>
      <div class="col-md-4">
        <input type="text" class="form-control validate[required, custom[phone]]" name="user_tel" id="user_tel" placeholder="請輸入電話" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_tel'];?>
">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">使用者自介：</label>
      <div class="col-md-10">
        <textarea class="form-control" name="user_content" id="user_content" placeholder="請輸入自介"><?php echo $_smarty_tpl->tpl_vars['user']->value['user_content'];?>
</textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">使用者頭貼：</label>
      <div class="col-md-10">
        <input type="file" name="user_pic" id="user_pic">
        <?php if (isset($_smarty_tpl->tpl_vars['user']->value['pic'])) {?>
          <div class="row">
            <div class="col-md-6">
              <a href="#" class="thumbnail">
                <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
">
              </a>
            </div>
          </div>
        <?php }?>
      </div>
    </div>

    <div class="form-group">
      <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sn'] == '') {?>
         <label class="col-md-2 control-label" for="user_id">驗證: </label>
         <div class="col-md-2">
           <img src="pic.php" alt="請輸入驗證碼">
         </div>
         <div class="col-md-2">
           <input type="text" class="form-control validate[required]" name="key" id="key" placeholder="請輸入驗證碼">
         </div>
      <?php } else { ?>
         <div class="col-md-6"></div>
      <?php }?>
    <div class="col-md-6">
        <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sn'] > 0) {?>
            <input type="hidden" name="op" value="update_user">
            <input type="hidden" name="user_sn" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
">
        <?php } else { ?>
            <input type="hidden" name="op" value="insert_user">
        <?php }?>
        <button type="submit" class="btn btn-primary">儲存</button>
    </div>
  </div>
</form>
<?php }
}
