<?php
/* Smarty version 3.1.29, created on 2018-02-22 04:16:42
  from "D:\UniServerZ\www\pika\templates\panel_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8e442a153f82_91169500',
  'file_dependency' => 
  array (
    '83cec5db92df8fc2eebf8ea0cb99f1df7e927616' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\panel_list.html',
      1 => 1516971202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8e442a153f82_91169500 ($_smarty_tpl) {
echo '<script'; ?>
>
    $(function(){
        var len = 50;
        $(".arasi").each(function(i){
            if($(this).text().length>len){
                $(this).attr("title",$(this).text());
                var text=$(this).text().substring(0,len-1)+"...";
                $(this).text(text);
            }
        });
    });
    <?php echo '</script'; ?>
>
<div class="row">
  <?php
$_from = $_smarty_tpl->tpl_vars['all_panel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_panel_0_saved_item = isset($_smarty_tpl->tpl_vars['panel']) ? $_smarty_tpl->tpl_vars['panel'] : false;
$_smarty_tpl->tpl_vars['panel'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['panel']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->_loop = true;
$__foreach_panel_0_saved_local_item = $_smarty_tpl->tpl_vars['panel'];
?>
  <div class="col-md-12">
    <div class="thumbnail">
      <a href="panel.php?op=display_panel&panel_sn=<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['panel']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_title'];?>
">
        <div class="caption">
          <div style="height: 80px">
            <h3><a href="panel.php?op=display_panel&panel_sn=<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_title'];?>
</a></h3>
              <div class="col-md-6" style="font-size: 20px">瀏覽人數：<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_counter'];?>
</div>
              <div class="col-md-12"><p class="text-danger arasi">簡介：<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_content'];?>
</p></div>
          </div>
        </div>
      </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['panel'] = $__foreach_panel_0_saved_local_item;
}
if ($__foreach_panel_0_saved_item) {
$_smarty_tpl->tpl_vars['panel'] = $__foreach_panel_0_saved_item;
}
?>
  </div>
共有<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
個面板
<?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

<?php }
}
