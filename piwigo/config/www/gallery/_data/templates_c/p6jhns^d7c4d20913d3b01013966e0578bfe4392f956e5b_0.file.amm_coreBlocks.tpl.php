<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:49:55
  from "/config/www/gallery/plugins/AMenuManager/admin/amm_coreBlocks.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb945632a8222_18031606',
  'file_dependency' => 
  array (
    'd7c4d20913d3b01013966e0578bfe4392f956e5b' => 
    array (
      0 => '/config/www/gallery/plugins/AMenuManager/admin/amm_coreBlocks.tpl',
      1 => 1497869440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb945632a8222_18031606 ($_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">

  var cbm,
      resetValues = {
        'cancel':new Array(),
        'piwigo':new Array()
      };
  $(window).load(
    function ()
    {
      
      // initialization for cancel et reset functions
<?php
$_from = $_smarty_tpl->tpl_vars['datas']->value['coreBlocks']['defaultValues'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_0_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
        resetValues.piwigo.push(  {  id:"<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
", block:"<?php echo $_smarty_tpl->tpl_vars['value']->value['container'];?>
", order:<?php echo $_smarty_tpl->tpl_vars['value']->value['order'];?>
, visibility:"<?php echo $_smarty_tpl->tpl_vars['value']->value['visibility'];?>
"  }  );
<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
if ($__foreach_value_0_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_value_0_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['datas']->value['coreBlocks']['items'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_1_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_1_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_1_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
        resetValues.cancel.push(  {  id:"<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
", block:"<?php echo $_smarty_tpl->tpl_vars['value']->value['container'];?>
", order:<?php echo $_smarty_tpl->tpl_vars['value']->value['order'];?>
, visibility:"<?php echo $_smarty_tpl->tpl_vars['value']->value['visibility'];?>
"  }  );
<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_local_item;
}
if ($__foreach_value_1_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_item;
}
if ($__foreach_value_1_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_value_1_saved_key;
}
?>
      

      cbm=new coreBlocks(
        {},
        {},
        '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
        {
          resetValues:resetValues,
          tab:"<?php echo $_smarty_tpl->tpl_vars['datas']->value['tab'];?>
"
        }

      );
    }
  );
<?php echo '</script'; ?>
>



<div style='padding-top:15px;'>
<?php echo $_smarty_tpl->tpl_vars['blocksTabsheet']->value;?>

</div>


<div id="containerPos" style='display:none;'>

  <ul class='menuUl'>
<?php
$_from = $_smarty_tpl->tpl_vars['datas']->value['menuBlocks'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_block_2_saved_item = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block'] : false;
$_smarty_tpl->tpl_vars['block'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['block']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
$__foreach_block_2_saved_local_item = $_smarty_tpl->tpl_vars['block'];
?>
      <li class='menuListItem connectedSortable pluginBox' blockId='<?php echo $_smarty_tpl->tpl_vars['block']->value['id'];?>
'>

        <table class='menuListAccess'>
          <tr>
            <td style='min-width: 250px;'>
              <span class='menuListMove' title="<?php echo l10n('Drag to re-order');?>
">&nbsp;</span>
              <span class='menuListName'>
                <span style='font-weight:bold;' class='pluginBoxNameCell'><?php echo l10n($_smarty_tpl->tpl_vars['block']->value['name']);?>
</span>&nbsp;[<?php echo $_smarty_tpl->tpl_vars['block']->value['id'];?>
]<br>
                <span style='font-style:italic;'><?php if ($_smarty_tpl->tpl_vars['block']->value['owner'] == 'piwigo') {?>Piwigo<?php } else {
echo l10n('g002_plugin');?>
&nbsp;:&nbsp;<?php echo $_smarty_tpl->tpl_vars['block']->value['owner'];
}?></span>
              </span>
            </td>
            <td style='min-width: 100px;text-align:right;'><?php echo l10n('g002_accessibility');?>
</td>
            <td style='width:30%;'>
              <div id='users_<?php echo $_smarty_tpl->tpl_vars['block']->value['id'];?>
' class='menuListUsers' style='display:none;'>
              {
                "selected":<?php echo $_smarty_tpl->tpl_vars['block']->value['users'];?>
,
                "values":
                [
<?php
$_from = $_smarty_tpl->tpl_vars['datas']->value['users'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_items_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items'] : false;
$__foreach_items_3_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$__foreach_items_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_items'] = new Smarty_Variable(array());
$__foreach_items_3_first = true;
$__foreach_items_3_iteration=0;
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_items_3_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] = $__foreach_items_3_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['last'] = $__foreach_items_3_iteration == $__foreach_items_3_total;
$__foreach_items_3_first = false;
$__foreach_items_3_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
                  {"value":"<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
","cols":["<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
"]}<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['last'] : null)) {?>,<?php }
$_smarty_tpl->tpl_vars['user'] = $__foreach_items_3_saved_local_item;
}
if ($__foreach_items_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_items'] = $__foreach_items_3_saved;
}
if ($__foreach_items_3_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_items_3_saved_item;
}
?>
                ]
              }
              </div>
            </td>
            <td style='width:30%;'>
              <div id='groups_<?php echo $_smarty_tpl->tpl_vars['block']->value['id'];?>
' class='menuListGroups' style:'display:none;'>
              {
                "selected":<?php echo $_smarty_tpl->tpl_vars['block']->value['groups'];?>
,
                "values":
                [
<?php
$_from = $_smarty_tpl->tpl_vars['datas']->value['groups'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_items_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items'] : false;
$__foreach_items_4_saved_item = isset($_smarty_tpl->tpl_vars['group']) ? $_smarty_tpl->tpl_vars['group'] : false;
$__foreach_items_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_items'] = new Smarty_Variable(array());
$__foreach_items_4_first = true;
$__foreach_items_4_iteration=0;
$_smarty_tpl->tpl_vars['group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
$__foreach_items_4_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] = $__foreach_items_4_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['last'] = $__foreach_items_4_iteration == $__foreach_items_4_total;
$__foreach_items_4_first = false;
$__foreach_items_4_saved_local_item = $_smarty_tpl->tpl_vars['group'];
?>
                  {"value":"<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
","cols":["<?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
"]}<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['last'] : null)) {?>,<?php }
$_smarty_tpl->tpl_vars['group'] = $__foreach_items_4_saved_local_item;
}
if ($__foreach_items_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_items'] = $__foreach_items_4_saved;
}
if ($__foreach_items_4_saved_item) {
$_smarty_tpl->tpl_vars['group'] = $__foreach_items_4_saved_item;
}
?>
                ]
              }
              </div>
            </td>

          </tr>
        </table>
      </li>
<?php
$_smarty_tpl->tpl_vars['block'] = $__foreach_block_2_saved_local_item;
}
if ($__foreach_block_2_saved_item) {
$_smarty_tpl->tpl_vars['block'] = $__foreach_block_2_saved_item;
}
?>
  </ul>

</div>

<div id="containerMenu" style='display:none;'>
  <table>
    <tr>
<?php
$_from = $_smarty_tpl->tpl_vars['datas']->value['coreBlocks']['blocks'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_blockName_5_saved_item = isset($_smarty_tpl->tpl_vars['blockName']) ? $_smarty_tpl->tpl_vars['blockName'] : false;
$__foreach_blockName_5_saved_key = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block'] : false;
$_smarty_tpl->tpl_vars['blockName'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['block'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['blockName']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value => $_smarty_tpl->tpl_vars['blockName']->value) {
$_smarty_tpl->tpl_vars['blockName']->_loop = true;
$__foreach_blockName_5_saved_local_item = $_smarty_tpl->tpl_vars['blockName'];
?>
      <td>
        <h3><?php echo l10n($_smarty_tpl->tpl_vars['blockName']->value);?>
</h3>
      </td>
<?php
$_smarty_tpl->tpl_vars['blockName'] = $__foreach_blockName_5_saved_local_item;
}
if ($__foreach_blockName_5_saved_item) {
$_smarty_tpl->tpl_vars['blockName'] = $__foreach_blockName_5_saved_item;
}
if ($__foreach_blockName_5_saved_key) {
$_smarty_tpl->tpl_vars['block'] = $__foreach_blockName_5_saved_key;
}
?>
      <td>&nbsp;</td>
    </tr>
    <tr>
<?php
$_from = $_smarty_tpl->tpl_vars['datas']->value['coreBlocks']['blocks'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_items_6_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items'] : false;
$__foreach_items_6_saved_item = isset($_smarty_tpl->tpl_vars['blockName']) ? $_smarty_tpl->tpl_vars['blockName'] : false;
$__foreach_items_6_saved_key = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block'] : false;
$__foreach_items_6_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['blockName'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_items'] = new Smarty_Variable(array());
$_smarty_tpl->tpl_vars['block'] = new Smarty_Variable();
$__foreach_items_6_first = true;
$__foreach_items_6_iteration=0;
$_smarty_tpl->tpl_vars['blockName']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value => $_smarty_tpl->tpl_vars['blockName']->value) {
$_smarty_tpl->tpl_vars['blockName']->_loop = true;
$__foreach_items_6_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] = $__foreach_items_6_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['last'] = $__foreach_items_6_iteration == $__foreach_items_6_total;
$__foreach_items_6_first = false;
$__foreach_items_6_saved_local_item = $_smarty_tpl->tpl_vars['blockName'];
?>
      <td <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] : null)) {?>class='leftBar'<?php }?>>
        <div id="containerMenu_<?php echo $_smarty_tpl->tpl_vars['block']->value;?>
" class="containerMenuBlock">

          <ul class="connectedSortable categoryUl" id="menu_<?php echo $_smarty_tpl->tpl_vars['block']->value;?>
">
<?php
$_from = $_smarty_tpl->tpl_vars['datas']->value['coreBlocks']['items'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_7_saved_item = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data'] : false;
$__foreach_data_7_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$__foreach_data_7_saved_local_item = $_smarty_tpl->tpl_vars['data'];
if ($_smarty_tpl->tpl_vars['data']->value['container'] == $_smarty_tpl->tpl_vars['block']->value) {?>
              <li class="categoryLi menuItem pluginBox <?php if ($_smarty_tpl->tpl_vars['id']->value == 'qsearch') {?>menuItemDisabled<?php }?>" id="i<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <div class='pluginBoxNameCell'>
<?php if ($_smarty_tpl->tpl_vars['id']->value == "qsearch") {
} else { ?>
                  <span class='listMove' title="<?php echo l10n('Drag to re-order');?>
"></span>
<?php }?>
                  <?php echo l10n($_smarty_tpl->tpl_vars['data']->value['translation']);?>


                    <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/permissions.png"
                         class="button drag_button visibilitySwitch"
                         alt="<?php echo l10n('g002_click_to_manage_rights');?>
"
                         title="<?php echo l10n('g002_click_to_manage_rights');?>
"
                         style="float:right;"/>

                </div>
                <div id="i<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_visibility" class="visibility">
                  <?php echo $_smarty_tpl->tpl_vars['data']->value['visibilityForm'];?>

                </div>
              </li>
<?php }
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_7_saved_local_item;
}
if ($__foreach_data_7_saved_item) {
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_7_saved_item;
}
if ($__foreach_data_7_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_data_7_saved_key;
}
?>
          </ul>
        </div>
      </td>
<?php
$_smarty_tpl->tpl_vars['blockName'] = $__foreach_items_6_saved_local_item;
}
if ($__foreach_items_6_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_items'] = $__foreach_items_6_saved;
}
if ($__foreach_items_6_saved_item) {
$_smarty_tpl->tpl_vars['blockName'] = $__foreach_items_6_saved_item;
}
if ($__foreach_items_6_saved_key) {
$_smarty_tpl->tpl_vars['block'] = $__foreach_items_6_saved_key;
}
?>
    <td class='leftBar'>
      <div class='containerMenuBlock'>
        <input type="button" value="<?php echo l10n('g002_cancel');?>
" onclick="cbm.reset('cancel');"/><br>
        <input type="button" value="<?php echo l10n('g002_piwigo_default');?>
" onclick="cbm.reset('piwigo');"/>
      </div>
    </td>
    </tr>
  </table>
</div>

<div style='padding-top:30px;'>
  <input style='margin-left:20px;' type="button" value="<?php echo l10n('g002_apply');?>
" onclick="cbm.submit();">
</div>

<?php }
}
