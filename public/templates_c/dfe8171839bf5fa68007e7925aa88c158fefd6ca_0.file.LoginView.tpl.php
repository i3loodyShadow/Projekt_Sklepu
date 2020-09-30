<?php
/* Smarty version 3.1.30, created on 2020-09-24 16:59:22
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f6cb44ad4b128_06997498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfe8171839bf5fa68007e7925aa88c158fefd6ca' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\LoginView.tpl',
      1 => 1600941256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f6cb44ad4b128_06997498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2256540255f6cb44ad4a639_62045272', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2256540255f6cb44ad4a639_62045272 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NavigateShow"  class="pure-menu-heading pure-menu-link">Powrót do sklepu</a>
</div>
    
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Login" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-med-12-24">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-11-24">
			<label for="id_login">Hasło: </label>
			<input id="id_hasło" type="password" name="pass"/><br />
		</div>
			<input type="submit" value="Zaloguj" class="pure-button"/>
	</fieldset>
</form>
        
<div style="text-align:center">
    <a class="pure-button button-rejestracja" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Register">Nie masz jeszcze konta? Zarejestruj się!</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
