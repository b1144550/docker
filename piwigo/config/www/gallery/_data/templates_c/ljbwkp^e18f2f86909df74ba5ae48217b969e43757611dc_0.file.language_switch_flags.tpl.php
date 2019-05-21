<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:54:14
  from "/config/www/gallery/plugins/language_switch/language_switch_flags.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb94666d0ede8_36115741',
  'file_dependency' => 
  array (
    'e18f2f86909df74ba5ae48217b969e43757611dc' => 
    array (
      0 => '/config/www/gallery/plugins/language_switch/language_switch_flags.tpl',
      1 => 1554798530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb94666d0ede8_36115741 ($_smarty_tpl) {
?>
<li id="languageSwitch"><a id="languageSwitchLink" title="<?php echo l10n('Language');?>
" class="pwg-state-default pwg-button" rel="nofollow"> <span class="pwg-icon langflag-<?php echo $_smarty_tpl->tpl_vars['lang_switch']->value['Active']['code'];?>
">&nbsp;</span><span class="pwg-button-text"><?php echo l10n('Language');?>
</span> </a> <div id="languageSwitchBox" class="switchBox"> <div class="switchBoxTitle"><?php echo l10n('Language');?>
</div><?php
$_from = $_smarty_tpl->tpl_vars['lang_switch']->value['flags'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_f_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_f']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f'] : false;
$__foreach_f_0_saved_item = isset($_smarty_tpl->tpl_vars['flag']) ? $_smarty_tpl->tpl_vars['flag'] : false;
$_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_f'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['flag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['index']++;
$__foreach_f_0_saved_local_item = $_smarty_tpl->tpl_vars['flag'];
?><a rel="nofollow" href="<?php echo $_smarty_tpl->tpl_vars['flag']->value['url'];?>
"><?php if ($_smarty_tpl->tpl_vars['lang_info']->value['direction'] == "ltr") {?><span class="pwg-icon langflag-<?php echo $_smarty_tpl->tpl_vars['flag']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['flag']->value['alt'];?>
</span><?php echo $_smarty_tpl->tpl_vars['flag']->value['title'];
} else {
echo $_smarty_tpl->tpl_vars['flag']->value['title'];?>
<span class="pwg-icon langflag-<?php echo $_smarty_tpl->tpl_vars['flag']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['flag']->value['alt'];?>
</span><?php }?></a><?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['index'] : null)+1)%3 == 0) {?><br><?php }
$_smarty_tpl->tpl_vars['flag'] = $__foreach_f_0_saved_local_item;
}
if ($__foreach_f_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_f'] = $__foreach_f_0_saved;
}
if ($__foreach_f_0_saved_item) {
$_smarty_tpl->tpl_vars['flag'] = $__foreach_f_0_saved_item;
}
?></div></li>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery("#languageSwitchLink").click(function() {
	var elt = jQuery("#languageSwitchBox");
	elt.css("left", Math.min(jQuery(this).offset().left, jQuery(window).width() - elt.outerWidth(true) - 5))
		.css("top", jQuery(this).offset().top + jQuery(this).outerHeight(true))
		.toggle();
});
jQuery("#languageSwitchBox").on("mouseleave", function() {
	jQuery(this).hide();
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>



<?php if ($_smarty_tpl->tpl_vars['LANGUAGE_SWITCH_LOAD_STYLE']->value) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>($_smarty_tpl->tpl_vars['LANGUAGE_SWITCH_PATH']->value).("style.css")),$_smarty_tpl);?>

<?php }?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>($_smarty_tpl->tpl_vars['LANGUAGE_SWITCH_PATH']->value).("language_switch.css")),$_smarty_tpl);
}
}
