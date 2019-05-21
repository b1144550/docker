<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:50:08
  from "/config/www/gallery/plugins/TakeATour/tpl/admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb9457051d9d1_98088503',
  'file_dependency' => 
  array (
    'f6e64a6e86188157d8d570e92cd8c439b350cbb1' => 
    array (
      0 => '/config/www/gallery/plugins/TakeATour/tpl/admin.tpl',
      1 => 1554798525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9457051d9d1_98088503 ($_smarty_tpl) {
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>"jquery")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>"jquery"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery('.TAT_description a[href*="piwigo.org"]').addClass("externalLink");

jQuery('.showInfo').tipTip({
  'delay' : 0,
  'fadeIn' : 200,
  'fadeOut' : 200,
  'maxWidth':'300px',
  'keepAlive':true,
  'activation':'click'
});

jQuery(".showDetails a").click(function() {
  jQuery(".pluginMiniBox, .pluginBox").toggle();

  var currentText = jQuery(this).html();
  jQuery(this).html(jQuery(this).data("alt-text")).data("alt-text", currentText);

  jQuery(this).toggleClass("icon-eye").toggleClass("icon-eye-off");

  return false;
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>"jquery"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.pluginBox {
  display:none;
}

.showDetails {
  padding:0;
  margin:-1em -1em 0.5em 0;
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="titrePage">
  <h2><?php echo l10n('takeatour_configpage');?>
</h2>
</div>
<div id="helpContent">
  <p><?php echo l10n('TAT_descrp');?>
</p>

<fieldset style="text-align:left">
  <legend>List of Tours</legend>

<div class="showDetails">
  <a href="#" class="icon-eye" data-alt-text="<?php echo htmlspecialchars(l10n('hide details'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo l10n('show details');?>
</a>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['tours']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tours_loop_0_saved_item = isset($_smarty_tpl->tpl_vars['tour']) ? $_smarty_tpl->tpl_vars['tour'] : false;
$_smarty_tpl->tpl_vars['tour'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tour']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tour']->value) {
$_smarty_tpl->tpl_vars['tour']->_loop = true;
$__foreach_tours_loop_0_saved_local_item = $_smarty_tpl->tpl_vars['tour'];
?>
  <div id="<?php echo $_smarty_tpl->tpl_vars['tour']->value['id'];?>
" class="pluginMiniBox">
    <div class="pluginMiniBoxNameCell">
      <?php echo $_smarty_tpl->tpl_vars['tour']->value['name'];?>

      <a class="icon-info-circled-1 showInfo" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tour']->value['desc'], ENT_QUOTES, 'UTF-8', true);?>
"></a>
    </div>
    <div class="pluginActions">
      <div>
        <a href="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
?submited_tour_path=tours/<?php echo $_smarty_tpl->tpl_vars['tour']->value['id'];?>
&amp;pwg_token=<?php echo $_smarty_tpl->tpl_vars['pwg_token']->value;?>
"><?php echo l10n('Start the Tour');?>
 <i class="icon-right"></i></a>
      </div>
    </div>
  </div> 

  <div id="<?php echo $_smarty_tpl->tpl_vars['tour']->value['ID'];?>
" class="pluginBox">
    <table>
      <tr>
        <td class="pluginBoxNameCell">
          <?php echo $_smarty_tpl->tpl_vars['tour']->value['name'];?>

        </td>
        <td rowspan="2"><?php echo $_smarty_tpl->tpl_vars['tour']->value['desc'];?>
</td>
      </tr>
      <tr class="pluginActions">
        <td>
          <a href="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
?submited_tour_path=tours/<?php echo $_smarty_tpl->tpl_vars['tour']->value['id'];?>
&amp;pwg_token=<?php echo $_smarty_tpl->tpl_vars['pwg_token']->value;?>
"><?php echo l10n('Start the Tour');?>
 <i class="icon-right"></i></a>
        </td>
      </tr>
    </table>
  </div> 

<?php
$_smarty_tpl->tpl_vars['tour'] = $__foreach_tours_loop_0_saved_local_item;
}
if ($__foreach_tours_loop_0_saved_item) {
$_smarty_tpl->tpl_vars['tour'] = $__foreach_tours_loop_0_saved_item;
}
?>
</fieldset>
</div><?php }
}
