<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:47:56
  from "/config/www/gallery/plugins/rv_gmaps/admin/admin_config.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb944ec8a1f01_35949288',
  'file_dependency' => 
  array (
    'ec00f68d46672c1b2d1156442d411a311ecfc59d' => 
    array (
      0 => '/config/www/gallery/plugins/rv_gmaps/admin/admin_config.tpl',
      1 => 1532347524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb944ec8a1f01_35949288 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/config/www/gallery/include/smarty/libs/plugins/function.html_options.php';
?>

You have <?php echo $_smarty_tpl->tpl_vars['NB_GEOTAGGED']->value;?>
 geotagged images.

<form method="post" action="" class="properties">
<fieldset>
	<legend>Map configuration</legend>
	<ul>

	<li>
	 <label>
		Google Maps API Key:
		<input type="text" size="48" name="gmaps_api_key" value="<?php echo $_smarty_tpl->tpl_vars['GMAPS_API_KEY']->value;?>
" />
	</label>
		<br/>Signup for the key here: <a href="http://www.google.com/apis/maps/signup.html" target="_blank">http://www.google.com/apis/maps/signup.html</a>.
	</li>
	<br/>

	<!--<li>
	 <label>
		Automatically sync from exif
		<input type="checkbox" name="gmaps_auto_sync" <?php if ($_smarty_tpl->tpl_vars['GMAPS_AUTO_SYNC']->value) {?>checked="checked"<?php }?>>
		</label>
		<br/><small>When metadata is synchronized, tour manual set coordinates might be overriden.</small>
	</li>
	<br/> -->

  <li>
  <label>
    Maximum number of markers to show:
    <input type="text" size="3" name="nb_markers" value="<?php echo $_smarty_tpl->tpl_vars['NB_MARKERS']->value;?>
">
  </label>
    <br/><small>The images will be "clustered" based on this number and the visible region on the map.</small>
  </li>

  <br/>

  <li>
  <label>
    Maximum number of images per marker:
    <input type="text" size="3" name="nb_images_per_marker" value="<?php echo $_smarty_tpl->tpl_vars['NB_IMAGES_PER_MARKER']->value;?>
">
  </label>
    <br/><small>When a marker is clicked, the user will be able to navigate images in the info window. This data is sent to the browser once for all the markers. If you have many images, reduce this number in order to reduce traffic and speed up data decoding on the browser side.</small>
  </li>

  <br/>

  <li>
  <label>
    Marker style:
    <select name="marker_icon">
      <option value="">Default</option>
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['marker_icons']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_marker_icon']->value),$_smarty_tpl);?>

    </select>
  </label>
  </li>

  <li>
  <label>
    Default map type:
    <select name="map_type">
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['map_types']->value,'selected'=>$_smarty_tpl->tpl_vars['MAP_TYPE']->value),$_smarty_tpl);?>

    </select>
  </label>
  </li>

  </ul>

  <p>
    <input type="submit" value="<?php echo l10n('Submit');?>
" name="submit">
  </p>
</fieldset>
</form><?php }
}
