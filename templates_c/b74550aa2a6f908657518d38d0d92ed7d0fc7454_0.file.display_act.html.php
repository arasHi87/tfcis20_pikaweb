<?php
/* Smarty version 3.1.29, created on 2018-02-22 14:30:40
  from "D:\UniServerZ\www\pika\templates\display_act.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8ed410dbf616_82034903',
  'file_dependency' => 
  array (
    'b74550aa2a6f908657518d38d0d92ed7d0fc7454' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\display_act.html',
      1 => 1516457910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8ed410dbf616_82034903 ($_smarty_tpl) {
?>
<div class="row">
  <div class="col-md-6">
    <img src="<?php echo $_smarty_tpl->tpl_vars['act']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_title'];?>
" class="img-thumbnail">
  </div>
  <div class="col-md-6">
    <h1><?php echo $_smarty_tpl->tpl_vars['act']->value['act_title'];?>
</h1>
    <p>瀏覽人數：<?php echo $_smarty_tpl->tpl_vars['act']->value['act_counter'];?>
</p>
    <div>
    <?php if ($_smarty_tpl->tpl_vars['isadmin']->value) {?>
        <a href="act.php?op=act_form&act_sn=<?php echo $_smarty_tpl->tpl_vars['act']->value['act_sn'];?>
" class="btn btn-warning">編輯公告</a>
        <?php echo '<script'; ?>
 src="class/bootstrap-sweetalert/sweet-alert.min.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" type="text/css" href="class/bootstrap-sweetalert/sweet-alert.css">
        <?php echo '<script'; ?>
 type="text/javascript">
        function delete_act(act_sn){
          swal({
            title: "確定要刪除嗎?",
            text: "刪掉之後,所有資料會消失喔!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "是!我要刪了他!",
            closeOnConfirm: false,
          },
          function(){
            location.href='act.php?op=delete_act&act_sn=' + act_sn;
            swal("好啦!刪完了", "後悔也來不及了!", "success");
          });
        }
        <?php echo '</script'; ?>
>
        <a href="javascript:delete_act('<?php echo $_smarty_tpl->tpl_vars['act']->value['act_sn'];?>
')" class="btn btn-danger">刪除公告</a>
    <?php }?>
    </div>
  </div>
</div>
<br>
<div class="row">
  <pre>
    <?php echo $_smarty_tpl->tpl_vars['act']->value['act_content'];?>

  </pre>
</div>
<?php }
}
