<?php
/* Smarty version 3.1.30, created on 2020-08-25 14:39:39
  from "D:\Xampp\htdocs\amelia_test\app\views\ResultsView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f45068bab6071_91718898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c24090ba96f637f7659a78145f7de796e2808095' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\amelia_test\\app\\views\\ResultsView.tpl',
      1 => 1598359127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:ResultPartView.tpl' => 1,
  ),
),false)) {
function content_5f45068bab6071_91718898 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20167885905f45068baaa5a2_13116190', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6830924935f45068bab4303_11643419', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10600121385f45068bab51d6_04827759', 'resultTable');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9019740225f45068bab59c1_32042511', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_20167885905f45068baaa5a2_13116190 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
History of exchanges<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_6830924935f45068bab4303_11643419 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<h2 class="content-head is-center">History of cellar exchanges</h2>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
backFromHistory" method="post"  pure-button">
    <input type="submit" value="Click to back to cellar calculator" class="pure-button"/>
</form>

<br>

<div>
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
historyView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
historyPartView','table'); return false;">
	<legend>Type currency below to search</legend>
	<fieldset>
		<input type="text" placeholder="Currency" name="hsf_currency" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value->currency;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Search</button>
	</fieldset>
    </form>
</form>
</div>	
                
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
/* {block 'resultTable'} */
class Block_10600121385f45068bab51d6_04827759 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="table">
            <?php $_smarty_tpl->_subTemplateRender("file:ResultPartView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php
}
}
/* {/block 'resultTable'} */
/* {block 'footer'} */
class Block_9019740225f45068bab59c1_32042511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thank You for using my (unfortunately outdated) cellar calculator! Work on improvement is ongoing.<?php
}
}
/* {/block 'footer'} */
}
