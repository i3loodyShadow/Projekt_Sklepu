<?php
/* Smarty version 3.1.30, created on 2020-10-04 19:07:41
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\UsersView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f7a015d6e3008_49910608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42d0ccf604baa12d7ea66cb2ed7d46da76dec5ef' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\UsersView.tpl',
      1 => 1601831260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:UsersPartView.tpl' => 1,
  ),
),false)) {
function content_5f7a015d6e3008_49910608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15727965105f7a015d6e10f2_49289205', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9634718425f7a015d6e2128_98920472', 'productsTable');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12255640325f7a015d6e2ba0_88887489', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_15727965105f7a015d6e10f2_49289205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
    <?php if ((\core\RoleUtils::inRole("admin"))) {?>  
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
    <?php }?>
</div>
    
        <p></p>

<div>
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
usersAccountsView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
usersAccountsPartView','tab_kont'); return false;">
	<legend>Wpisz poniżej e-mail aby wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="E-mail" name="emailSF" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj po e-mailu</button>
	</fieldset>
    </form>
</div>	
                
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php
}
}
/* {/block 'content'} */
/* {block 'productsTable'} */
class Block_9634718425f7a015d6e2128_98920472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="tab_kont">
    <?php $_smarty_tpl->_subTemplateRender("file:UsersPartView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php
}
}
/* {/block 'productsTable'} */
/* {block 'footer'} */
class Block_12255640325f7a015d6e2ba0_88887489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dziękujemy za skorzystanie z naszego sklepu.<?php
}
}
/* {/block 'footer'} */
}
