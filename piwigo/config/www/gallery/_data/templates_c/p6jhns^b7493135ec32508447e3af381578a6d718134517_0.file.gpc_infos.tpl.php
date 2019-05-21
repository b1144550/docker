<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:49:51
  from "/config/www/gallery/plugins/GrumPluginClasses/admin/gpc_infos.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb9455fcd1f89_13768801',
  'file_dependency' => 
  array (
    'b7493135ec32508447e3af381578a6d718134517' => 
    array (
      0 => '/config/www/gallery/plugins/GrumPluginClasses/admin/gpc_infos.tpl',
      1 => 1534046810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9455fcd1f89_13768801 ($_smarty_tpl) {
?>

<h3><?php echo l10n('List of shared modules');?>
</h3>
<div class="table">

  <table class="table2 littlefont" >
    <tr class="throw">
      <td><?php echo l10n('Module');?>
</td>
      <td><?php echo l10n('Version');?>
</td>
    </tr>
<?php
$_from = $_smarty_tpl->tpl_vars['datas']->value['modules'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_plugins_loop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop'] : false;
$__foreach_plugins_loop_0_saved_item = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data'] : false;
$__foreach_plugins_loop_0_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop']->value['index']++;
$__foreach_plugins_loop_0_saved_local_item = $_smarty_tpl->tpl_vars['data'];
?>
      <tr class="StatTableRow <?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop']->value['index'] : null))) {?>row1<?php } else { ?>row2<?php }?>">
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['version'];?>
</td>
      </tr>
<?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_plugins_loop_0_saved_local_item;
}
if ($__foreach_plugins_loop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop'] = $__foreach_plugins_loop_0_saved;
}
if ($__foreach_plugins_loop_0_saved_item) {
$_smarty_tpl->tpl_vars['data'] = $__foreach_plugins_loop_0_saved_item;
}
if ($__foreach_plugins_loop_0_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_plugins_loop_0_saved_key;
}
?>
  </table>

</div>


<h3><?php echo l10n('List of installed plugins using Grum Plugin Classes');?>
</h3>
<div class="table">

  <table class="table2 littlefont" >
    <tr class="throw">
      <td><?php echo l10n('Plugin');?>
</td>
      <td><?php echo l10n('Version');?>
</td>
      <td><?php echo l10n('GPC required');?>
</td>
      <td><?php echo l10n('Installed');?>
</td>
    </tr>

<?php
$_from = $_smarty_tpl->tpl_vars['datas']->value['plugins'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_plugins_loop_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop'] : false;
$__foreach_plugins_loop_1_saved_item = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data'] : false;
$__foreach_plugins_loop_1_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop']->value['index']++;
$__foreach_plugins_loop_1_saved_local_item = $_smarty_tpl->tpl_vars['data'];
?>
      <tr class="StatTableRow <?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop']->value['index'] : null))) {?>row1<?php } else { ?>row2<?php }?>">
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['release'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['needed'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['date'];?>
</td>
      </tr>
<?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_plugins_loop_1_saved_local_item;
}
if ($__foreach_plugins_loop_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_plugins_loop'] = $__foreach_plugins_loop_1_saved;
}
if ($__foreach_plugins_loop_1_saved_item) {
$_smarty_tpl->tpl_vars['data'] = $__foreach_plugins_loop_1_saved_item;
}
if ($__foreach_plugins_loop_1_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_plugins_loop_1_saved_key;
}
?>
  </table>

</div>
<?php }
}
