<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:50:20
  from "/config/www/gallery/admin/themes/default/template/site_manager.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb9457c13c811_43639859',
  'file_dependency' => 
  array (
    '41bad27686e11b0a3dc3bfdcd38fa75acdd8f120' => 
    array (
      0 => '/config/www/gallery/admin/themes/default/template/site_manager.tpl',
      1 => 1554798522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9457c13c811_43639859 ($_smarty_tpl) {
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery(document).ready(function(){
  jQuery("#showCreateSite a").click(function(){
    jQuery("#showCreateSite").hide();
    jQuery("#createSite").show();
  });
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>



<div class="titrePage">
  <h2><?php echo l10n('Site manager');?>
</h2>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['remote_output']->value)) {?>
<div class="remoteOutput">
  <ul>
<?php
$_from = $_smarty_tpl->tpl_vars['remote_output']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_remote_line_0_saved_item = isset($_smarty_tpl->tpl_vars['remote_line']) ? $_smarty_tpl->tpl_vars['remote_line'] : false;
$_smarty_tpl->tpl_vars['remote_line'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['remote_line']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['remote_line']->value) {
$_smarty_tpl->tpl_vars['remote_line']->_loop = true;
$__foreach_remote_line_0_saved_local_item = $_smarty_tpl->tpl_vars['remote_line'];
?>
    <li class="<?php echo $_smarty_tpl->tpl_vars['remote_line']->value['CLASS'];?>
"><?php echo $_smarty_tpl->tpl_vars['remote_line']->value['CONTENT'];?>
</li>
<?php
$_smarty_tpl->tpl_vars['remote_line'] = $__foreach_remote_line_0_saved_local_item;
}
if ($__foreach_remote_line_0_saved_item) {
$_smarty_tpl->tpl_vars['remote_line'] = $__foreach_remote_line_0_saved_item;
}
?>
  </ul>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['sites']->value)) {?>
<table class="table2">
	<tr class="throw">
		<td><?php echo l10n('Directory');?>
</td>
		<td><?php echo l10n('Actions');?>
</td>
	</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['sites']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_site_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_site']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_site'] : false;
$__foreach_site_1_saved_item = isset($_smarty_tpl->tpl_vars['site']) ? $_smarty_tpl->tpl_vars['site'] : false;
$_smarty_tpl->tpl_vars['site'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_site'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['site']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['site']->value) {
$_smarty_tpl->tpl_vars['site']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_site']->value['index']++;
$__foreach_site_1_saved_local_item = $_smarty_tpl->tpl_vars['site'];
?>
  <tr style="text-align:left" class="<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_site']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_site']->value['index'] : null))) {?>row1<?php } else { ?>row2<?php }?>"><td>
    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['NAME'];?>
"><?php echo $_smarty_tpl->tpl_vars['site']->value['NAME'];?>
</a><br>(<?php echo $_smarty_tpl->tpl_vars['site']->value['TYPE'];?>
, <?php echo $_smarty_tpl->tpl_vars['site']->value['CATEGORIES'];?>
 <?php echo l10n('Albums');?>
, <?php echo $_smarty_tpl->tpl_vars['pwg']->value->l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['site']->value['IMAGES']);?>
)
  </td><td>
    [<a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['U_SYNCHRONIZE'];?>
" title="<?php echo l10n('update the database from files');?>
"><?php echo l10n('Synchronize');?>
</a>]
<?php if (isset($_smarty_tpl->tpl_vars['site']->value['U_DELETE'])) {?>
      [<a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['U_DELETE'];?>
" onclick="return confirm('<?php echo strtr(l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');"
                title="<?php echo l10n('delete this site and all its attached elements');?>
"><?php echo l10n('delete');?>
</a>]
<?php }
if (!empty($_smarty_tpl->tpl_vars['site']->value['plugin_links'])) {?>
        <br>
<?php
$_from = $_smarty_tpl->tpl_vars['site']->value['plugin_links'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_plugin_link_2_saved_item = isset($_smarty_tpl->tpl_vars['plugin_link']) ? $_smarty_tpl->tpl_vars['plugin_link'] : false;
$_smarty_tpl->tpl_vars['plugin_link'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['plugin_link']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['plugin_link']->value) {
$_smarty_tpl->tpl_vars['plugin_link']->_loop = true;
$__foreach_plugin_link_2_saved_local_item = $_smarty_tpl->tpl_vars['plugin_link'];
?>
        [<a href="<?php echo $_smarty_tpl->tpl_vars['plugin_link']->value['U_HREF'];?>
" title='<?php echo $_smarty_tpl->tpl_vars['plugin_link']->value['U_HINT'];?>
'><?php echo $_smarty_tpl->tpl_vars['plugin_link']->value['U_CAPTION'];?>
</a>]
<?php
$_smarty_tpl->tpl_vars['plugin_link'] = $__foreach_plugin_link_2_saved_local_item;
}
if ($__foreach_plugin_link_2_saved_item) {
$_smarty_tpl->tpl_vars['plugin_link'] = $__foreach_plugin_link_2_saved_item;
}
}?>
  </td></tr>
<?php
$_smarty_tpl->tpl_vars['site'] = $__foreach_site_1_saved_local_item;
}
if ($__foreach_site_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_site'] = $__foreach_site_1_saved;
}
if ($__foreach_site_1_saved_item) {
$_smarty_tpl->tpl_vars['site'] = $__foreach_site_1_saved_item;
}
?>
</table>
<?php }?>

<p id="showCreateSite" style="text-align:left;margin-left:1em;">
  <a href="#"><?php echo l10n('create a new site');?>
</a>
</p>

<form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post" id="createSite" style="display:none">
  <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
  <fieldset>
    <legend><?php echo l10n('create a new site');?>
</legend>

  <p style="margin-top:0;"><strong><?php echo l10n('Directory');?>
</strong>
    <br><input type="text" name="galleries_url" id="galleries_url">
  </p>

  <p class="actionButtons">
    <input class="submit" type="submit" name="submit" value="<?php echo l10n('Submit');?>
">
  </p>
</form>
<?php }
}
