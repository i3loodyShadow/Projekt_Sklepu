<?php
/* Smarty version 3.1.30, created on 2020-09-24 17:50:39
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\RegisterView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f6cc04f1ab116_94117593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '607240d216dd38a6391a453ccb4589ccdcb7f58f' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\RegisterView.tpl',
      1 => 1600184995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f6cc04f1ab116_94117593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20972959255f6cc04f1aa8f3_64261371', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_20972959255f6cc04f1aa8f3_64261371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NavigateShow"  class="pure-menu-heading pure-menu-link">Powrót do sklepu</a>
</div>

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
</div>
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>             
                
<?php
}
}
/* {/block 'content'} */
}
