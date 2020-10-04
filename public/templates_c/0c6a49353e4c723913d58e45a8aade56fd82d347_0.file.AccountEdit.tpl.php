<?php
/* Smarty version 3.1.30, created on 2020-10-04 17:11:22
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\AccountEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f79e61aa562f9_40710897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c6a49353e4c723913d58e45a8aade56fd82d347' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\AccountEdit.tpl',
      1 => 1601824277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f79e61aa562f9_40710897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20030537575f79e61aa55451_81621151', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_20030537575f79e61aa55451_81621151 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
backFromService"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
deleteAccount"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Usuń konto</a>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-1">
    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
passEdit" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-lg-8-24">
		<label for="stareHaslo">Wpisz stare hasło</label>
                <input id="stareHaslo" type="password" placeholder="Stare Hasło" name="stareHaslo">
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-lg-7-24">
		<label for="noweHaslo">Wpisz nowe hasło</label>
                <input id="noweHaslo" type="password" placeholder="Nowe Hasło" name="noweHaslo">
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-lg-8-24">
		<label for="powtHaslo">Powtórz hasło</label>
                <input id="powtHaslo" type="password" placeholder="Powtórz hasło" name="powtHaslo">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-lg-1">
		<input type="submit" value="Zapisz" class="pure-button"/>
        </div>
        </fieldset>
    </form>
        
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
emailEdit" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="email">Obecny email</label>
                <input id="email" type="text" placeholder="Email" name="email" >
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-7-24">
		<label for="nowyEmail">Wpisz nowy email</label>
                <input id="nowyEmail" type="text" placeholder="Nowy email" name="nowyEmail">
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="powtEmail">Powtórz email</label>
                <input id="powtEmail" type="text" placeholder="Powtórz email" name="powtEmail">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-1">
		<input type="submit" value="Zapisz" class="pure-button"/>
        </div>
        </fieldset>
    </form>


<?php
}
}
/* {/block 'content'} */
}
