<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:51:56
  from "/config/www/gallery/admin/themes/default/template/site_update.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb945dc5cce31_99251058',
  'file_dependency' => 
  array (
    'de7a0106efc43cb2b6e52598d16508e430e9e7b3' => 
    array (
      0 => '/config/www/gallery/admin/themes/default/template/site_update.tpl',
      1 => 1554798522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/resize.inc.tpl' => 1,
  ),
),false)) {
function content_5cb945dc5cce31_99251058 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/config/www/gallery/include/smarty/libs/plugins/function.html_options.php';
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/resize.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="titrePage">
  <h2><?php echo l10n('Database synchronization with files');?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
</a></h2>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['update_result']->value)) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['L_RESULT_UPDATE']->value;?>
</h3>
<ul>
  <li class="update_summary_new"><?php echo $_smarty_tpl->tpl_vars['update_result']->value['NB_NEW_CATEGORIES'];?>
 <?php echo l10n('albums added in the database');?>
</li>
  <li class="update_summary_new"><?php echo $_smarty_tpl->tpl_vars['update_result']->value['NB_NEW_ELEMENTS'];?>
 <?php echo l10n('photos added in the database');?>
</li>
  <li class="update_summary_del"><?php echo $_smarty_tpl->tpl_vars['update_result']->value['NB_DEL_CATEGORIES'];?>
 <?php echo l10n('albums deleted in the database');?>
</li>
  <li class="update_summary_del"><?php echo $_smarty_tpl->tpl_vars['update_result']->value['NB_DEL_ELEMENTS'];?>
 <?php echo l10n('photos deleted from the database');?>
</li>
  <li><?php echo $_smarty_tpl->tpl_vars['update_result']->value['NB_UPD_ELEMENTS'];?>
 <?php echo l10n('photos updated in the database');?>
</li>
  <li class="update_summary_err"><?php echo $_smarty_tpl->tpl_vars['update_result']->value['NB_ERRORS'];?>
 <?php echo l10n('errors during synchronization');?>
</li>
</ul>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['metadata_result']->value)) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['L_RESULT_METADATA']->value;?>
</h3>
<ul>
  <li><?php echo $_smarty_tpl->tpl_vars['metadata_result']->value['NB_ELEMENTS_DONE'];?>
 <?php echo l10n('photos informations synchronized with files metadata');?>
</li>
  <li><?php echo $_smarty_tpl->tpl_vars['metadata_result']->value['NB_ELEMENTS_CANDIDATES'];?>
 <?php echo l10n('photos candidates for metadata synchronization');?>
</li>
  <li><?php echo l10n('Used metadata');?>
 : <?php echo $_smarty_tpl->tpl_vars['METADATA_LIST']->value;?>
</li>
</ul>
<?php }?>


