<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:54:28
  from "/config/www/gallery/themes/smartpocket/template/menubar_categories.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb94674afabd2_65762429',
  'file_dependency' => 
  array (
    '392ab999fbda411e2d91cc930fcbb001e482fbf3' => 
    array (
      0 => '/config/www/gallery/themes/smartpocket/template/menubar_categories.tpl',
      1 => 1554798523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb94674afabd2_65762429 ($_smarty_tpl) {
?>
<h3><?php echo l10n('Albums');?>
</h3>
<ul data-role="listview">
<?php
$_from = $_smarty_tpl->tpl_vars['block']->value->data['MENU_CATEGORIES'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cat_0_saved_item = isset($_smarty_tpl->tpl_vars['cat']) ? $_smarty_tpl->tpl_vars['cat'] : false;
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$__foreach_cat_0_saved_local_item = $_smarty_tpl->tpl_vars['cat'];
?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['IS_UPPERCAT']) {?>rel="up"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</a>
  <?php if ($_smarty_tpl->tpl_vars['cat']->value['count_images'] > 0) {?><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['cat']->value['count_images'];?>
</span><?php }?>
  </li>
<?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved_local_item;
}
if ($__foreach_cat_0_saved_item) {
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved_item;
}
?>
</ul>
<?php }
}
