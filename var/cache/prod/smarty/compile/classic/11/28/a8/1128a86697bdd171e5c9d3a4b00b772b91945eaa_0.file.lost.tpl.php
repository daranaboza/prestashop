<?php
/* Smarty version 3.1.39, created on 2021-08-03 11:52:25
  from 'C:\laragon\www\prestashop\modules\welcome\views\templates\lost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610911d9d96838_54991147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1128a86697bdd171e5c9d3a4b00b772b91945eaa' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1627968546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610911d9d96838_54991147 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</p>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
    </div>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
    </div>
  </div>
</div>
<?php }
}
