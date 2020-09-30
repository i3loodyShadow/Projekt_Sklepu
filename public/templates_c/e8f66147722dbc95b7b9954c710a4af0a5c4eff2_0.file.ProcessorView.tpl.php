<?php
/* Smarty version 3.1.30, created on 2020-09-29 21:41:03
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\ProcessorView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f738dcf4c7179_93301813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8f66147722dbc95b7b9954c710a4af0a5c4eff2' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\ProcessorView.tpl',
      1 => 1601408461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:ProcessorPartView.tpl' => 1,
  ),
),false)) {
function content_5f738dcf4c7179_93301813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19998495905f738dcf4c4203_20493202', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21248893265f738dcf4c5d03_22799458', 'productsTable');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9813145975f738dcf4c6799_48575625', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_19998495905f738dcf4c4203_20493202 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NewProcessor"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Dodaj procesor</a>
</div>
    
        <p></p>

<div>
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
ProcessorView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ProcessorPartView','tab_proc'); return false;">
	<legend>Wpisz poniżej model procesora aby wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Model" name="productSF" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->product;?>
"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj procesor</button>
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
class Block_21248893265f738dcf4c5d03_22799458 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="tab_proc">
            <?php $_smarty_tpl->_subTemplateRender("file:ProcessorPartView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php
}
}
/* {/block 'productsTable'} */
/* {block 'footer'} */
class Block_9813145975f738dcf4c6799_48575625 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thank You for using my (unfortunately outdated) cellar calculator! Work on improvement is ongoing.<?php
}
}
/* {/block 'footer'} */
}
