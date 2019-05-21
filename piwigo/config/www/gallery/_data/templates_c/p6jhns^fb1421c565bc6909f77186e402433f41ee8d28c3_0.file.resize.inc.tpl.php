<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:51:56
  from "/config/www/gallery/admin/themes/default/template/include/resize.inc.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb945dc6198e8_35436330',
  'file_dependency' => 
  array (
    'fb1421c565bc6909f77186e402433f41ee8d28c3' => 
    array (
      0 => '/config/www/gallery/admin/themes/default/template/include/resize.inc.tpl',
      1 => 1554798522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb945dc6198e8_35436330 ($_smarty_tpl) {
?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery.ui.resizable')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.resizable'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  jQuery().ready(function(){
    // Resize possible for list
    jQuery(".categoryList").resizable({
      handles: "all",
      animate: true,
      animateDuration: "slow",
      animateEasing: "swing",
      preventDefault: true,
      preserveCursor: true,
      autoHide: true,
      ghost: true
    });
  });
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.resizable'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
