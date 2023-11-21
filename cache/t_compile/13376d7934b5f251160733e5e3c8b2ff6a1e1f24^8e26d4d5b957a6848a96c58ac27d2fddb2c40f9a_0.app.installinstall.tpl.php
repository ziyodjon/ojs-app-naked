<?php
/* Smarty version 4.3.1, created on 2023-11-21 03:56:32
  from 'app:installinstall.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655c2a70647799_10867501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e26d4d5b957a6848a96c58ac27d2fddb2c40f9a' => 
    array (
      0 => 'app:installinstall.tpl',
      1 => 1693254618,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotificationContent.tpl' => 2,
  ),
),false)) {
function content_655c2a70647799_10867501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2138808536655c2a705c2865_26938204', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_2138808536655c2a705c2865_26938204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_2138808536655c2a705c2865_26938204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.appInstallation"),$_smarty_tpl ) );?>

	</h1>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "upgradeUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"install",'op'=>"upgrade"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<notification>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.updatingInstructions",'upgradeUrl'=>$_smarty_tpl->tpl_vars['upgradeUrl']->value),$_smarty_tpl ) );?>

	</notification>
	<br />

	<div class="app__contentPanel">
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"common.language",'for'=>"installLanguage",'style'=>"position: absolute;"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"common.language",'for'=>"installLanguage",'style'=>"position: absolute;"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"installLanguage",'id'=>"installLanguage",'from'=>$_smarty_tpl->tpl_vars['languageOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['locale']->value,'translate'=>false,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'subLabelTranslate'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"common.language",'for'=>"installLanguage",'style'=>"position: absolute;"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "writable_config", null);
if (is_writeable('config.inc.php')) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.checkYes"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.checkNo"),$_smarty_tpl ) );
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "writable_cache", null);
if (is_writeable('cache')) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.checkYes"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.checkNo"),$_smarty_tpl ) );
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "writable_public", null);
if (is_writeable('public')) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.checkYes"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.checkNo"),$_smarty_tpl ) );
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "writable_db_cache", null);
if (is_writeable('cache/_db')) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.checkYes"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.checkNo"),$_smarty_tpl ) );
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "writable_templates_cache", null);
if (is_writeable('cache/t_cache')) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.checkYes"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.checkNo"),$_smarty_tpl ) );
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "writable_templates_compile", null);
if (is_writeable('cache/t_compile')) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.checkYes"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.checkNo"),$_smarty_tpl ) );
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

		<?php if (!$_smarty_tpl->tpl_vars['phpIsSupportedVersion']->value) {?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "wrongPhpText", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.installationWrongPhp"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php }?>

		<?php echo '<script'; ?>
>
			$(function() {
				// Attach the form handler.
				$('#installForm').pkpHandler('$.pkp.controllers.form.FormHandler');
				$('#installLanguage').change(function () {
					var params = new URLSearchParams(location.search);
					params.set('setLocale', this.value);
					location = location.href.replace(/(\?.*)?$/, '?' + params);
				});
			});
		<?php echo '</script'; ?>
>
		<form class="pkp_form" method="post" id="installForm" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"install"),$_smarty_tpl ) );?>
">
			<input type="hidden" name="installing" value="0" />

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.installationInstructions",'version'=>$_smarty_tpl->tpl_vars['version']->value->getVersionString(false),'upgradeUrl'=>$_smarty_tpl->tpl_vars['upgradeUrl']->value,'baseUrl'=>$_smarty_tpl->tpl_vars['baseUrl']->value,'writable_config'=>$_smarty_tpl->tpl_vars['writable_config']->value,'writable_db_cache'=>$_smarty_tpl->tpl_vars['writable_db_cache']->value,'writable_cache'=>$_smarty_tpl->tpl_vars['writable_cache']->value,'writable_public'=>$_smarty_tpl->tpl_vars['writable_public']->value,'writable_templates_cache'=>$_smarty_tpl->tpl_vars['writable_templates_cache']->value,'writable_templates_compile'=>$_smarty_tpl->tpl_vars['writable_templates_compile']->value,'phpRequiredVersion'=>$_smarty_tpl->tpl_vars['phpRequiredVersion']->value,'wrongPhpText'=>$_smarty_tpl->tpl_vars['wrongPhpText']->value,'phpVersion'=>$_smarty_tpl->tpl_vars['phpVersion']->value),$_smarty_tpl ) );?>


			<?php if ($_smarty_tpl->tpl_vars['isInstallError']->value) {?>
								<div class="pkp_notification">
					<?php if ($_smarty_tpl->tpl_vars['dbErrorMsg']->value) {?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorMsg", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.error.databaseError",'error'=>$_smarty_tpl->tpl_vars['dbErrorMsg']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php } elseif ($_smarty_tpl->tpl_vars['translateErrorMsg']->value) {?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorMsg", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['errorMsg']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php }?>
					<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotificationContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>'installer','notificationStyleClass'=>'notifyError','notificationTitle'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "installer.installErrorsOccurred" )),'notificationContents'=>$_smarty_tpl->tpl_vars['errorMsg']->value), 0, false);
?>
				</div>
			<?php }?>

			<!-- XSL check -->
			<?php if ($_smarty_tpl->tpl_vars['xslRequired']->value && !$_smarty_tpl->tpl_vars['xslEnabled']->value) {?>
								<div class="pkp_notification">
					<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotificationContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>'installerXsl','notificationStyleClass'=>'notifyWarning','notificationTitle'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "common.warning" )),'notificationContents'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "installer.configureXSLMessage" ))), 0, true);
?>
				</div>
			<?php }?>

			<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"preInstallationFormArea",'title'=>"installer.preInstallationInstructionsTitle"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"preInstallationFormArea",'title'=>"installer.preInstallationInstructionsTitle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.preInstallationInstructions",'upgradeUrl'=>$_smarty_tpl->tpl_vars['upgradeUrl']->value,'baseUrl'=>$_smarty_tpl->tpl_vars['baseUrl']->value,'writable_config'=>$_smarty_tpl->tpl_vars['writable_config']->value,'writable_db_cache'=>$_smarty_tpl->tpl_vars['writable_db_cache']->value,'writable_cache'=>$_smarty_tpl->tpl_vars['writable_cache']->value,'writable_public'=>$_smarty_tpl->tpl_vars['writable_public']->value,'writable_templates_cache'=>$_smarty_tpl->tpl_vars['writable_templates_cache']->value,'writable_templates_compile'=>$_smarty_tpl->tpl_vars['writable_templates_compile']->value,'phpRequiredVersion'=>$_smarty_tpl->tpl_vars['phpRequiredVersion']->value,'wrongPhpText'=>$_smarty_tpl->tpl_vars['wrongPhpText']->value,'phpVersion'=>$_smarty_tpl->tpl_vars['phpVersion']->value),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"preInstallationFormArea",'title'=>"installer.preInstallationInstructionsTitle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

			<!-- Administrator username, password, and email -->
			<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"administratorAccountFormArea",'title'=>"installer.administratorAccount"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormArea(array('id'=>"administratorAccountFormArea",'title'=>"installer.administratorAccount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.administratorAccountInstructions"),$_smarty_tpl ) );?>
</p>
				<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"user.username"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"user.username"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"adminUsername",'value'=>$_smarty_tpl->tpl_vars['adminUsername']->value,'maxlength'=>"32",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"user.username"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"user.password"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('label'=>"user.password"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'password'=>true,'id'=>"adminPassword",'value'=>$_smarty_tpl->tpl_vars['adminPassword']->value,'maxlength'=>"32",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('label'=>"user.password"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"user.repeatPassword"));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('label'=>"user.repeatPassword"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'password'=>true,'id'=>"adminPassword2",'value'=>$_smarty_tpl->tpl_vars['adminPassword2']->value,'maxlength'=>"32",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('label'=>"user.repeatPassword"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"user.email"));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormSection(array('label'=>"user.email"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"adminEmail",'value'=>$_smarty_tpl->tpl_vars['adminEmail']->value,'maxlength'=>"90",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormSection(array('label'=>"user.email"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormArea(array('id'=>"administratorAccountFormArea",'title'=>"installer.administratorAccount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

			<!-- Locale configuration -->
			<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"localeSettingsFormArea",'title'=>"installer.localeSettings"));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormArea(array('id'=>"localeSettingsFormArea",'title'=>"installer.localeSettings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.localeSettingsInstructions",'supportsMBString'=>$_smarty_tpl->tpl_vars['supportsMBString']->value),$_smarty_tpl ) );?>
</p>
				<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"locale.primary",'description'=>"installer.localeInstructions",'for'=>"locale"));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormSection(array('label'=>"locale.primary",'description'=>"installer.localeInstructions",'for'=>"locale"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"locale",'id'=>"localeOptions",'from'=>$_smarty_tpl->tpl_vars['localeOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['locale']->value,'translate'=>false,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'subLabelTranslate'=>true),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormSection(array('label'=>"locale.primary",'description'=>"installer.localeInstructions",'for'=>"locale"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>"true",'label'=>"installer.additionalLocales",'description'=>"installer.additionalLocalesInstructions"));
$_block_repeat=true;
echo $_block_plugin10->smartyFBVFormSection(array('list'=>"true",'label'=>"installer.additionalLocales",'description'=>"installer.additionalLocalesInstructions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['localeOptions']->value, 'localeName', false, 'localeKey');
$_smarty_tpl->tpl_vars['localeName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['localeKey']->value => $_smarty_tpl->tpl_vars['localeName']->value) {
$_smarty_tpl->tpl_vars['localeName']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('localeKeyEscaped', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localeKey']->value )));?>
						<?php if (!$_smarty_tpl->tpl_vars['localesComplete']->value[$_smarty_tpl->tpl_vars['localeKey']->value]) {?>
							<?php $_smarty_tpl->_assignInScope('localeName', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['localeName']->value,"*" )));?>
						<?php }?>
						<?php if (in_array($_smarty_tpl->tpl_vars['localeKey']->value,$_smarty_tpl->tpl_vars['additionalLocales']->value)) {?>
							<?php $_smarty_tpl->_assignInScope('localeSelected', true);?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('localeSelected', false);?>
						<?php }?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'name'=>"additionalLocales[]",'id'=>"additionalLocales-".((string)$_smarty_tpl->tpl_vars['localeKeyEscaped']->value),'value'=>$_smarty_tpl->tpl_vars['localeKeyEscaped']->value,'translate'=>false,'label'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localeName']->value )),'checked'=>$_smarty_tpl->tpl_vars['localeSelected']->value),$_smarty_tpl ) );?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php $_block_repeat=false;
echo $_block_plugin10->smartyFBVFormSection(array('list'=>"true",'label'=>"installer.additionalLocales",'description'=>"installer.additionalLocalesInstructions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"timeZone",'description'=>"installer.timezoneInstructions",'for'=>"timeZone"));
$_block_repeat=true;
echo $_block_plugin11->smartyFBVFormSection(array('label'=>"timeZone",'description'=>"installer.timezoneInstructions",'for'=>"timeZone"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"timeZone",'id'=>"timeZoneOptions",'from'=>$_smarty_tpl->tpl_vars['timeZoneOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['timeZone']->value,'translate'=>false,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'subLabelTranslate'=>true),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin11->smartyFBVFormSection(array('label'=>"timeZone",'description'=>"installer.timezoneInstructions",'for'=>"timeZone"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormArea(array('id'=>"localeSettingsFormArea",'title'=>"installer.localeSettings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

			<!-- Files directory configuration -->
			<?php if (!$_smarty_tpl->tpl_vars['skipFilesDirSection']->value) {?>
				<?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"fileSettingsFormArea",'title'=>"installer.fileSettings"));
$_block_repeat=true;
echo $_block_plugin12->smartyFBVFormArea(array('id'=>"fileSettingsFormArea",'title'=>"installer.fileSettings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"installer.filesDir",'description'=>"installer.filesDirInstructions"));
$_block_repeat=true;
echo $_block_plugin13->smartyFBVFormSection(array('label'=>"installer.filesDir",'description'=>"installer.filesDirInstructions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"filesDir",'value'=>$_smarty_tpl->tpl_vars['filesDir']->value,'maxlength'=>"255",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE']),$_smarty_tpl ) );?>

					<?php $_block_repeat=false;
echo $_block_plugin13->smartyFBVFormSection(array('label'=>"installer.filesDir",'description'=>"installer.filesDirInstructions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.allowFileUploads",'allowFileUploads'=>$_smarty_tpl->tpl_vars['allowFileUploads']->value),$_smarty_tpl ) );?>
</p>
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.maxFileUploadSize",'maxFileUploadSize'=>$_smarty_tpl->tpl_vars['maxFileUploadSize']->value),$_smarty_tpl ) );?>
</p>
				<?php $_block_repeat=false;
echo $_block_plugin12->smartyFBVFormArea(array('id'=>"fileSettingsFormArea",'title'=>"installer.fileSettings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php }?>
			<!-- Database configuration -->
			<?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"databaseSettingsFormArea",'title'=>"installer.databaseSettings"));
$_block_repeat=true;
echo $_block_plugin14->smartyFBVFormArea(array('id'=>"databaseSettingsFormArea",'title'=>"installer.databaseSettings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.databaseSettingsInstructions"),$_smarty_tpl ) );?>
</p>
				<?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"installer.databaseDriver",'description'=>"installer.databaseDriverInstructions"));
$_block_repeat=true;
echo $_block_plugin15->smartyFBVFormSection(array('label'=>"installer.databaseDriver",'description'=>"installer.databaseDriverInstructions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"databaseDriver",'from'=>$_smarty_tpl->tpl_vars['databaseDriverOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['databaseDriver']->value,'translate'=>false,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin15->smartyFBVFormSection(array('label'=>"installer.databaseDriver",'description'=>"installer.databaseDriverInstructions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"installer.databaseHost"));
$_block_repeat=true;
echo $_block_plugin16->smartyFBVFormSection(array('label'=>"installer.databaseHost"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"databaseHost",'value'=>$_smarty_tpl->tpl_vars['databaseHost']->value,'maxlength'=>"60",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin16->smartyFBVFormSection(array('label'=>"installer.databaseHost"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"installer.databaseUsername"));
$_block_repeat=true;
echo $_block_plugin17->smartyFBVFormSection(array('label'=>"installer.databaseUsername"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"databaseUsername",'value'=>$_smarty_tpl->tpl_vars['databaseUsername']->value,'maxlength'=>"60",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin17->smartyFBVFormSection(array('label'=>"installer.databaseUsername"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"installer.databasePassword"));
$_block_repeat=true;
echo $_block_plugin18->smartyFBVFormSection(array('label'=>"installer.databasePassword"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'password'=>true,'id'=>"databasePassword",'value'=>$_smarty_tpl->tpl_vars['databasePassword']->value,'maxlength'=>"60",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin18->smartyFBVFormSection(array('label'=>"installer.databasePassword"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"installer.databaseName"));
$_block_repeat=true;
echo $_block_plugin19->smartyFBVFormSection(array('label'=>"installer.databaseName"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"databaseName",'value'=>$_smarty_tpl->tpl_vars['databaseName']->value,'maxlength'=>"60",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin19->smartyFBVFormSection(array('label'=>"installer.databaseName"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_repeat=false;
echo $_block_plugin14->smartyFBVFormArea(array('id'=>"databaseSettingsFormArea",'title'=>"installer.databaseSettings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

			<?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"oaiSettingsFormArea",'title'=>"installer.oaiSettings"));
$_block_repeat=true;
echo $_block_plugin20->smartyFBVFormArea(array('id'=>"oaiSettingsFormArea",'title'=>"installer.oaiSettings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"installer.oaiRepositoryId",'description'=>"installer.oaiRepositoryIdInstructions"));
$_block_repeat=true;
echo $_block_plugin21->smartyFBVFormSection(array('label'=>"installer.oaiRepositoryId",'description'=>"installer.oaiRepositoryIdInstructions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"oaiRepositoryId",'value'=>$_smarty_tpl->tpl_vars['oaiRepositoryId']->value,'maxlength'=>"60",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin21->smartyFBVFormSection(array('label'=>"installer.oaiRepositoryId",'description'=>"installer.oaiRepositoryIdInstructions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_repeat=false;
echo $_block_plugin20->smartyFBVFormArea(array('id'=>"oaiSettingsFormArea",'title'=>"installer.oaiSettings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

			<?php $_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"beaconArea",'title'=>"installer.beacon"));
$_block_repeat=true;
echo $_block_plugin22->smartyFBVFormArea(array('id'=>"beaconArea",'title'=>"installer.beacon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true));
$_block_repeat=true;
echo $_block_plugin23->smartyFBVFormSection(array('list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enableBeacon",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['enableBeacon']->value,'label'=>"installer.beacon.enable"),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin23->smartyFBVFormSection(array('list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_repeat=false;
echo $_block_plugin22->smartyFBVFormArea(array('id'=>"beaconArea",'title'=>"installer.beacon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"installFormSubmit",'submitText'=>"installer.installApplication",'hideCancel'=>true),$_smarty_tpl ) );?>

		</form>
	</div>
<?php
}
}
/* {/block "page"} */
}
