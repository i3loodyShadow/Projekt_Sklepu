<?php
/* Smarty version 3.1.30, created on 2020-09-08 17:52:16
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\PowerSupplyView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f57a8b027f854_96826648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1995dd38ff14800e92b5daa5ff4e229618cf5be' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\PowerSupplyView.tpl',
      1 => 1599549148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:PowerSupplyPartView.tpl' => 1,
  ),
),false)) {
function content_5f57a8b027f854_96826648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6467152175f57a8b027a5e0_77721726', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11787849495f57a8b027d7b4_13981344', 'resultTable');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15355353025f57a8b027eb42_64874867', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_6467152175f57a8b027a5e0_77721726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
backFromService" method="post"  pure-button">
        <input type="submit" value="Naciśnij aby powrócić do nawigatora sklepu" class="pure-button"/>   
    </form>
</div>
    
<p>

<div>
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
PowerSupplyView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
PowerSupplyPartView','tab_PS'); return false;">
	<legend>Wpisz poniżej moc aby wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Moc" name="PowerSupplySF" value="<?php echo $_smarty_tpl->tpl_vars['PowerSupplySF']->value->PowerSupplySF;?>
"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj zasilacz</button>
	</fieldset>
    </form>
</div>	

<div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
AdminOptions" method="post"  pure-button">
        <input type="submit" value="Dodaj zasilacz" class="pure-button"/>   
    </form>
</div>                
                
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php
}
}
/* {/block 'content'} */
/* {block 'resultTable'} */
class Block_11787849495f57a8b027d7b4_13981344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="tab_PS">
            <?php $_smarty_tpl->_subTemplateRender("file:PowerSupplyPartView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php
}
}
/* {/block 'resultTable'} */
/* {block 'footer'} */
class Block_15355353025f57a8b027eb42_64874867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thank You for using my (unfortunately outdated) cellar calculator! Work on improvement is ongoing.<?php
}
}
/* {/block 'footer'} */
}
