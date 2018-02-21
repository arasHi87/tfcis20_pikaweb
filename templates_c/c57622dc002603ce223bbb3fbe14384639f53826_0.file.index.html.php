<?php
/* Smarty version 3.1.29, created on 2018-02-21 07:22:23
  from "D:\UniServerZ\www\pika\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8d1e2fe7e2a3_56943259',
  'file_dependency' => 
  array (
    'c57622dc002603ce223bbb3fbe14384639f53826' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\index.html',
      1 => 1519197740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user_list.html' => 1,
    'file:display_user.html' => 1,
    'file:user_form.html' => 2,
    'file:user_login.html' => 1,
    'file:side_tool.html' => 1,
  ),
),false)) {
function content_5a8d1e2fe7e2a3_56943259 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['system_name']->value;?>
</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="jquery/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="bootstrap/js/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="bootstrap/js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="jquery/external/jquery/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="jquery/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/jquery-migrate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="container">
      <div id="system_head">
        <img src="images/title.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['system_name']->value;?>
" class="img-responsive">
      </div>

      <div id="system_main" class="row">
       <ul class="nav nav-tabs">
           <li role="presentation" class="active"><a href="#index" aria-controls="index" role="tab" data-toggle="tab">主頁</a></li>
       </ul>
       <br>
       <div class="col-md-9">
        <?php if ($_smarty_tpl->tpl_vars['op']->value == "user_list") {?>
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_user") {?>
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:display_user.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "user_form") {?>
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php }?>
       </div>
       <?php if (!$_smarty_tpl->tpl_vars['isuser']->value) {?>
          <?php if ($_smarty_tpl->tpl_vars['op']->value == "user_form") {?>
            <div class="col-md-9">
              <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </div>
          <?php } else { ?>
            <div class="col-md-7">
              <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user_login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
          <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['isuser']->value) {?>
          <div class="col-md-3">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_tool.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
        <?php }?>
      </div>

      <div id="system_foot">
        <div>當前版本 : vision-1.0.0 beta</div>
        <div>開發者：TfcisPika</div>
      </div>
    </div>
  </body>
</html>
<?php }
}
