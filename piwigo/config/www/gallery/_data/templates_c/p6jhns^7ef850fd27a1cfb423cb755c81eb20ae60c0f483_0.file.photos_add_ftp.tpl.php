<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:53:10
  from "/config/www/gallery/admin/themes/default/template/photos_add_ftp.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb946261401a7_99599910',
  'file_dependency' => 
  array (
    '7ef850fd27a1cfb423cb755c81eb20ae60c0f483' => 
    array (
      0 => '/config/www/gallery/admin/themes/default/template/photos_add_ftp.tpl',
      1 => 1554798522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb946261401a7_99599910 ($_smarty_tpl) {
?>
<div class="titrePage">
  <h2><?php echo l10n('Upload Photos');?>
 <?php echo $_smarty_tpl->tpl_vars['TABSHEET_TITLE']->value;?>
</h2>
</div>

<div id="ftpPage">
<p><a href="<?php echo $_smarty_tpl->tpl_vars['U_CAT_UPDATE']->value;?>
"><?php echo l10n('Administration');?>
 &raquo; <?php echo l10n('Tools');?>
 &raquo; <?php echo l10n('Synchronize');?>
</a></p>

<?php echo $_smarty_tpl->tpl_vars['FTP_HELP_CONTENT']->value;?>

</div><?php }
}
