<?php
/* Smarty version 3.1.30, created on 2020-09-07 17:56:58
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\GraphicsCardView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f56584a816f15_82555124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fce1e5cd28a5f599fa59722483ad6830f1cabec' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\GraphicsCardView.tpl',
      1 => 1599493982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:GraphicsCardPartView.tpl' => 1,
  ),
),false)) {
function content_5f56584a816f15_82555124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16749280355f56584a8152f7_36560876', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9634570195f56584a8163f7_99450053', 'resultTable');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19718319995f56584a816be9_26567408', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_16749280355f56584a8152f7_36560876 extends Smarty_Internal_Block
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
GraphicsCardView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
GraphicsCardPartView','tab_GC'); return false;">
	<legend>Wpisz poniżej model karty graficznej aby wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Model" name="graphicsCardSF" value="<?php echo $_smarty_tpl->tpl_vars['graphicsCard']->value->graphicsCard;?>
"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj kartę graficzną</button>
	</fieldset>
    </form>
</div>	

<div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
AdminView" method="post"  pure-button">
        <input type="submit" value="Opcje administratora" class="pure-button"/>   
    </form>
</div>                
                
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php
}
}
/* {/block 'content'} */
/* {block 'resultTable'} */
class Block_9634570195f56584a8163f7_99450053 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="tab_GC">
            <?php $_smarty_tpl->_subTemplateRender("file:GraphicsCardPartView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php
}
}
/* {/block 'resultTable'} */
/* {block 'footer'} */
class Block_19718319995f56584a816be9_26567408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thank You for using my (unfortunately outdated) cellar calculator! Work on improvement is ongoing.<?php
}
}
/* {/block 'footer'} */
}
