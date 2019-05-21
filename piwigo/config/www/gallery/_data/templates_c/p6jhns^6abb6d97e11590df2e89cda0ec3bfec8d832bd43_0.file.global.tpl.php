<?php
/* Smarty version 3.1.29, created on 2019-04-19 11:50:10
  from "/config/www/gallery/plugins/UserAdvManager/admin/template/global.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb945720a4883_10346308',
  'file_dependency' => 
  array (
    '6abb6d97e11590df2e89cda0ec3bfec8d832bd43' => 
    array (
      0 => '/config/www/gallery/plugins/UserAdvManager/admin/template/global.tpl',
      1 => 1457768454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb945720a4883_10346308 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/config/www/gallery/include/smarty/libs/plugins/function.html_options.php';
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery','path'=>'themes/default/js/jquery.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.cluetip','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.cluetip.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>($_smarty_tpl->tpl_vars['UAM_PATH']->value).('admin/template/uam.css')),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['UAM_THEME']->value == 'clear') {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>($_smarty_tpl->tpl_vars['UAM_PATH']->value).('admin/template/themes/clear/theme.css')),$_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['UAM_THEME']->value == 'roma') {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>($_smarty_tpl->tpl_vars['UAM_PATH']->value).('admin/template/themes/roma/theme.css')),$_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['UAM_THEME']->value == 'default') {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>($_smarty_tpl->tpl_vars['UAM_PATH']->value).('admin/template/themes/default/theme.css')),$_smarty_tpl);
}?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery().ready(function()
{
  jQuery("#UAM_Confirm_Mail_true, #UAM_Confirm_Mail_local").click(function() {
    jQuery("#UAM_CONFIRM_MAIL__").show("slow");
  });
  jQuery("#UAM_Confirm_Mail_false").click(function() {
    jQuery("#UAM_CONFIRM_MAIL__").hide("slow");
  });
  jQuery("#UAM_ConfirmMail_Remail_true, #UAM_ConfirmMail_TimeOut_true").click(function() {
    jQuery("#UAM_ConfirmMail_field").show("slow");
  });
  jQuery("#UAM_ConfirmMail_TimeOut_false").click(function() {
    if ($("input[name='UAM_ConfirmMail_Remail']:checked").val()=="false" )
    {
      jQuery("#UAM_ConfirmMail_field").hide("slow");
    }
  });
  jQuery("#UAM_ConfirmMail_Remail_false").click(function() {
    if ( $("input[name='UAM_ConfirmMail_TimeOut']:checked").val()=="false" )
    {
      jQuery("#UAM_ConfirmMail_field").hide("slow");
    }
  });
  jQuery("#UAM_RejectConnexion_true").click(function() {
    jQuery("#UAM_REJECTLOGIN").show("slow");
  });
  jQuery("#UAM_RejectConnexion_false").click(function() {
    jQuery("#UAM_REJECTLOGIN").hide("slow");
  });
  
  jQuery("#UAM_GhostUser_Tracker_true").click(function() {
    jQuery("#UAM_GHOSTRACKER_OPT").show("slow");
  });
  jQuery("#UAM_GhostUser_Tracker_false").click(function() {
    jQuery("#UAM_GHOSTRACKER_OPT").hide("slow");
  });
  jQuery("#UAM_GTAuto_true").click(function() {
    jQuery("#UAM_GTAUTO").show("slow");
  });
  jQuery("#UAM_GTAuto_false").click(function() {
    jQuery("#UAM_GTAUTO").hide("slow");
  });
  jQuery("#UAM_Mail_Info_true").click(function() {
    jQuery("#UAM_MAIL_INFO").show("slow");
  });
  jQuery("#UAM_Mail_Info_false").click(function() {
    jQuery("#UAM_MAIL_INFO").hide("slow");
  });
  jQuery("#UAM_CustomPasswRetr_true").click(function() {
    jQuery("#UAM_CustomPasswRetr").show("slow");
  });
  jQuery("#UAM_CustomPasswRetr_false").click(function() {
    jQuery("#UAM_CustomPasswRetr").hide("slow");
  });
 
  jQuery("#show_UAM_AdminValidation").click(function() {
    jQuery("#UAM_AdminValidation").show("slow");
    jQuery("#hide_UAM_AdminValidation").show("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#hide_UAM_AdminValidation").click(function() {
    jQuery("#show_UAM_AdminValidation").show("slow");
    jQuery("#UAM_AdminValidation").hide("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#show_UAM_ConfirmMail").click(function() {
    jQuery("#UAM_ConfirmMail").show("slow");
    jQuery("#hide_UAM_ConfirmMail").show("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#hide_UAM_ConfirmMail").click(function() {
    jQuery("#show_UAM_ConfirmMail").show("slow");
    jQuery("#UAM_ConfirmMail").hide("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#show_UAM_Change").click(function() {
    jQuery("#UAM_Change").show("slow");
    jQuery("#hide_UAM_Change").show("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#hide_UAM_Change").click(function() {
    jQuery("#show_UAM_Change").show("slow");
    jQuery("#UAM_Change").hide("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#show_UAM_GTReminder").click(function() {
    jQuery("#UAM_GTReminder").show("slow");
    jQuery("#hide_UAM_GTReminder").show("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#hide_UAM_GTReminder").click(function() {
    jQuery("#show_UAM_GTReminder").show("slow");
    jQuery("#UAM_GTReminder").hide("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery('.cluetip').cluetip(
  {
    width: 550,
    splitTitle: '|'
  });
});

function blockToggleDisplay(headerId, contentId)
{
  var revHeader = document.getElementById(headerId);
  var revContent = document.getElementById(contentId);

  if (revContent.style.display == 'none')
  {
    revContent.style.display = 'block';
    revHeader.className = 'instructionBlockHeaderExpanded';
  }
  else
  {
    revContent.style.display = 'none';
    revHeader.className = 'instructionBlockHeaderCollapsed';
  }
}

function uam_blockToggleDisplay( headerId, contentId )
{
  if (typeof(headerId)=='string')
  {
   if (headerId.length > 1)
       blockToggleDisplay(headerId, contentId) ;
      document.getElementById("nb_para").value =headerId ;
      document.getElementById("nb_para2").value =contentId;
  }
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="titrePage">
  <h2><?php echo l10n('UAM_Title_Tab');?>
 <?php echo $_smarty_tpl->tpl_vars['UAM_VERSION']->value;?>
<br/><?php echo l10n('UAM_SubTitle1');?>
</h2>
</div>

<form method="post" class="general">

  <p>
    <input class="submit" type="submit" value="<?php echo l10n('UAM_submit');?>
" name="submit" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
/>
      &nbsp;
    <input class="submit" type="submit" value="<?php echo l10n('UAM_audit');?>
" name="audit"/>
    <input name="nb_para" id="nb_para" type="text" value="<?php echo $_smarty_tpl->tpl_vars['nb_para']->value;?>
" style="display:none"/> 
    <input name="nb_para2" id="nb_para2" type="text" value="<?php echo $_smarty_tpl->tpl_vars['nb_para2']->value;?>
" style="display:none"/> 
  </p>


  <div id="instructionConfig1" class="instructionBlock" >

    <div id="config1_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('config1_header', 'Config1')">
      <span class="cluetip" title="<?php echo l10n('UAM_Title1');?>
|<?php echo l10n('UAM_restricTitle_d');?>
">
        <?php echo l10n('UAM_Title1');?>

      </span>
    </div>

    <div id="Config1" class="instructionBlockContent" style="display:none">
        <ul>
          <li>
            <label class="cluetip" title="<?php echo l10n('UAM_Username_Char');?>
|<?php echo l10n('UAM_carexcTitle_d');?>
">
              <?php echo l10n('UAM_Username_Char');?>

            </label>
            <label for="UAM_Username_Char_false"><input id="UAM_Username_Char_false" type="radio" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_USERNAME_CHAR_FALSE']->value;?>
 name="UAM_Username_Char"/>
              <?php echo l10n('UAM_Username_Char_false');?>
<br/>
            </label>
            <label for="UAM_Username_Char_true"><input id="UAM_Username_Char_true" type="radio" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_USERNAME_CHAR_TRUE']->value;?>
 name="UAM_Username_Char"/>
              <?php echo l10n('UAM_Username_Char_true');?>

            </label>
            <div class="uam_leftmargin">
              <input type="text" name="UAM_Username_List" value="<?php echo $_smarty_tpl->tpl_vars['UAM_USERNAME_CHAR_LIST']->value;?>
" size="20" style="text-align: center;"/>
            </div>
          </li>

          <li>
<?php if ($_smarty_tpl->tpl_vars['UAM_EMAIL_MANDATORY']->value) {?>
            <label class="cluetip" title="<?php echo l10n('UAM_MailExclusion');?>
|<?php echo l10n('UAM_mailexcTitle_d');?>
">
              <?php echo l10n('UAM_MailExclusion_No');?>

            </label>

            <div class="uam_hide">

              <label for="UAM_MailExclusion_false"><input id="UAM_MailExclusion_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_MAILEXCLUSION_FALSE']->value;?>
 name="UAM_MailExclusion" type="radio"/>
                <?php echo l10n('UAM_Disable');?>

              </label>
              <label for="UAM_MailExclusion_true"><input id="UAM_MailExclusion_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_MAILEXCLUSION_TRUE']->value;?>
 name="UAM_MailExclusion" type="radio"/>
                <?php echo l10n('UAM_MailExclusion_true');?>

              </label>

            </div>
<?php } else { ?>
            <label class="cluetip" title="<?php echo l10n('UAM_MailExclusion');?>
|<?php echo l10n('UAM_mailexcTitle_d');?>
">
              <?php echo l10n('UAM_MailExclusion');?>

            </label>

            <label for="UAM_MailExclusion_false"><input id="UAM_MailExclusion_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_MAILEXCLUSION_FALSE']->value;?>
 name="UAM_MailExclusion" type="radio"/>
                <?php echo l10n('UAM_Disable');?>

            </label>

            <label for="UAM_MailExclusion_true"><input id="UAM_MailExclusion_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_MAILEXCLUSION_TRUE']->value;?>
 name="UAM_MailExclusion" type="radio"/>
                <?php echo l10n('UAM_MailExclusion_true');?>

            </label>

<?php if ($_smarty_tpl->tpl_vars['UAM_ERROR_REPORTS1']->value) {?>
              <div class="uam_leftmargin">
                <textarea class="uam_textfields" name="UAM_MailExclusion_List" id="UAM_MailExclusion_List" rows="3" style="color: red" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_MAILEXCLUSION_LIST']->value;?>
</textarea>
              </div>
<?php } else { ?>
              <div class="uam_leftmargin">
                <textarea class="uam_textfields" name="UAM_MailExclusion_List" id="UAM_MailExclusion_List" rows="3" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_MAILEXCLUSION_LIST']->value;?>
</textarea>
              </div>
<?php }
}?>
          </li>
        </ul>
    </div>
  </div>




  <div id="instructionConfig2" class="instructionBlock" >

    <div id="config2_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('config2_header', 'Config2')">
      <span class="cluetip" title="<?php echo l10n('UAM_Title2');?>
|<?php echo l10n('UAM_confirmTitle_d');?>
">
        <?php echo l10n('UAM_Title2');?>

      </span>
    </div>
  
    <div id="Config2" class="instructionBlockContent" style="display:none">
        <ul>
        	<li>
            <label class="cluetip" title="<?php echo l10n('UAM_Confirm_Mail');?>
|<?php echo l10n('UAM_confirmmailTitle_d');?>
">
              <?php echo l10n('UAM_Confirm_Mail');?>

            </label>
            <label for="UAM_Confirm_Mail_false"><input type="radio" id="UAM_Confirm_Mail_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRM_MAIL_FALSE']->value;?>
 name="UAM_Confirm_Mail"/>
              <?php echo l10n('UAM_Disable');?>

            </label>
            <label for="UAM_Confirm_Mail_true"><input type="radio" id="UAM_Confirm_Mail_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRM_MAIL_TRUE']->value;?>
 name="UAM_Confirm_Mail"/>
              <?php echo l10n('UAM_Confirm_Mail_true');?>

            </label>
            <label for="UAM_Confirm_Mail_local"><input type="radio" id="UAM_Confirm_Mail_local" value="local" <?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRM_MAIL_LOCAL']->value;?>
 name="UAM_Confirm_Mail"/>
              <?php echo l10n('UAM_Confirm_Mail_local');?>

            </label>
          </li>
        </ul>
          <div id="UAM_CONFIRM_MAIL__" <?php if ($_smarty_tpl->tpl_vars['UAM_CONFIRM_MAIL_FALSE']->value) {?>style="display:none"<?php }?>>
            <ul>
         	    <li>
                <label class="cluetip" title="<?php echo l10n('UAM_Stuffs');?>
|<?php echo l10n('UAM_StuffsTitle_d');?>
">
                  <?php echo l10n('UAM_Stuffs');?>

                </label>
              
                <label for="UAM_Stuffs_false"><input id="UAM_Stuffs_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_STUFFS_FALSE']->value;?>
 name="UAM_Stuffs" type="radio"/>
                  <?php echo l10n('UAM_Disable');?>

                </label>
                <label for="UAM_Stuffs_true"><input id="UAM_Stuffs_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_STUFFS_TRUE']->value;?>
 name="UAM_Stuffs" type="radio"/>
                  <?php echo l10n('UAM_Enable');?>

                </label>
              
              </li>

         	    <li>
                <label class="cluetip" title="<?php echo l10n('UAM_AdminConfMail');?>
|<?php echo l10n('UAM_adminconfmailTitle_d');?>
">
                  <?php echo l10n('UAM_AdminConfMail');?>

                </label>
                <label for="UAM_Admin_ConfMail_false"><input id="UAM_Admin_ConfMail_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_ADMINCONFMAIL_FALSE']->value;?>
 name="UAM_Admin_ConfMail" type="radio"/>
                  <?php echo l10n('UAM_Disable');?>

                </label>
                <label for="UAM_Admin_ConfMail_true"><input id="UAM_Admin_ConfMail_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_ADMINCONFMAIL_TRUE']->value;?>
 name="UAM_Admin_ConfMail" type="radio"/>
                  <?php echo l10n('UAM_Enable');?>

                </label>
              </li>
            </ul>
            <a id="show_UAM_AdminValidation" ><?php echo l10n('UAM_Customize_messagesandmails');?>
</a>
            <a id="hide_UAM_AdminValidation" style="display: none"><?php echo l10n('hide details');?>
</a>
          <fieldset id="UAM_AdminValidation" style="display: none">
          <ul>
            <li>
              <label class="cluetip" title="<?php echo l10n('UAM_AdminValidationMail_Subject');?>
|<?php echo l10n('UAM_AdminValidationMail_Subject_d');?>
">
                <?php echo l10n('UAM_AdminValidationMail_Subject');?>

              </label>
              &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_AdminValidationMail_Subject" id="UAM_AdminValidationMail_Subject" rows="5" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_ADMINVALIDATIONMAIL_SUBJECT']->value;?>
</textarea>
            </li>
            <li style="list-style-type: none;">
            <ul>
              <li>
                <label class="cluetip" title="<?php echo l10n('UAM_AdminValidationMail_Text');?>
|<?php echo l10n('UAM_AdminValidationMail_d');?>
">
                  <?php echo l10n('UAM_AdminValidationMail_Text');?>

                </label>
                <textarea class="uam_textfields" name="UAM_AdminValidationMail_Text" id="UAM_AdminValidationMail_Text" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_ADMINVALIDATIONMAIL_TEXT']->value;?>
</textarea>
              </li>
            </ul>
            </li>
          </ul>
          <ul>
            <li>
              <label class="cluetip" title="<?php echo l10n('UAM_ConfirmMail_Subject');?>
|<?php echo l10n('UAM_ConfirmMail_Subject_d');?>
">
                <?php echo l10n('UAM_ConfirmMail_Subject');?>

              </label>
              &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_ConfirmMail_Subject" id="UAM_ConfirmMail_Subject" rows="5" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_SUBJECT']->value;?>
</textarea>
            </li>
            <li style="list-style-type: none;">
            <ul>
              <li>
                <label class="cluetip" title="<?php echo l10n('UAM_ConfirmMail_Text');?>
|<?php echo l10n('UAM_confirmtxtTitle_d');?>
">
                  <?php echo l10n('UAM_ConfirmMail_Text');?>

                </label>
<?php if ($_smarty_tpl->tpl_vars['UAM_ERROR_REPORTS2']->value) {?>
                  <textarea class="uam_textfields" name="UAM_ConfirmMail_Text" id="UAM_ConfirmMail_Text" rows="10" style="color: red" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_TEXT']->value;?>
</textarea>
<?php } else { ?>
                  <textarea class="uam_textfields" name="UAM_ConfirmMail_Text" id="UAM_ConfirmMail_Text" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_TEXT']->value;?>
</textarea>
<?php }?>
              </li>
            </ul>
            </li>
<!--
            
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_ConfirmMail_Text'); return false;">FCK Editor On/Off</a>
              </div>
            
-->
          <li style="list-style-type: none;">
          <br/><hr/><br/>
          </li>
            <li>
              <label class="cluetip" title="<?php echo l10n('UAM_confirmmail_custom_Txt1');?>
|<?php echo l10n('UAM_confirmmail_custom1_d');?>
">
                <?php echo l10n('UAM_confirmmail_custom_Txt1');?>

              </label>
                <textarea class="uam_textfields" name="UAM_ConfirmMail_Custom_Txt1" id="UAM_ConfirmMail_Custom_Txt1" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_CUSTOM_TXT1']->value;?>
</textarea>
            </li>
<?php if (defined('FCK_PATH')) {?>
            <li style="list-style-type: none;">
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_ConfirmMail_Custom_Txt1'); return false;">FCK Editor On/Off</a>
              </div>
            </li>
<?php }?>
            <li>
              <label class="cluetip" title="<?php echo l10n('UAM_confirmmail_custom_Txt2');?>
|<?php echo l10n('UAM_confirmmail_custom2_d');?>
">
                <?php echo l10n('UAM_confirmmail_custom_Txt2');?>

              </label>
                <textarea class="uam_textfields" name="UAM_ConfirmMail_Custom_Txt2" id="UAM_ConfirmMail_Custom_Txt2" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_CUSTOM_TXT2']->value;?>
</textarea>
            </li>
<?php if (defined('FCK_PATH')) {?>
            <li style="list-style-type: none;">
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_ConfirmMail_Custom_Txt2'); return false;">FCK Editor On/Off</a>
              </div>
            </li>
<?php }?>
          </ul>
          </fieldset>
          <br/><hr/><br/>
            <ul>
         	    <li>
                <label class="cluetip" title="<?php echo l10n('UAM_RejectConnexion');?>
|<?php echo l10n('UAM_RejectConnexion_d');?>
">
                  <?php echo l10n('UAM_RejectConnexion');?>

                </label>
            
                <label for="UAM_RejectConnexion_false"><input id="UAM_RejectConnexion_false" type="radio" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_REJECTCONNECT_FALSE']->value;?>
 name="UAM_RejectConnexion"/>
                  <?php echo l10n('UAM_Disable');?>

                </label>
                <label for="UAM_RejectConnexion_true"><input id="UAM_RejectConnexion_true" type="radio" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_REJECTCONNECT_TRUE']->value;?>
 name="UAM_RejectConnexion"/>
                  <?php echo l10n('UAM_Enable');?>

                </label>
              </li>
              <li id="UAM_REJECTLOGIN" <?php if ($_smarty_tpl->tpl_vars['UAM_REJECTCONNECT_FALSE']->value) {?>style="display: none"<?php }?>>
                <label class="cluetip" title="<?php echo l10n('UAM_RejectConnexion_Custom_Txt');?>
|<?php echo l10n('UAM_RejectConnexion_Custom_Txt_d');?>
">
                  <?php echo l10n('UAM_RejectConnexion_Custom_Txt');?>

                </label>
                <textarea class="uam_textfields" name="UAM_CustomRejectConnexion_Text" id="UAM_CustomRejectConnexion_Text" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_REJECTCONNECT_TEXT']->value;?>
</textarea>
<?php if (defined('FCK_PATH')) {?>
            <li style="list-style-type: none;">
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_CustomRejectConnexion_Text'); return false;">FCK Editor On/Off</a>
              </div>
            </li>
<?php }?>
              </li>
            </ul>
          <br/><hr/><br/>
          <a id="show_UAM_Change" ><?php echo l10n('UAM_Change');?>
</a>
          <a id="hide_UAM_Change" style="display: none"><?php echo l10n('hide details');?>
</a>
          <fieldset id="UAM_Change" style="display: none">
          <ul>
          <li style="list-style-type: none;">
            <div id="uam_notice"><?php echo l10n('UAM_Confirm_grpstat_notice');?>
</div>
          </li>
              <li style="list-style-type: none;">
              <br/>
              </li>
              <li>
                <label class="cluetip" title="<?php echo l10n('UAM_confirmgrpTitle');?>
|<?php echo l10n('UAM_confirmgrpTitle_d');?>
">
                  <?php echo l10n('UAM_Confirm_Group');?>

                </label>
              </li>
              <li style="list-style-type: none;">
              <ul>
                <li>
                  <label>
                    <?php echo l10n('UAM_No_Confirm_Group');?>

                  </label>
                  <div class="uam_leftmargin">
                    <?php echo smarty_function_html_options(array('name'=>"UAM_No_Confirm_Group",'options'=>$_smarty_tpl->tpl_vars['No_Confirm_Group']->value['group_options'],'selected'=>$_smarty_tpl->tpl_vars['No_Confirm_Group']->value['group_selected']),$_smarty_tpl);?>

                  </div>
                </li>
                <li>
                  <label>
                    <?php echo l10n('UAM_Validated_Group');?>

                  </label>
                  <div class="uam_leftmargin">
                    <?php echo smarty_function_html_options(array('name'=>"UAM_Validated_Group",'options'=>$_smarty_tpl->tpl_vars['Validated_Group']->value['group_options'],'selected'=>$_smarty_tpl->tpl_vars['Validated_Group']->value['group_selected']),$_smarty_tpl);?>

                  </div>
                </li>
              </ul>
              </li>
              <li>
                <label class="cluetip" title="<?php echo l10n('UAM_confirmstatTitle');?>
|<?php echo l10n('UAM_confirmstatTitle_d');?>
">
                  <?php echo l10n('UAM_Confirm_Status');?>

                </label>
              </li>
              <li style="list-style-type: none;">
              <ul>
                <li>
                  <label>
                    <?php echo l10n('UAM_No_Confirm_Status');?>

                  </label>
                  <div class="uam_leftmargin">
                    <?php echo smarty_function_html_options(array('name'=>"UAM_No_Confirm_Status",'options'=>$_smarty_tpl->tpl_vars['No_Confirm_Status']->value['Status_options'],'selected'=>$_smarty_tpl->tpl_vars['No_Confirm_Status']->value['Status_selected']),$_smarty_tpl);?>

                  </div>
                </li>
                <li>
                  <label>
                    <?php echo l10n('UAM_Validated_Status');?>

                  </label>
                  <div class="uam_leftmargin">
                    <?php echo smarty_function_html_options(array('name'=>"UAM_Validated_Status",'options'=>$_smarty_tpl->tpl_vars['Confirm_Status']->value['Status_options'],'selected'=>$_smarty_tpl->tpl_vars['Confirm_Status']->value['Status_selected']),$_smarty_tpl);?>

                  </div>
                </li>
              </ul>
              </li>
              <li>
                <label class="cluetip" title="<?php echo l10n('UAM_confirmlevelTitle');?>
|<?php echo l10n('UAM_confirmlevelTitle_d');?>
">
                  <?php echo l10n('UAM_Confirm_Level');?>

                </label>
              </li>
              <li style="list-style-type: none;">
              <ul>
                <li>
                  <label>
                    <?php echo l10n('UAM_No_Valid_Level');?>

                  </label>
                  <div class="uam_leftmargin">
                    <?php echo smarty_function_html_options(array('name'=>"UAM_No_Valid_Level",'options'=>$_smarty_tpl->tpl_vars['No_Valid_Level']->value['Level_options'],'selected'=>$_smarty_tpl->tpl_vars['No_Valid_Level']->value['Level_selected']),$_smarty_tpl);?>

                  </div>
                </li>
                <li>
                  <label>
                    <?php echo l10n('UAM_Valid_Level');?>

                  </label>
                  <div class="uam_leftmargin">
                    <?php echo smarty_function_html_options(array('name'=>"UAM_Valid_Level",'options'=>$_smarty_tpl->tpl_vars['Valid_Level']->value['Level_options'],'selected'=>$_smarty_tpl->tpl_vars['Valid_Level']->value['Level_selected']),$_smarty_tpl);?>

                  </div>
                </li>
              </ul>
              </li>
            </ul>
            </fieldset>
          <br/><hr/><br/>
            <ul>
              <li>
                <label class="cluetip" title="<?php echo l10n('UAM_ValidationLimit_Info');?>
|<?php echo l10n('UAM_validationlimitTitle_d');?>
">
                  <?php echo l10n('UAM_ValidationLimit_Info');?>

                </label>
                <label for="UAM_ConfirmMail_TimeOut_false" >
                  <input id="UAM_ConfirmMail_TimeOut_false" type="radio" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_TIMEOUT_FALSE']->value;?>
 name="UAM_ConfirmMail_TimeOut"/>
                  <?php echo l10n('UAM_Disable');?>

                </label>
                <label for="UAM_ConfirmMail_TimeOut_true" >
                  <input id="UAM_ConfirmMail_TimeOut_true" type="radio" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_TIMEOUT_TRUE']->value;?>
 name="UAM_ConfirmMail_TimeOut"/>
                  <?php echo l10n('UAM_ConfirmMail_TimeOut_true');?>

                </label>
                  <input type="text" name="UAM_ConfirmMail_Delay" value="<?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_DELAY']->value;?>
" size="5" style="text-align: center;"/>
              </li>
              <li>
                <label class="cluetip" title="<?php echo l10n('UAM_ConfirmMail_Remail');?>
|<?php echo l10n('UAM_remailTitle_d');?>
">
                  <?php echo l10n('UAM_ConfirmMail_Remail');?>

                </label>
                <label for="UAM_ConfirmMail_Remail_false" ><input id="UAM_ConfirmMail_Remail_false" type="radio" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_REMAIL_FALSE']->value;?>
 name="UAM_ConfirmMail_Remail"/>
                  <?php echo l10n('UAM_Disable');?>

                </label>
                <label for="UAM_ConfirmMail_Remail_true" ><input id="UAM_ConfirmMail_Remail_true" type="radio" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_REMAIL_TRUE']->value;?>
 name="UAM_ConfirmMail_Remail"/>
                  <?php echo l10n('UAM_Enable');?>

                </label>
              </li>
            <li style="list-style-type: none;">
              <a id="show_UAM_ConfirmMail" ><?php echo l10n('UAM_Customize_messagesandmails');?>
</a>
              <a id="hide_UAM_ConfirmMail" style="display: none"><?php echo l10n('hide details');?>
</a>
            </li>
            <fieldset id="UAM_ConfirmMail" style="display: none">
              <ul>
                <li>
                  <label class="cluetip" title="<?php echo l10n('UAM_ConfirmMail_ReMail_Subject');?>
|<?php echo l10n('UAM_ConfirmMail_ReMail_Subject_d');?>
">
                    <?php echo l10n('UAM_ConfirmMail_ReMail_Subject');?>

                  </label>
                  &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_ConfirmMail_Remail_Subject" id="UAM_ConfirmMail_Remail_Subject" rows="5" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_REMAIL_SUBJECT']->value;?>
</textarea>
                </li>
                <ul>
                  <li>
                    <label class="cluetip" title="<?php echo l10n('UAM_remailtxt1Title');?>
|<?php echo l10n('UAM_remailtxt1Title_d');?>
">
                      <?php echo l10n('UAM_ConfirmMail_ReMail_Txt1');?>

                    </label>
<?php if ($_smarty_tpl->tpl_vars['UAM_ERROR_REPORTS3']->value) {?>
                    <textarea class="uam_textfields" name="UAM_ConfirmMail_ReMail_Txt1" id="UAM_ConfirmMail_ReMail_Txt1" rows="10" style="color: red" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_REMAIL_TXT1']->value;?>
</textarea>
<?php } else { ?>
                    <textarea class="uam_textfields" name="UAM_ConfirmMail_ReMail_Txt1" id="UAM_ConfirmMail_ReMail_Txt1" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_REMAIL_TXT1']->value;?>
</textarea>
<?php }?>
                  </li>
<!--
                
                  <div style="text-align:right;">
                    <a href="#" onClick="toogleEditor('UAM_ConfirmMail_ReMail_Txt1'); return false;">FCK Editor On/Off</a>
                  </div>
                
-->
                  <li>
                    <label class="cluetip" title="<?php echo l10n('UAM_remailtxt2Title');?>
|<?php echo l10n('UAM_remailtxt2Title_d');?>
">
                      <?php echo l10n('UAM_ConfirmMail_ReMail_Txt2');?>

                    </label>
<?php if ($_smarty_tpl->tpl_vars['UAM_ERROR_REPORTS4']->value) {?>
                    <textarea class="uam_textfields" name="UAM_ConfirmMail_ReMail_Txt2" id="UAM_ConfirmMail_ReMail_Txt2" rows="10" style="color: red" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_REMAIL_TXT2']->value;?>
</textarea>
<?php } else { ?>
                    <textarea class="uam_textfields" name="UAM_ConfirmMail_ReMail_Txt2" id="UAM_ConfirmMail_ReMail_Txt2" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_REMAIL_TXT2']->value;?>
</textarea>
<?php }?>
                  <br/>
                  </li>
<!--
                
                  <div style="text-align:right;">
                    <a href="#" onClick="toogleEditor('UAM_ConfirmMail_ReMail_Txt2'); return false;">FCK Editor On/Off</a>
                  </div>
                
-->

                </ul>
              </ul>
            </fieldset>
            </ul>
          <fieldset id="UAM_ConfirmMail_field" <?php if ($_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_TIMEOUT_FALSE']->value && $_smarty_tpl->tpl_vars['UAM_CONFIRMMAIL_REMAIL_FALSE']->value) {?>style="display:none"<?php }?>>
          <ul>
            <li>
              <label class="cluetip" title="<?php echo l10n('UAM_USRAuto');?>
|<?php echo l10n('UAM_USRAutoTitle_d');?>
">
                <?php echo l10n('UAM_USRAuto');?>

              </label>
            
              <label for="UAM_USRAuto_false"><input id="UAM_USRAuto_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_USRAUTO_FALSE']->value;?>
 name="UAM_USRAuto" type="radio"/>
                <?php echo l10n('UAM_Disable');?>

              </label>
              <label for="UAM_USRAuto_true"><input id="UAM_USRAuto_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_USRAUTO_TRUE']->value;?>
 name="UAM_USRAuto" type="radio"/>
                <?php echo l10n('UAM_Enable');?>

              </label>
            <ul>
              <li>
                <label class="cluetip" title="<?php echo l10n('UAM_USRAutoDel');?>
|<?php echo l10n('UAM_USRAutoDelTitle_d');?>
">
                  <?php echo l10n('UAM_USRAutoDel');?>

                </label>
                <textarea class="uam_textfields" name="UAM_USRAutoDelText" id="UAM_USRAutoDelText" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_USRAUTODEL_TEXT']->value;?>
</textarea>
<?php if (defined('FCK_PATH')) {?>
                <div style="text-align:right;">
                  <a href="#" onClick="toogleEditor('UAM_USRAutoDelText'); return false;">FCK Editor On/Off</a>
                </div>
<?php }?>
              </li>
              <li>
                <label class="cluetip" title="<?php echo l10n('UAM_USRAutoMail');?>
|<?php echo l10n('UAM_USRAutoMailTitle_d');?>
">
                  <?php echo l10n('UAM_USRAutoMail');?>

                </label>
                <label for="UAM_USRAutoMail_false"><input id="UAM_USRAutoMail_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_USRAUTOMAIL_FALSE']->value;?>
 name="UAM_USRAutoMail" type="radio"/>
                  <?php echo l10n('UAM_Disable');?>

                </label>
                <label for="UAM_USRAutoMail_true"><input id="UAM_USRAutoMail_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_USRAUTOMAIL_TRUE']->value;?>
 name="UAM_USRAutoMail" type="radio"/>
                  <?php echo l10n('UAM_Enable');?>

                </label>
              </li>
            </ul>
            </li>
          </ul>
          </fieldset>
          </div>
    </div>
  </div>

  <div id="instructionConfig3" class="instructionBlock" >

    <div id="config3_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('config3_header', 'Config3')">
      <span class="cluetip" title="<?php echo l10n('UAM_Title3');?>
|<?php echo l10n('UAM_GT_MainTitle_d');?>
"><?php echo l10n('UAM_Title3');?>
</span>
    </div>
  
    <div id="Config3" class="instructionBlockContent" style="display:none">
        <ul>
          <li>
            <label class="cluetip" title="<?php echo l10n('UAM_GhostTracker');?>
|<?php echo l10n('UAM_ghosttrackerTitle_d');?>
">
              <?php echo l10n('UAM_GhostTracker');?>

            </label>
            <label for="UAM_GhostUser_Tracker_false">
              <input id="UAM_GhostUser_Tracker_false" type="radio" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_GHOSTRACKER_FALSE']->value;?>
 name="UAM_GhostUser_Tracker"/>
              <?php echo l10n('UAM_Disable');?>

            </label>
            <label for="UAM_GhostUser_Tracker_true">
              <input id="UAM_GhostUser_Tracker_true" type="radio" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_GHOSTRACKER_TRUE']->value;?>
 name="UAM_GhostUser_Tracker"/>
              <?php echo l10n('UAM_GhostTracker_true');?>

            </label>
            <input type="text" name="UAM_GhostTracker_DayLimit" value="<?php echo $_smarty_tpl->tpl_vars['UAM_GHOSTRACKER_DAYLIMIT']->value;?>
" size="5" style="text-align: center;"/>
          
          </li>
        </ul>
        <div id="UAM_GHOSTRACKER_OPT" <?php if ($_smarty_tpl->tpl_vars['UAM_GHOSTRACKER_FALSE']->value) {?>style="display: none"<?php }?>>
          <a id="show_UAM_GTReminder" ><?php echo l10n('UAM_Customize_messagesandmails');?>
</a>
          <a id="hide_UAM_GTReminder" style="display: none"><?php echo l10n('hide details');?>
</a>
          <fieldset id="UAM_GTReminder" style="display: none">
          <ul>
            <li>
              <label class="cluetip" title="<?php echo l10n('UAM_GTReminder_Subject');?>
|<?php echo l10n('UAM_GTReminder_Subject_d');?>
">
                <?php echo l10n('UAM_GTReminder_Subject');?>

              </label>
            
              &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_GTReminder_Subject" id="UAM_GTReminder_Subject" rows="5" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_GTREMINDER_SUBJECT']->value;?>
</textarea>
            
            </li>
            <li>
              <label class="cluetip" title="<?php echo l10n('UAM_GhostTracker_ReminderText');?>
|<?php echo l10n('UAM_gttextTitle_d');?>
">
                <?php echo l10n('UAM_GhostTracker_ReminderText');?>

              </label>
            
              <textarea class="uam_textfields" name="UAM_GhostTracker_ReminderText" id="UAM_GhostTracker_ReminderText" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_GHOSTRACKER_REMINDERTEXT']->value;?>
</textarea>
            
            </li>
  <!--
            
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_GhostTracker_ReminderText'); return false;">FCK Editor On/Off</a>
              </div>
            
  -->
  
          </ul>
          </fieldset>
          <br/><hr/><br/>
          <ul>
            <li>
              <label class="cluetip" title="<?php echo l10n('UAM_GTAuto');?>
|<?php echo l10n('UAM_GTAutoTitle_d');?>
">
                <?php echo l10n('UAM_GTAuto');?>

              </label>

              <label for="UAM_GTAuto_false"><input id="UAM_GTAuto_false" type="radio" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_GTAUTO_FALSE']->value;?>
 name="UAM_GTAuto"/>
                <?php echo l10n('UAM_Disable');?>

              </label>

              <label for="UAM_GTAuto_true"><input id="UAM_GTAuto_true" type="radio" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_GTAUTO_TRUE']->value;?>
 name="UAM_GTAuto"/>
                <?php echo l10n('UAM_Enable');?>

              </label>

              <ul id="UAM_GTAUTO" <?php if ($_smarty_tpl->tpl_vars['UAM_GTAUTO_FALSE']->value) {?>style="display: none"<?php }?>>
                <li>
                  <label class="cluetip" title="<?php echo l10n('UAM_GTAutoDelTitle');?>
|<?php echo l10n('UAM_GTAutoDelTitle_d');?>
">
                    <?php echo l10n('UAM_GTAutoDel');?>

                  </label>

                    <textarea class="uam_textfields" name="UAM_GTAutoDelText" id="UAM_GTAutoDelText" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_GTAUTODEL_TEXT']->value;?>
</textarea>

<?php if (defined('FCK_PATH')) {?>
                  <div style="text-align:right;">
                    <a href="#" onClick="toogleEditor('UAM_GTAutoDelText'); return false;">FCK Editor On/Off</a>
                  </div>
<?php }?>
                </li>

                <li>
                  <label class="cluetip" title="<?php echo l10n('UAM_GTAutoGp');?>
|<?php echo l10n('UAM_GTAutoGpTitle_d');?>
">
                    <?php echo l10n('UAM_GTAutoGp');?>

                  </label>

                  <ul>
                    <li>
                      <label>
                        <?php echo l10n('UAM_Expired_Group');?>

                      </label>
                        <div class="uam_leftmargin">
                          <?php echo smarty_function_html_options(array('name'=>"UAM_Downgrade_Group",'options'=>$_smarty_tpl->tpl_vars['Downgrade_Group']->value['group_options'],'selected'=>$_smarty_tpl->tpl_vars['Downgrade_Group']->value['group_selected']),$_smarty_tpl);?>

                        </div>
                    </li>
  
                    <li>
                      <label>
                        <?php echo l10n('UAM_Expired_Status');?>

                      </label>
                      <div class="uam_leftmargin">
                        <?php echo smarty_function_html_options(array('name'=>"UAM_Downgrade_Status",'options'=>$_smarty_tpl->tpl_vars['Downgrade_Status']->value['Status_options'],'selected'=>$_smarty_tpl->tpl_vars['Downgrade_Status']->value['Status_selected']),$_smarty_tpl);?>

                      </div>
                    </li>

                    <li>
                      <label>
                        <?php echo l10n('UAM_Expired_Level');?>

                      </label>
                      <div class="uam_leftmargin">
                        <?php echo smarty_function_html_options(array('name'=>"UAM_Downgrade_Level",'options'=>$_smarty_tpl->tpl_vars['Downgrade_Level']->value['Level_options'],'selected'=>$_smarty_tpl->tpl_vars['Downgrade_Level']->value['Level_selected']),$_smarty_tpl);?>

                      </div>
                    </li>
                  </ul>

                  <ul>
                    <li>
                      <label class="cluetip" title="<?php echo l10n('UAM_GTAutoMail');?>
|<?php echo l10n('UAM_GTAutoMailTitle_d');?>
">
                        <?php echo l10n('UAM_GTAutoMail');?>

                      </label>
                    
                      <label for="UAM_GTAutoMail_false"><input id="UAM_GTAutoMail_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_GTAUTOMAIL_FALSE']->value;?>
 name="UAM_GTAutoMail" type="radio"/>
                        <?php echo l10n('UAM_Disable');?>

                      </label>
                      <label for="UAM_GTAutoMail_true"><input id="UAM_GTAutoMail_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_GTAUTOMAIL_TRUE']->value;?>
 name="UAM_GTAutoMail" type="radio"/>
                        <?php echo l10n('UAM_Enable');?>

                      </label>

                      <li>
                        <label class="cluetip" title="<?php echo l10n('UAM_GTAutomail_Subject');?>
|<?php echo l10n('UAM_GTAutomail_Subject_d');?>
">
                          <?php echo l10n('UAM_GTAutomail_Subject');?>

                        </label>

                        &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_GTAutoMail_Subject" id="UAM_GTAutoMail_Subject" rows="5" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_GTAUTOMAIL_SUBJECT']->value;?>
</textarea>
                      </li>
                      <li style="list-style-type: none;">
                        <ul>
                          <li>
                            <label class="cluetip" title="<?php echo l10n('UAM_GTAutomail_Text');?>
|<?php echo l10n('UAM_GTAutomail_Text_d');?>
">
                              <?php echo l10n('UAM_GTAutomail_Text');?>

                            </label>

                            <textarea class="uam_textfields" name="UAM_GTAutoMailText" id="UAM_GTAutoMailText" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_GTAUTOMAILTEXT']->value;?>
</textarea>
                        </li>
                      </ul>
                      </li>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
    </div>
  </div>

  <div id="instructionConfig5" class="instructionBlock" >

    <div id="config5_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('config5_header', 'Config5')">
      <span class="cluetip" title="<?php echo l10n('UAM_Title5');?>
|<?php echo l10n('UAM_miscTitle_d');?>
"><?php echo l10n('UAM_Title5');?>
</span>
    </div>
  
    <div id="Config5" class="instructionBlockContent" style="display:none">
      <p class="new_in_version"><?php echo l10n('UAM_NewFeature');?>
</p>
      <div class="uam_new">
        <ul>
          <li>
            <label class="cluetip" title="<?php echo l10n('UAM_Admins_Copy');?>
|<?php echo l10n('UAM_Admins_Copy_d');?>
">
              <?php echo l10n('UAM_Admins_Copy');?>

            </label>
          
            <label for="UAM_Admins_Copy_false"><input id="UAM_Admins_Copy_false" type="radio" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_ADMINS_COPY_FALSE']->value;?>
 name="UAM_Emails_Copy2Admins"/>
              <?php echo l10n('UAM_Disable');?>

            </label>
            <label for="UAM_Admins_Copy_true"><input id="UAM_Admins_Copy_true" type="radio" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_ADMINS_COPY_TRUE']->value;?>
 name="UAM_Emails_Copy2Admins"/>
              <?php echo l10n('UAM_Enable');?>

            </label>
          </li>
        </ul>
      </div>
        <ul>
          <li>
            <label class="cluetip" title="<?php echo l10n('UAM_Mail_Info');?>
|<?php echo l10n('UAM_infomailTitle_d');?>
">
              <?php echo l10n('UAM_Mail_Info');?>

            </label>
          
            <label for="UAM_Mail_Info_false"><input id="UAM_Mail_Info_false" type="radio" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_MAIL_INFO_FALSE']->value;?>
 name="UAM_Mail_Info"/>
              <?php echo l10n('UAM_Disable');?>

            </label>
            <label for="UAM_Mail_Info_true"><input id="UAM_Mail_Info_true" type="radio" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_MAIL_INFO_TRUE']->value;?>
 name="UAM_Mail_Info"/>
              <?php echo l10n('UAM_Enable');?>

            </label>
          </li>
        </ul>
        <fieldset id="UAM_MAIL_INFO" <?php if ($_smarty_tpl->tpl_vars['UAM_MAIL_INFO_FALSE']->value) {?> style="display:none"<?php }?>>
          <ul>
            <li>
              <label class="cluetip" title="<?php echo l10n('UAM_HidePassw');?>
|<?php echo l10n('UAM_HidePasswTitle_d');?>
">
                <?php echo l10n('UAM_HidePassw');?>

              </label>
              <label for="UAM_HidePassw_false"><input id="UAM_HidePassw_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_HIDEPASSW_FALSE']->value;?>
 name="UAM_HidePassw" type="radio"/>
                <?php echo l10n('UAM_Disable');?>

              </label>
              <label for="UAM_HidePassw_true"><input id="UAM_HidePassw_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_HIDEPASSW_TRUE']->value;?>
 name="UAM_HidePassw" type="radio"/>
                <?php echo l10n('UAM_Enable');?>

              </label>
            </li>
            <li>
              <label class="cluetip" title="<?php echo l10n('UAM_MailInfo_Subject');?>
|<?php echo l10n('UAM_MailInfo_Subject_d');?>
">
                <?php echo l10n('UAM_MailInfo_Subject');?>

              </label>
            
              &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_InfoMail_Subject" id="UAM_InfoMail_Subject" rows="5" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_INFOMAIL_SUBJECT']->value;?>
</textarea>
            </li>

            <li style="list-style-type: none;">
              <ul>
                <li>
                  <label class="cluetip" title="<?php echo l10n('UAM_MailInfo_Text');?>
|<?php echo l10n('UAM_infotxtTitle_d');?>
">
                    <?php echo l10n('UAM_MailInfo_Text');?>

                  </label>

                  <textarea class="uam_textfields" name="UAM_MailInfo_Text" id="UAM_MailInfo_Text" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_MAILINFO_TEXT']->value;?>
</textarea>
                </li>
              </ul>
            </li>
<!--
            
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_MailInfo_Text'); return false;">FCK Editor On/Off</a>
              </div>
            
-->
          </ul>
        </fieldset>

        <ul>
          <li>
            <label class="cluetip" title="<?php echo l10n('UAM_AddURL2Mail');?>
|<?php echo l10n('UAM_AddURL2Mail_d');?>
">
              <?php echo l10n('UAM_AddURL2Mail');?>

              </label>
                <label for="UAM_AddURL2Mail_false"><input id="UAM_AddURL2Mail_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_ADDURL2MAIL_FALSE']->value;?>
 name="UAM_AddURL2Mail" type="radio"/>
                  <?php echo l10n('UAM_Disable');?>

                </label>
                <label for="UAM_AddURL2Mail_true"><input id="UAM_AddURL2Mail_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_ADDURL2MAIL_TRUE']->value;?>
 name="UAM_AddURL2Mail" type="radio"/>
                  <?php echo l10n('UAM_Enable');?>

                </label>
          </li>
          <li>
            <label class="cluetip" title="<?php echo l10n('UAM_Tracking registered users');?>
|<?php echo l10n('UAM_Tracking registered users_d');?>
">
              <?php echo l10n('UAM_Tracking registered users');?>

            </label>

            <label for="UAM_Add_LastVisit_Column_false"><input id="UAM_Add_LastVisit_Column_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_ADDLASTVISIT_FALSE']->value;?>
 name="UAM_Add_LastVisit_Column" type="radio"/>
              <?php echo l10n('UAM_Disable');?>

            </label>
            <label for="UAM_Add_LastVisit_Column_true"><input id="UAM_Add_LastVisit_Column_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_ADDLASTVISIT_TRUE']->value;?>
 name="UAM_Add_LastVisit_Column" type="radio"/>
              <?php echo l10n('UAM_Enable');?>

          </label>
          </li>
          <li>
            <label class="cluetip" title="<?php echo l10n('UAM_RedirToProfile');?>
|<?php echo l10n('UAM_RedirTitle_d');?>
">
              <?php echo l10n('UAM_RedirToProfile');?>

            </label>

            <label for="UAM_RedirToProfile_false"><input id="UAM_RedirToProfile_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_REDIRTOPROFILE_FALSE']->value;?>
 name="UAM_RedirToProfile" type="radio"/>
              <?php echo l10n('UAM_Disable');?>

            </label>
            <label for="UAM_RedirToProfile_true"><input id="UAM_RedirToProfile_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_REDIRTOPROFILE_TRUE']->value;?>
 name="UAM_RedirToProfile" type="radio"/>
              <?php echo l10n('UAM_Enable');?>

            </label>
          </li>
        </ul>
        <ul>
          <li>
            <label class="cluetip" title="<?php echo l10n('UAM_CustomPasswRetr');?>
|<?php echo l10n('UAM_CustomPasswRetrTitle_d');?>
">
              <?php echo l10n('UAM_CustomPasswRetr');?>

            </label>

            <label for="UAM_CustomPasswRetr_false"><input id="UAM_CustomPasswRetr_false" value="false" <?php echo $_smarty_tpl->tpl_vars['UAM_CUSTOMPASSWRETR_FALSE']->value;?>
 name="UAM_CustomPasswRetr" type="radio"/>
              <?php echo l10n('UAM_Disable');?>

            </label>
            <label for="UAM_CustomPasswRetr_true"><input id="UAM_CustomPasswRetr_true" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_CUSTOMPASSWRETR_TRUE']->value;?>
 name="UAM_CustomPasswRetr" type="radio"/>
              <?php echo l10n('UAM_Enable');?>

            </label>
            <fieldset id="UAM_CustomPasswRetr" <?php if ($_smarty_tpl->tpl_vars['UAM_CUSTOMPASSWRETR_FALSE']->value) {?>style="display:none"<?php }?>>
              <textarea class="uam_textfields" name="UAM_CustomPasswRetr_Text" id="UAM_CustomPasswRetr_Text" rows="10" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['UAM_CUSTOMPASSWRETR_TEXT']->value;?>
</textarea>
            </fieldset>
          </li>
        </ul>
    </div>
  </div>

  <p>
    <input class="submit" type="submit" value="<?php echo l10n('UAM_submit');?>
" name="submit" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
 />&nbsp;<input class="submit" type="submit" value="<?php echo l10n('UAM_audit');?>
" name="audit"/>
  </p>
</form>


<div id="instructionBkp" class="instructionBlock" >
  <div id="Backup_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('Backup_header', 'Backup')">
    <span class="cluetip" title="<?php echo l10n('UAM_DumpTxt');?>
|<?php echo l10n('UAM_DumpTitle_d');?>
"><?php echo l10n('UAM_DumpTxt');?>
</span>
  </div>

  <div id="Backup" class="instructionBlockContent" style="display:none">
    <fieldset>
      <form method="post" class="general">
        <p>
          <?php echo l10n('UAM_Dump_Download');?>
&nbsp;
          <input type="checkbox" name="dump_download" value="true" <?php echo $_smarty_tpl->tpl_vars['UAM_DUMP_DOWNLOAD']->value;?>
/>

          <input class="submit" type="submit" value="<?php echo l10n('UAM_Save');?>
" name="save" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
/>
        </p>
      </form>
    </fieldset>
    <fieldset>
      <form method="post" class="general">
        <p>
          <?php echo l10n('UAM_Restore');?>

          <input class="submit" type="submit" value="<?php echo l10n('UAM_Restore_File');?>
" name="restore" <?php echo $_smarty_tpl->tpl_vars['TAG_INPUT_ENABLED']->value;?>
/>
        </p>
      </form>
    </fieldset>
  </div>
</div>


<div id="instructionTips" class="instructionBlock" >
  <div id="Tips_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('Tips_header', 'Tips')">
    <span class="cluetip" title="<?php echo l10n('UAM_Title4');?>
|<?php echo l10n('UAM_tipsTitle_d');?>
"><?php echo l10n('UAM_Title4');?>
</span>
  </div>

  <div id="Tips" class="instructionBlockContent" style="display:none">
    <fieldset>
      <div id="Tips1_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('Tips1_header', 'Tips1')">
        <span><?php echo l10n('UAM_Tips1');?>
</span>
      </div>
      <div id="Tips1" class="instructionBlockContent" style="display:none">
        <fieldset>
          <?php echo l10n('UAM_Tips1_txt');?>

        </fieldset>
      </div>
    </fieldset>

    <fieldset>
      <div id="Tips2_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('Tips2_header', 'Tips2')">
        <span><?php echo l10n('UAM_Tips2');?>
</span>
      </div>
      <div id="Tips2" class="instructionBlockContent" style="display:none">
        <fieldset>
          <?php echo l10n('UAM_Tips2_txt');?>

        </fieldset>
      </div>
    </fieldset>
  </div>
</div>


<fieldset>
  <?php echo l10n('UAM_Support_txt');?>

</fieldset>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  var n1=document.getElementById("nb_para").value;
  var n2=document.getElementById("nb_para2").value;
   uam_blockToggleDisplay(n1,n2);
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
