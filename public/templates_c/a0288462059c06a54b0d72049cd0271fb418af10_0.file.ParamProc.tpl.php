<?php
/* Smarty version 3.1.30, created on 2020-09-19 14:56:06
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\ParamProc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f65ffe650f275_94181792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0288462059c06a54b0d72049cd0271fb418af10' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\ParamProc.tpl',
      1 => 1600520041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f65ffe650f275_94181792 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-3-5">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Register" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="id_email">E-mail: </label>
		<input id="id_email" type="text" placeholder="Email" name="email"/>
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-7-24">
		<label for="id_login">Login: </label>
		<input id="id_login" type="text" placeholder="Login" name="login"/>
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="id_pass">Hasło: </label>
		<input id="id_pass" type="password" placeholder="Hasło" name="pass"/><br />
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-1">
		<input type="submit" value="Zarejestruj" class="pure-button"/>
        </div>
	</fieldset>
</form>
</div><?php }
}
