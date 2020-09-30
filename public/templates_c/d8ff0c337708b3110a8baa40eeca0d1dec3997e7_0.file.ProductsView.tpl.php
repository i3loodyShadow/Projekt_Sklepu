<?php
/* Smarty version 3.1.30, created on 2020-09-29 21:53:04
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\ProductsView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f7390a00386a0_61107930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8ff0c337708b3110a8baa40eeca0d1dec3997e7' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\ProductsView.tpl',
      1 => 1601409043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:ProductsPartView.tpl' => 1,
  ),
),false)) {
function content_5f7390a00386a0_61107930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20229068095f7390a0036c87_82358659', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6550340475f7390a0037ba3_95723319', 'productsTable');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18072691855f7390a0038375_46271116', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_20229068095f7390a0036c87_82358659 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
    <?php if ((\core\RoleUtils::inRole("admin"))) {?>  
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
    <?php } else { ?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
backFromService"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do nawigatora</a>
    <?php }?>
</div>
    
        <p></p>

<div>
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
ProductView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ProductPartView','tab_prod'); return false;">
	<legend>Wpisz poniżej model produktu aby wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Model" name="productSF" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->product;?>
"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj produkt</button>
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
class Block_6550340475f7390a0037ba3_95723319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="tab_prod">
    <?php $_smarty_tpl->_subTemplateRender("file:ProductsPartView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php
}
}
/* {/block 'productsTable'} */
/* {block 'footer'} */
class Block_18072691855f7390a0038375_46271116 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dziękujemy za skorzystanie z naszego sklepu.<?php
}
}
/* {/block 'footer'} */
}
