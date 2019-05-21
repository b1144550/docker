<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:49:48
  from "/config/www/gallery/plugins/AdminTools/template/admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb9455c8b0b92_32041537',
  'file_dependency' => 
  array (
    '53604392ea8d4c880d8394972399bfe9cf61432c' => 
    array (
      0 => '/config/www/gallery/plugins/AdminTools/template/admin.tpl',
      1 => 1554798526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9455c8b0b92_32041537 ($_smarty_tpl) {
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.graphicalCheckbox {
  font-size:16px;
  line-height:16px;
}

.graphicalCheckbox + input {
  display:none;
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery('#ato-config input[type=checkbox]').change(function() {
  jQuery(this).prev().toggleClass('icon-check icon-check-empty');
});
jQuery('#ato-config input[type=radio]').change(function() {
  jQuery('#ato-config input[type=radio][name='+ $(this).attr('name') +']').prev().toggleClass('icon-check icon-check-empty');
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="titrePage">
  <h2>Admin Tools</h2>
</div>

<form method="post" action="" class="properties" id="ato-config">
<fieldset>
  <legend><?php echo l10n('Configuration');?>
</legend>
  <ul>
    <li>
      <label>
        <span class="graphicalCheckbox icon-check<?php if (!$_smarty_tpl->tpl_vars['AdminTools']->value['default_open']) {?>-empty<?php }?>"></span>
        <input type="checkbox" name="default_open"<?php if ($_smarty_tpl->tpl_vars['AdminTools']->value['default_open']) {?> checked="checked"<?php }?>>
        <b><?php echo l10n('Open toolbar by default');?>
</b>
      </label>
    </li>
    <li>
      <label>
        <span class="graphicalCheckbox icon-check<?php if (!$_smarty_tpl->tpl_vars['AdminTools']->value['public_quick_edit']) {?>-empty<?php }?>"></span>
        <input type="checkbox" name="public_quick_edit"<?php if ($_smarty_tpl->tpl_vars['AdminTools']->value['public_quick_edit']) {?> checked="checked"<?php }?>>
        <b><?php echo l10n('Give access to quick edit to photo owners even if they are not admin');?>
</b>
      </label>
    </li>
    <li>
      <b><?php echo l10n('Closed icon position');?>
 :</b>
      <label>
        <span class="graphicalCheckbox icon-check<?php if ($_smarty_tpl->tpl_vars['AdminTools']->value['closed_position'] != 'left') {?>-empty<?php }?>"></span>
        <input type="radio" name="closed_position" value="left"<?php if ($_smarty_tpl->tpl_vars['AdminTools']->value['closed_position'] == 'left') {?> checked="checked"<?php }?>>
        <?php echo l10n('left');?>

      </label>
      <label>
        <span class="graphicalCheckbox icon-check<?php if ($_smarty_tpl->tpl_vars['AdminTools']->value['closed_position'] != 'right') {?>-empty<?php }?>"></span>
        <input type="radio" name="closed_position" value="right"<?php if ($_smarty_tpl->tpl_vars['AdminTools']->value['closed_position'] == 'right') {?> checked="checked"<?php }?>>
        <?php echo l10n('right');?>

      </label>
    </li>
  </ul>
</fieldset>

<p class="formButtons"><input type="submit" name="save_config" value="<?php echo l10n('Save Settings');?>
"></p>
</form><?php }
}
