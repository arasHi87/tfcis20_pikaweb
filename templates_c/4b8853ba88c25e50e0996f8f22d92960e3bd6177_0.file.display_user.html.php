<?php
/* Smarty version 3.1.29, created on 2018-02-21 05:55:29
  from "D:\UniServerZ\www\pika\templates\display_user.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8d09d17fec71_07128749',
  'file_dependency' => 
  array (
    '4b8853ba88c25e50e0996f8f22d92960e3bd6177' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\display_user.html',
      1 => 1516372574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8d09d17fec71_07128749 ($_smarty_tpl) {
?>
<h1>使用者資料</h1>
<div class="col-md-6">
    <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
" class="img-thumbnail">
    <br>
    <br>
</div>
<table class="table table-hover table-bordered table-responsive">
  <tr>
    <td>姓名</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
  </tr>
  <tr>
    <td>帳號</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
  </tr>
  <tr>
    <td>Email</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
</td>
  </tr>
  <tr>
    <td>性別</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_sex'];?>
</td>
  </tr>
  <tr>
    <td>電話</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_tel'];?>
</td>
  </tr>
  <tr>
    <td>自介</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_content'];?>
</td>
  </tr>
</table>

<div class="text-center">
    <a href="user.php?op=user_form&user_sn=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
" class="btn btn-primary">編輯帳號</a>
    <a href="user.php?op=delete_user_pic&user_sn=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
" class="btn btn-warning">刪除頭貼</a>
    <?php if ($_smarty_tpl->tpl_vars['isadmin']->value) {?>
      <?php echo '<script'; ?>
 src="class/bootstrap-sweetalert/sweet-alert.min.js"><?php echo '</script'; ?>
>
      <link rel="stylesheet" type="text/css" href="class/bootstrap-sweetalert/sweet-alert.css">
      <?php echo '<script'; ?>
 type="text/javascript">
      function delete_user(user_sn){
        swal({
          title: "確定要刪除嗎?",
          text: "刪掉之後,該會員所有資料會消失喔!",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "是!我要刪了他!",
          closeOnConfirm: false,
        },
        function(){
          location.href='user.php?op=delete_user&user_sn=' + user_sn;
          swal("好啦!刪完了", "後悔也來不及了!", "success");
        })
      }
      <?php echo '</script'; ?>
>
      <?php if ($_smarty_tpl->tpl_vars['now_user_sn']->value != $_smarty_tpl->tpl_vars['login_user']->value['user_sn']) {?>
          <a href="javascript:delete_user('<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
')" class="btn btn-danger">刪除帳號</a>
      <?php }?>
    <?php }?>
</div><?php }
}
