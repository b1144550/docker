<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:49:55
  from "/config/www/gallery/plugins/AMenuManager/admin/amm_coreBlocks_detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb945631a5ff9_00399349',
  'file_dependency' => 
  array (
    'cdd5d5943b15ccb4b44b11347442c079826727b6' => 
    array (
      0 => '/config/www/gallery/plugins/AMenuManager/admin/amm_coreBlocks_detail.tpl',
      1 => 1497869440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb945631a5ff9_00399349 ($_smarty_tpl) {
?>
<h3><?php echo l10n('User');?>
</h3>
<p>
<?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_values_0_saved_item = isset($_smarty_tpl->tpl_vars['values']) ? $_smarty_tpl->tpl_vars['values'] : false;
$_smarty_tpl->tpl_vars['values'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['values']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['values']->value) {
$_smarty_tpl->tpl_vars['values']->_loop = true;
$__foreach_values_0_saved_local_item = $_smarty_tpl->tpl_vars['values'];
?>
  <label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['id'];?>
" class='visibilityUser' <?php if ($_smarty_tpl->tpl_vars['values']->value['allowed'] == true) {?> checked<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['values']->value['name'];?>
</label><br/>
<?php
$_smarty_tpl->tpl_vars['values'] = $__foreach_values_0_saved_local_item;
}
if ($__foreach_values_0_saved_item) {
$_smarty_tpl->tpl_vars['values'] = $__foreach_values_0_saved_item;
}
?>
</p>

<h3><?php echo l10n('Group');?>
</h3>
<p>
<?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_values_1_saved_item = isset($_smarty_tpl->tpl_vars['values']) ? $_smarty_tpl->tpl_vars['values'] : false;
$_smarty_tpl->tpl_vars['values'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['values']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['values']->value) {
$_smarty_tpl->tpl_vars['values']->_loop = true;
$__foreach_values_1_saved_local_item = $_smarty_tpl->tpl_vars['values'];
?>
  <label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['id'];?>
" class='visibilityGroup' <?php if ($_smarty_tpl->tpl_vars['values']->value['allowed'] == true) {?> checked<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['values']->value['name'];?>
</label><br/>
<?php
$_smarty_tpl->tpl_vars['values'] = $__foreach_values_1_saved_local_item;
}
if ($__foreach_values_1_saved_item) {
$_smarty_tpl->tpl_vars['values'] = $__foreach_values_1_saved_item;
}
?>
</p>
<?php }
}
