<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:54:28
  from "/config/www/gallery/themes/smartpocket/template/menubar_specials.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb94674b40751_73003595',
  'file_dependency' => 
  array (
    '32a793235888d20746e9cab006cc72f60c4a739e' => 
    array (
      0 => '/config/www/gallery/themes/smartpocket/template/menubar_specials.tpl',
      1 => 1554798523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb94674b40751_73003595 ($_smarty_tpl) {
?>
<h3><?php echo l10n('Specials');?>
</h3>
<ul data-role="listview">
<?php
$_from = $_smarty_tpl->tpl_vars['block']->value->data;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_link_0_saved_item = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$__foreach_link_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['link']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$__foreach_link_0_saved_local_item = $_smarty_tpl->tpl_vars['link'];
if (in_array($_smarty_tpl->tpl_vars['key']->value,array("favorites","most_visited","best_rated","recent_pics","recent_cats","random"))) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['link']->value['REL'])) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>
</a></li>
<?php }
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_0_saved_local_item;
}
if ($__foreach_link_0_saved_item) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_0_saved_item;
}
if ($__foreach_link_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_link_0_saved_key;
}
?>
</ul>
<?php }
}
