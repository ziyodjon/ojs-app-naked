<?php
/* Smarty version 4.3.1, created on 2023-11-21 03:56:32
  from 'app:formtextInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655c2a707e65c3_97913641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2122dd4b4d038d06701b7a5cbc73d21546ea835d' => 
    array (
      0 => 'app:formtextInput.tpl',
      1 => 1693254618,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655c2a707e65c3_97913641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php $_smarty_tpl->_assignInScope('uniqId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "-",$_smarty_tpl->tpl_vars['FBV_uniqId']->value )) )));?>
<div<?php if ($_smarty_tpl->tpl_vars['FBV_layoutInfo']->value) {?> class="<?php echo $_smarty_tpl->tpl_vars['FBV_layoutInfo']->value;?>
"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['FBV_multilingual']->value && count($_smarty_tpl->tpl_vars['formLocales']->value) > 1) {?>
	<?php echo '<script'; ?>
>
	$(function() {
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value,'javascript' ));?>
-localization-popover-container<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
').pkpHandler(
			'$.pkp.controllers.form.MultilingualInputHandler'
			);
	});
	<?php echo '</script'; ?>
>
		<span id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
-localization-popover-container<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
" class="localization_popover_container">
		<input type="<?php if ($_smarty_tpl->tpl_vars['FBV_isPassword']->value) {?>password<?php } elseif ($_smarty_tpl->tpl_vars['FBV_isTypeURL']->value) {?>url<?php } else { ?>text<?php }?>" 
			<?php echo $_smarty_tpl->tpl_vars['FBV_textInputParams']->value;?>

			class="localizable <?php if ($_smarty_tpl->tpl_vars['FBV_class']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_class']->value ));
}
if ($_smarty_tpl->tpl_vars['FBV_validation']->value) {?> <?php echo $_smarty_tpl->tpl_vars['FBV_validation']->value;
}
if ($_smarty_tpl->tpl_vars['formLocale']->value != $_smarty_tpl->tpl_vars['currentLocale']->value) {?> locale_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
}?>"
			<?php if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?> disabled="disabled"<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['FBV_readonly']->value) {?> readonly="readonly"<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['FBV_validation']->value) {?> validation="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_validation']->value ));?>
"<?php }?>
			value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['FBV_value']->value[$_smarty_tpl->tpl_vars['formLocale']->value] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));?>
"
			name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_name']->value ));?>
[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));?>
]"
			id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
"
			<?php if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?> required aria-required="true"<?php }?>
		/>

		<?php echo $_smarty_tpl->tpl_vars['FBV_label_content']->value;?>


		<div class="localization_popover">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formLocales']->value, 'thisFormLocaleName', false, 'thisFormLocale');
$_smarty_tpl->tpl_vars['thisFormLocaleName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thisFormLocale']->value => $_smarty_tpl->tpl_vars['thisFormLocaleName']->value) {
$_smarty_tpl->tpl_vars['thisFormLocaleName']->do_else = false;
if ($_smarty_tpl->tpl_vars['formLocale']->value != $_smarty_tpl->tpl_vars['thisFormLocale']->value) {?>
				<input	type="<?php if ($_smarty_tpl->tpl_vars['FBV_isPassword']->value) {?>password<?php } else { ?>text<?php }?>"
					<?php echo $_smarty_tpl->tpl_vars['FBV_textInputParams']->value;?>

					placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisFormLocaleName']->value ));?>
"
					class="multilingual_extra flag flag_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisFormLocale']->value ));
if ($_smarty_tpl->tpl_vars['FBV_sizeInfo']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_sizeInfo']->value ));
}?>"
					<?php if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?> disabled="disabled"<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['FBV_readonly']->value) {?> readonly="readonly"<?php }?>
					value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['FBV_value']->value[$_smarty_tpl->tpl_vars['thisFormLocale']->value] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));?>
"
					name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_name']->value ));?>
[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisFormLocale']->value ));?>
]"
					id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisFormLocale']->value ));
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
"
					<?php if ($_smarty_tpl->tpl_vars['FBV_tabIndex']->value) {?> tabindex="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_tabIndex']->value ));?>
"<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['FBV_required']->value && $_smarty_tpl->tpl_vars['thisFormLocale']->value === $_smarty_tpl->tpl_vars['primaryLocale']->value) {?> required aria-required="true"<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['FBV_validation']->value && $_smarty_tpl->tpl_vars['thisFormLocale']->value === $_smarty_tpl->tpl_vars['primaryLocale']->value) {?> validation="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_validation']->value ));?>
"<?php }?>
				/>
				<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisFormLocale']->value ));
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
" class="locale">(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisFormLocaleName']->value ));?>
)</label>
			<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</span>
<?php } else { ?>
		<input	type="<?php if ($_smarty_tpl->tpl_vars['FBV_isPassword']->value) {?>password<?php } elseif ($_smarty_tpl->tpl_vars['FBV_isTypeURL']->value) {?>url<?php } elseif ($_smarty_tpl->tpl_vars['FBV_isTypeSearch']->value) {?>search<?php } elseif ($_smarty_tpl->tpl_vars['FBV_isTypeEmail']->value) {?>email<?php } elseif ($_smarty_tpl->tpl_vars['FBV_isTypeTel']->value) {?>tel<?php } else { ?>text<?php }?>"
		<?php echo $_smarty_tpl->tpl_vars['FBV_textInputParams']->value;?>

		class="field text<?php if ($_smarty_tpl->tpl_vars['FBV_class']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_class']->value ));
}
if ($_smarty_tpl->tpl_vars['FBV_validation']->value) {?> <?php echo $_smarty_tpl->tpl_vars['FBV_validation']->value;
}?>"
		<?php if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?> disabled="disabled"<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['FBV_readonly']->value) {?> readonly="readonly"<?php }?>
		name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_name']->value ));
if ($_smarty_tpl->tpl_vars['FBV_multilingual']->value) {?>[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));?>
]<?php }?>"
		value="<?php if ($_smarty_tpl->tpl_vars['FBV_multilingual']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['FBV_value']->value[$_smarty_tpl->tpl_vars['formLocale']->value] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));
} elseif (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strstr' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['FBV_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"datepicker" )) && $_smarty_tpl->tpl_vars['FBV_value']->value !== null) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format($_smarty_tpl->tpl_vars['FBV_value']->value,$_smarty_tpl->tpl_vars['dateFormatShort']->value) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['FBV_value']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));
}?>"
		id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
"
		<?php if ($_smarty_tpl->tpl_vars['FBV_tabIndex']->value) {?> tabindex="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_tabIndex']->value ));?>
"<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?> required aria-required="true"<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['FBV_validation']->value) {?> validation="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_validation']->value ));?>
"<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['FBV_urlValidationErrorMessage']->value) {?> data-msg-url="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_urlValidationErrorMessage']->value ));?>
"<?php }?>
	/>

	<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strstr' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['FBV_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"datepicker" )) !== false) {?>
		<input data-date-format="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'dateformatPHP2JQueryDatepicker' ][ 0 ], array( $_smarty_tpl->tpl_vars['dateFormatShort']->value ));?>
" type="hidden" 
		name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_name']->value ));?>
"
		value="<?php if (!empty($_smarty_tpl->tpl_vars['FBV_value']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format($_smarty_tpl->tpl_vars['FBV_value']->value,"Y-m-d") ));
}?>"
		id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
-altField" />
	<?php }?>

	<span><?php echo $_smarty_tpl->tpl_vars['FBV_label_content']->value;?>
</span>
<?php }?>
</div>
<?php }
}
