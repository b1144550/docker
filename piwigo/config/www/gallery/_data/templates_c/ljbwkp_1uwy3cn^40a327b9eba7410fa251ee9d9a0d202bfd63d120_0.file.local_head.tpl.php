<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:54:14
  from "/config/www/gallery/themes/elegant/local_head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb94666c2d5e8_01975646',
  'file_dependency' => 
  array (
    '40a327b9eba7410fa251ee9d9a0d202bfd63d120' => 
    array (
      0 => '/config/www/gallery/themes/elegant/local_head.tpl',
      1 => 1554798523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb94666c2d5e8_01975646 ($_smarty_tpl) {
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  var p_main_menu = "<?php echo $_smarty_tpl->tpl_vars['elegant']->value['p_main_menu'];?>
", p_pict_descr = "<?php echo $_smarty_tpl->tpl_vars['elegant']->value['p_pict_descr'];?>
", p_pict_comment = "<?php echo $_smarty_tpl->tpl_vars['elegant']->value['p_pict_comment'];?>
";
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['BODY_ID']->value == 'thePicturePage') {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'elegant.scripts_pp','load'=>'footer','require'=>'jquery','path'=>'themes/elegant/scripts_pp.js'),$_smarty_tpl);?>

<?php } else {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'elegant.scripts','load'=>'footer','require'=>'jquery','path'=>'themes/elegant/scripts.js'),$_smarty_tpl);?>

<?php }?>
	<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/elegant/fix-ie7.css">
	<![endif]-->
<?php }
}
