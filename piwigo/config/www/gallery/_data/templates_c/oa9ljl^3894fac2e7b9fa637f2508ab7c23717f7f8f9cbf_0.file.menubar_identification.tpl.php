<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:54:28
  from "/config/www/gallery/themes/smartpocket/template/menubar_identification.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb94674b61967_52226173',
  'file_dependency' => 
  array (
    '3894fac2e7b9fa637f2508ab7c23717f7f8f9cbf' => 
    array (
      0 => '/config/www/gallery/themes/smartpocket/template/menubar_identification.tpl',
      1 => 1554798523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb94674b61967_52226173 ($_smarty_tpl) {
?>
<h3><?php echo l10n('Identification');?>
</h3>
<ul data-role="listview">
  <?php if (isset($_smarty_tpl->tpl_vars['U_REGISTER']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
"><?php echo l10n('Register');?>
</a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['U_LOGIN']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
"><?php echo l10n('Login');?>
</a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['U_LOGOUT']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGOUT']->value;?>
"><?php echo l10n('Logout');?>
</a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['U_PROFILE']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_PROFILE']->value;?>
"><?php echo l10n('Customize');?>
</a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['U_ADMIN']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_ADMIN']->value;?>
"><?php echo l10n('Administration');?>
</a></li><?php }?>
</ul>
<?php }
}
