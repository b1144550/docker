<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:50:16
  from "/config/www/gallery/admin/themes/default/template/updates_pwg.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb9457820dbb9_75992419',
  'file_dependency' => 
  array (
    'e727a7fc75054acb32c0ef45dd9f28f83844f83d' => 
    array (
      0 => '/config/www/gallery/admin/themes/default/template/updates_pwg.tpl',
      1 => 1554798522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9457820dbb9_75992419 ($_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once '/config/www/gallery/include/smarty/libs/plugins/function.counter.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery(document).ready(function() {
	jQuery('input[name="submit"]').click(function() {
    if(!confirm('<?php echo l10n('Are you sure?');?>
'))
      return false;
    jQuery(this).hide();
    jQuery('.autoupdate_bar').show();
	});
  jQuery('[name="understand"]').click(function() {
    jQuery('[name="submit"]').attr('disabled', !this.checked);
  });
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_head', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]->block_html_head(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<style type="text/css">
form { width: 750px; }
fieldset { padding-bottom: 30px; }
p, form p { text-align: left; margin-left:20px; }
li { margin: 5px; }
</style>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]->block_html_head(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="titrePage">
<h2><?php echo l10n('Updates');?>
</h2>
</div>

<?php if ($_smarty_tpl->tpl_vars['STEP']->value == 0) {
if ($_smarty_tpl->tpl_vars['CHECK_VERSION']->value) {?>
    <p><?php echo l10n('You are running the latest version of Piwigo.');?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['DEV_VERSION']->value) {?>
    <p><?php echo l10n('You are running on development sources, no check possible.');?>
</p>
<?php } else { ?>
    <p><?php echo l10n('Check for update failed for unknown reasons.');?>
</p>
<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['STEP']->value == 1) {?>
<h4><?php echo l10n('Two updates are available');?>
:</h4>
<p>
<ul>
  <li><a href="admin.php?page=updates&amp;step=2&amp;to=<?php echo $_smarty_tpl->tpl_vars['MINOR_VERSION']->value;?>
"><strong><?php echo l10n('Update to Piwigo %s',$_smarty_tpl->tpl_vars['MINOR_VERSION']->value);?>
</strong></a>: <?php echo l10n('This is a minor update, with only bug corrections.');?>
</li>
  <li><a href="admin.php?page=updates&amp;step=3&amp;to=<?php echo $_smarty_tpl->tpl_vars['MAJOR_VERSION']->value;?>
"><strong><?php echo l10n('Update to Piwigo %s',$_smarty_tpl->tpl_vars['MAJOR_VERSION']->value);?>
</strong></a>: <?php echo l10n('This is a major update, with <a href="%s">new exciting features</a>.',$_smarty_tpl->tpl_vars['RELEASE_URL']->value);?>
 <?php echo l10n('Some themes and plugins may be not available yet.');?>
</li>
</ul>
</p>
<p><?php echo l10n('You can update to Piwigo %s directly, without upgrading to Piwigo %s (recommended).',$_smarty_tpl->tpl_vars['MAJOR_VERSION']->value,$_smarty_tpl->tpl_vars['MINOR_VERSION']->value);?>
</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['STEP']->value == 2) {?>
<p>
  <?php echo l10n('A new version of Piwigo is available.');?>
<br>
  <?php echo l10n('This is a minor update, with only bug corrections.');?>

</p>
<form action="" method="post">
<p><input type="submit" name="submit" value="<?php echo l10n('Update to Piwigo %s',$_smarty_tpl->tpl_vars['UPGRADE_TO']->value);?>
"></p>
<p class="autoupdate_bar" style="display:none;">&nbsp; <?php echo l10n('Update in progress...');?>
<br><img src="admin/themes/default/images/ajax-loader-bar.gif"></p>
<p><input type="hidden" name="upgrade_to" value="<?php echo $_smarty_tpl->tpl_vars['UPGRADE_TO']->value;?>
"></p>
</form>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['STEP']->value == 3) {?>
<p>
  <?php echo l10n('A new version of Piwigo is available.');?>
<br>
  <?php echo l10n('This is a major update, with <a href="%s">new exciting features</a>.',$_smarty_tpl->tpl_vars['RELEASE_URL']->value);?>
 <?php echo l10n('Some themes and plugins may be not available yet.');?>

</p>
<form action="" method="post">

<?php echo smarty_function_counter(array('assign'=>'i'),$_smarty_tpl);?>

<fieldset>
  <legend><?php echo l10n('Dump Database');?>
</legend>
  <p><input type="checkbox" name="includeHistory"> &nbsp; <?php echo l10n('Include history data (Warning: server memory limit may be exceeded)');?>
</p>
  <p><input type="submit" name="dumpDatabase" value="<?php echo l10n('Dump Database');?>
"></p>
</fieldset>

<?php echo smarty_function_counter(array('assign'=>'i'),$_smarty_tpl);?>

<fieldset>
  <legend><?php echo l10n('Update to Piwigo %s',$_smarty_tpl->tpl_vars['UPGRADE_TO']->value);?>
</legend>
<?php if (!empty($_smarty_tpl->tpl_vars['missing']->value['plugins'])) {?>
  <p><i><?php echo l10n('Following plugins may not be compatible with the new version of Piwigo:');?>
</i></p>
  <p><ul><?php
$_from = $_smarty_tpl->tpl_vars['missing']->value['plugins'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_plugin_0_saved_item = isset($_smarty_tpl->tpl_vars['plugin']) ? $_smarty_tpl->tpl_vars['plugin'] : false;
$_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['plugin']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
$__foreach_plugin_0_saved_local_item = $_smarty_tpl->tpl_vars['plugin'];
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['uri'];?>
" class="externalLink"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
</a></li><?php
$_smarty_tpl->tpl_vars['plugin'] = $__foreach_plugin_0_saved_local_item;
}
if ($__foreach_plugin_0_saved_item) {
$_smarty_tpl->tpl_vars['plugin'] = $__foreach_plugin_0_saved_item;
}
?></ul><br></p>
<?php }
if (!empty($_smarty_tpl->tpl_vars['missing']->value['themes'])) {?>
  <p><i><?php echo l10n('Following themes may not be compatible with the new version of Piwigo:');?>
</i></p>
  <p><ul><?php
$_from = $_smarty_tpl->tpl_vars['missing']->value['themes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_theme_1_saved_item = isset($_smarty_tpl->tpl_vars['theme']) ? $_smarty_tpl->tpl_vars['theme'] : false;
$_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['theme']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
$__foreach_theme_1_saved_local_item = $_smarty_tpl->tpl_vars['theme'];
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['theme']->value['uri'];?>
" class="externalLink"><?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
</a></li><?php
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_1_saved_local_item;
}
if ($__foreach_theme_1_saved_item) {
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_1_saved_item;
}
?></ul><br></p>
<?php }?>
  <p>
<?php if (!empty($_smarty_tpl->tpl_vars['missing']->value['plugins']) || !empty($_smarty_tpl->tpl_vars['missing']->value['themes'])) {?>
  <p><label><input type="checkbox" name="understand"> &nbsp;<?php echo l10n('I decide to update anyway');?>
</label></p>
<?php }?>
  <p><input type="submit" name="submit" value="<?php echo l10n('Update to Piwigo %s',$_smarty_tpl->tpl_vars['UPGRADE_TO']->value);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['missing']->value['plugins']) || !empty($_smarty_tpl->tpl_vars['missing']->value['themes'])) {?>disabled="disabled"<?php }?>>
  </p>
  <p class="autoupdate_bar" style="display:none;">&nbsp; <?php echo l10n('Update in progress...');?>
<br><img src="admin/themes/default/images/ajax-loader-bar.gif"></p>
</fieldset>

<p><input type="hidden" name="upgrade_to" value="<?php echo $_smarty_tpl->tpl_vars['UPGRADE_TO']->value;?>
"></p>
</form>
<?php }
}
}
