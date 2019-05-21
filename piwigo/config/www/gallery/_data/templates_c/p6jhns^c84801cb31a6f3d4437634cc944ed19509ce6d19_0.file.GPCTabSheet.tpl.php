<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:49:55
  from "/config/www/gallery/plugins/GrumPluginClasses/templates/GPCTabSheet.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb9456317e3d1_63340972',
  'file_dependency' => 
  array (
    'c84801cb31a6f3d4437634cc944ed19509ce6d19' => 
    array (
      0 => '/config/www/gallery/plugins/GrumPluginClasses/templates/GPCTabSheet.tpl',
      1 => 1534046810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9456317e3d1_63340972 ($_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['tabsheet']->value) && count($_smarty_tpl->tpl_vars['tabsheet']->value)) {?>
<ul <?php if (isset($_smarty_tpl->tpl_vars['tabsheet_classes']->value)) {?>class="<?php echo $_smarty_tpl->tpl_vars['tabsheet_classes']->value;?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['tabsheet_id']->value)) {?>id="<?php echo $_smarty_tpl->tpl_vars['tabsheet_id']->value;?>
"<?php }?> >
<?php
$_from = $_smarty_tpl->tpl_vars['tabsheet']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tabs_0_saved_item = isset($_smarty_tpl->tpl_vars['sheet']) ? $_smarty_tpl->tpl_vars['sheet'] : false;
$__foreach_tabs_0_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['sheet'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['sheet']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['sheet']->value) {
$_smarty_tpl->tpl_vars['sheet']->_loop = true;
$__foreach_tabs_0_saved_local_item = $_smarty_tpl->tpl_vars['sheet'];
?>
  <li <?php if (isset($_smarty_tpl->tpl_vars['tabsheet_id']->value)) {?>id="<?php echo $_smarty_tpl->tpl_vars['tabsheet_id']->value;
echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?> class="<?php echo $_smarty_tpl->tpl_vars['tab_classes']->value['normal'];?>
 <?php if (($_smarty_tpl->tpl_vars['name']->value == $_smarty_tpl->tpl_vars['tabsheet_selected']->value)) {
echo $_smarty_tpl->tpl_vars['tab_classes']->value['selected'];
} else {
echo $_smarty_tpl->tpl_vars['tab_classes']->value['unselected'];
}?>">
    <a <?php if ($_smarty_tpl->tpl_vars['sheet']->value['url'] != '') {?>href="<?php echo $_smarty_tpl->tpl_vars['sheet']->value['url'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['sheet']->value['onClick'] != '') {?>onclick="<?php echo $_smarty_tpl->tpl_vars['sheet']->value['onClick'];?>
"<?php }?> ><span><?php echo $_smarty_tpl->tpl_vars['sheet']->value['caption'];?>
</span></a>
  </li>
<?php
$_smarty_tpl->tpl_vars['sheet'] = $__foreach_tabs_0_saved_local_item;
}
if ($__foreach_tabs_0_saved_item) {
$_smarty_tpl->tpl_vars['sheet'] = $__foreach_tabs_0_saved_item;
}
if ($__foreach_tabs_0_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_tabs_0_saved_key;
}
?>
</ul>

<?php if (isset($_smarty_tpl->tpl_vars['tabsheet_id']->value)) {?>
  
  <?php echo '<script'; ?>
 type="text/javascript">
    $('#<?php echo $_smarty_tpl->tpl_vars['tabsheet_id']->value;?>
 li a').bind('click',
      function ()
      {
        $('#<?php echo $_smarty_tpl->tpl_vars['tabsheet_id']->value;?>
 li').removeClass('<?php echo $_smarty_tpl->tpl_vars['tab_classes']->value['selected'];?>
').addClass('<?php echo $_smarty_tpl->tpl_vars['tab_classes']->value['unselected'];?>
');
        $(this.parentNode).removeClass('<?php echo $_smarty_tpl->tpl_vars['tab_classes']->value['unselected'];?>
').addClass('<?php echo $_smarty_tpl->tpl_vars['tab_classes']->value['selected'];?>
');
      }
    );
  
  <?php echo '</script'; ?>
>

<?php }
}
}
}