<?php if (!empty($_smarty_tpl->tpl_vars['sync_errors']->value)) {?>
<h3><?php echo l10n('Error list');?>
</h3>
<div class="errors">
<ul>
<?php
$_from = $_smarty_tpl->tpl_vars['sync_errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_error_0_saved_item = isset($_smarty_tpl->tpl_vars['error']) ? $_smarty_tpl->tpl_vars['error'] : false;
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$__foreach_error_0_saved_local_item = $_smarty_tpl->tpl_vars['error'];
?>
  <li>[<?php echo $_smarty_tpl->tpl_vars['error']->value['ELEMENT'];?>
] <?php echo $_smarty_tpl->tpl_vars['error']->value['LABEL'];?>
</li>
<?php
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_0_saved_local_item;
}
if ($__foreach_error_0_saved_item) {
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_0_saved_item;
}
?>
</ul>
</div>
<h3><?php echo l10n('Errors caption');?>
</h3>
<ul>
<?php
$_from = $_smarty_tpl->tpl_vars['sync_error_captions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_caption_1_saved_item = isset($_smarty_tpl->tpl_vars['caption']) ? $_smarty_tpl->tpl_vars['caption'] : false;
$_smarty_tpl->tpl_vars['caption'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['caption']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['caption']->value) {
$_smarty_tpl->tpl_vars['caption']->_loop = true;
$__foreach_caption_1_saved_local_item = $_smarty_tpl->tpl_vars['caption'];
?>
  <li><strong><?php echo $_smarty_tpl->tpl_vars['caption']->value['TYPE'];?>
</strong>: <?php echo $_smarty_tpl->tpl_vars['caption']->value['LABEL'];?>
</li>
<?php
$_smarty_tpl->tpl_vars['caption'] = $__foreach_caption_1_saved_local_item;
}
if ($__foreach_caption_1_saved_item) {
$_smarty_tpl->tpl_vars['caption'] = $__foreach_caption_1_saved_item;
}
?>
</ul>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['sync_infos']->value)) {?>
<h3><?php echo l10n('Detailed informations');?>
</h3>
<div class="infos">
<ul>
<?php
$_from = $_smarty_tpl->tpl_vars['sync_infos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_info_2_saved_item = isset($_smarty_tpl->tpl_vars['info']) ? $_smarty_tpl->tpl_vars['info'] : false;
$_smarty_tpl->tpl_vars['info'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$__foreach_info_2_saved_local_item = $_smarty_tpl->tpl_vars['info'];
?>
  <li>[<?php echo $_smarty_tpl->tpl_vars['info']->value['ELEMENT'];?>
] <?php echo $_smarty_tpl->tpl_vars['info']->value['LABEL'];?>
</li>
<?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_2_saved_local_item;
}
if ($__foreach_info_2_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_2_saved_item;
}
?>
</ul>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['introduction']->value)) {?>
<h4><?php echo l10n('Choose an option');?>
</h4>
<form action="" method="post" id="update">

	<fieldset id="syncFiles">
		<legend><?php echo l10n('synchronize files structure with database');?>
</legend>
		<ul>
			<li><label><input type="radio" name="sync" value="" <?php if (empty($_smarty_tpl->tpl_vars['introduction']->value['sync'])) {?>checked="checked"<?php }?>> <?php echo l10n('nothing');?>
</label></li>
			<li><label><input type="radio" name="sync" value="dirs" <?php if ('dirs' == $_smarty_tpl->tpl_vars['introduction']->value['sync']) {?>checked="checked"<?php }?>> <?php echo l10n('only directories');?>
</label></li>

			<li><label><input type="radio" name="sync" value="files" <?php if ('files' == $_smarty_tpl->tpl_vars['introduction']->value['sync']) {?>checked="checked"<?php }?>> <?php echo l10n('directories + files');?>
</label>
				<ul style="padding-left:3em">
					<li><label><input type="checkbox" name="display_info" value="1" <?php if ($_smarty_tpl->tpl_vars['introduction']->value['display_info']) {?>checked="checked"<?php }?>> <?php echo l10n('display maximum informations (added albums and photos, deleted albums and photos)');?>
</label></li>
					<li><label><input type="checkbox" name="add_to_caddie" value="1" <?php if ($_smarty_tpl->tpl_vars['introduction']->value['add_to_caddie']) {?>checked="checked"<?php }?>> <?php echo l10n('add new photos to caddie');?>
</label></li>
					<li><label><?php echo l10n('Who can see these photos?');?>
 <select name="privacy_level"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['introduction']->value['privacy_level_options'],'selected'=>$_smarty_tpl->tpl_vars['introduction']->value['privacy_level_selected']),$_smarty_tpl);?>
</select></label></li>
				</ul>
			</li>
		</ul>
	</fieldset>

	<fieldset id="syncMetadata">
		<legend><?php echo l10n('synchronize files metadata with database photos informations');?>
</legend>
		<label><input type="checkbox" name="sync_meta" <?php if ($_smarty_tpl->tpl_vars['introduction']->value['sync_meta']) {?>checked="checked"<?php }?>> <?php echo l10n('Synchronize metadata');?>
 (<?php echo $_smarty_tpl->tpl_vars['METADATA_LIST']->value;?>
)</label>
		<ul style="padding-left:3em">
	  		<li>
	  			<label><input type="checkbox" name="meta_all" <?php if ($_smarty_tpl->tpl_vars['introduction']->value['meta_all']) {?>checked="checked"<?php }?>> <?php echo l10n('even already synchronized photos');?>
</label>
	  		</li>
	  		<li>
	  			<label><input type="checkbox" name="meta_empty_overrides" <?php if ($_smarty_tpl->tpl_vars['introduction']->value['meta_empty_overrides']) {?>checked="checked"<?php }?>> <?php echo l10n('overrides existing values with empty ones');?>
</label>
	  		</li>
		</ul>
	</fieldset>

  <fieldset id="syncSimulate">
    <legend><?php echo l10n('Simulation');?>
</legend>
    <ul><li><label><input type="checkbox" name="simulate" value="1" checked="checked"> <?php echo l10n('only perform a simulation (no change in database will be made)');?>
</label></li></ul>
  </fieldset>

  <fieldset id="catSubset">
    <legend><?php echo l10n('reduce to single existing albums');?>
</legend>
    <ul>
    <li>
    <select class="categoryList" name="cat" size="10">
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['category_options']->value,'selected'=>$_smarty_tpl->tpl_vars['category_options_selected']->value),$_smarty_tpl);?>

    </select>
    </li>

    <li><label><input type="checkbox" name="subcats-included" value="1" <?php if ($_smarty_tpl->tpl_vars['introduction']->value['subcats_included']) {?>checked="checked"<?php }?>> <?php echo l10n('Search in sub-albums');?>
</label></li>
    </ul>
  </fieldset>

  <p class="bottomButtons">
    <input class="submit" type="submit" value="<?php echo l10n('Submit');?>
" name="submit">
    <input class="submit" type="reset"  value="<?php echo l10n('Reset');?>
"  name="reset">
  </p>
</form>
<?php }?>

<p><a href="<?php echo $_smarty_tpl->tpl_vars['U_SITE_MANAGER']->value;?>
"><?php echo l10n('Site manager');?>
</a></p>
<?php }
}
