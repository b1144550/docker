<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:50:18
  from "/config/www/gallery/admin/themes/default/template/stats.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb9457a995c81_48766261',
  'file_dependency' => 
  array (
    '965e9f0f4e3769cf9241a7f9f2fb87845b103a52' => 
    array (
      0 => '/config/www/gallery/admin/themes/default/template/stats.tpl',
      1 => 1554798522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9457a995c81_48766261 ($_smarty_tpl) {
?>

<div class="titrePage">
  <h2><?php echo l10n('History');?>
 <?php echo $_smarty_tpl->tpl_vars['TABSHEET_TITLE']->value;?>
</h2>
</div>

<h3><?php echo $_smarty_tpl->tpl_vars['L_STAT_TITLE']->value;?>
</h3>

<table class="table2" id="dailyStats">
	<tr class="throw">
		<th><?php echo $_smarty_tpl->tpl_vars['PERIOD_LABEL']->value;?>
</th>
		<th><?php echo l10n('Pages seen');?>
</th>
		<th></th>
	</tr>

<?php if (!empty($_smarty_tpl->tpl_vars['statrows']->value)) {
$_from = $_smarty_tpl->tpl_vars['statrows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
	<tr>
		<td style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['row']->value['VALUE'];?>
</td>
		<td class="number"><?php echo $_smarty_tpl->tpl_vars['row']->value['PAGES'];?>
</td>
		<td><div class="statBar" style="width:<?php echo $_smarty_tpl->tpl_vars['row']->value['WIDTH'];?>
px"></div></td>
	</tr>
<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
}?>

</table>
<?php }
}
