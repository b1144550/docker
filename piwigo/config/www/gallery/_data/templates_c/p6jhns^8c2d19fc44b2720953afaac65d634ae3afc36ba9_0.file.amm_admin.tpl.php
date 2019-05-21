<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:49:55
  from "/config/www/gallery/plugins/AMenuManager/admin/amm_admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb945632b6882_05671305',
  'file_dependency' => 
  array (
    '8c2d19fc44b2720953afaac65d634ae3afc36ba9' => 
    array (
      0 => '/config/www/gallery/plugins/AMenuManager/admin/amm_admin.tpl',
      1 => 1497869440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb945632b6882_05671305 ($_smarty_tpl) {
?>
<h2 style="float:right;top:-24px;position:relative;height:auto;font-size:12px;font-weight:normal;"><?php echo $_smarty_tpl->tpl_vars['plugin']->value[AMM_VERSION];?>
</h2>

<div class='helps'>
<?php if (isset($_smarty_tpl->tpl_vars['pageNfo']->value)) {?>
  <p><?php echo $_smarty_tpl->tpl_vars['pageNfo']->value;?>
</p>
<?php }?>
</div>

<div id='iBDProcessing' style="display:none;position:absolute;left:0;top:0;width:100%;height:100%;background:#000000;opacity:0.75;z-index:800;">
  <img src="plugins/GrumPluginClasses/icons/processing.gif" style="margin-top:20%;">
</div>

<div id='iConfigState' style='display:none;'>
</div>

<?php echo $_smarty_tpl->tpl_vars['AMM_BODY_PAGE']->value;?>


<?php }
}
