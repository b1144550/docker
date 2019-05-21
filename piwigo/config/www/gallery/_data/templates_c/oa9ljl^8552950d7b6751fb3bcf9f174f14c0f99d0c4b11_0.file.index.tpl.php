<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:54:28
  from "/config/www/gallery/themes/smartpocket/template/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb94674c5d834_27282409',
  'file_dependency' => 
  array (
    '8552950d7b6751fb3bcf9f174f14c0f99d0c4b11' => 
    array (
      0 => '/config/www/gallery/themes/smartpocket/template/index.tpl',
      1 => 1554798523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb94674c5d834_27282409 ($_smarty_tpl) {
?>
<div data-role="content">
<?php if (!empty($_smarty_tpl->tpl_vars['CATEGORIES']->value)) {
echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;
}
if (!empty($_smarty_tpl->tpl_vars['THUMBNAILS']->value)) {
echo $_smarty_tpl->tpl_vars['THUMBNAILS']->value;
}
if (!empty($_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value)) {?>
<div class="additional_info">
	<?php echo $_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value;?>

</div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['CONTENT']->value)) {
echo $_smarty_tpl->tpl_vars['CONTENT']->value;
}?>
</div>

<?php }
}
