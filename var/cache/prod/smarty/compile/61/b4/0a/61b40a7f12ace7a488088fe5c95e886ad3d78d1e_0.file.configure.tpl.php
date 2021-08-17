<?php
/* Smarty version 3.1.39, created on 2021-08-17 12:08:09
  from 'C:\laragon\www\prestashop\modules\nieexample\views\templates\hook\configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611b8a897b21f0_13993295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61b40a7f12ace7a488088fe5c95e886ad3d78d1e' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\modules\\nieexample\\views\\templates\\hook\\configure.tpl',
      1 => 1627984481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611b8a897b21f0_13993295 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['save']->value) {?>

    <p>Actualizado</p>

<?php }?>

<form method="post">
    <div class="form-group">
        <label for="urlExample">URL</label>
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['urlValue']->value;?>
" name="urlExample" id="urlExample" aria-describedby="url" placeholder="URL">
        <small id="urlHelp" class="form-text text-muted">Introuzca una URL</small>
    </div>
    <button type="submit" name="submitButton" id="submitButton" class="btn btn-primary">Submit</button>
</form><?php }
}
