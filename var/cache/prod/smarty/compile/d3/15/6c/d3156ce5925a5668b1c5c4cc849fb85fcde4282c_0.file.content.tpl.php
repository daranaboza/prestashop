<?php
/* Smarty version 3.1.39, created on 2021-08-03 11:52:19
  from 'C:\laragon\www\prestashop\admin725wey7m8\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610911d3a7db12_44964135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3156ce5925a5668b1c5c4cc849fb85fcde4282c' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\admin725wey7m8\\themes\\default\\template\\content.tpl',
      1 => 1627968543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610911d3a7db12_44964135 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
