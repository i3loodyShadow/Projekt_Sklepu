<?php
/* Smarty version 3.1.30, created on 2020-10-07 09:42:28
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\ProductsView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f7d7164db5281_69314542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8ff0c337708b3110a8baa40eeca0d1dec3997e7' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\ProductsView.tpl',
      1 => 1602003414,
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
function content_5f7d7164db5281_69314542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9177507435f7d7164db2353_76714193', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2454971965f7d7164db3c20_50266148', 'productsTable');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6172352015f7d7164db4a49_01280769', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_9177507435f7d7164db2353_76714193 extends Smarty_Internal_Block
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
class Block_2454971965f7d7164db3c20_50266148 extends Smarty_Internal_Block
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
class Block_6172352015f7d7164db4a49_01280769 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dziękujemy za skorzystanie z naszego sklepu.<?php
}
}
/* {/block 'footer'} */
}
