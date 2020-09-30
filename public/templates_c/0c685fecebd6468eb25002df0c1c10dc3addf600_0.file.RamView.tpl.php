<?php
/* Smarty version 3.1.30, created on 2020-09-07 18:02:02
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\RamView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f56597aa5edb6_88461397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c685fecebd6468eb25002df0c1c10dc3addf600' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\RamView.tpl',
      1 => 1599494521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:RamPartView.tpl' => 1,
  ),
),false)) {
function content_5f56597aa5edb6_88461397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19448342975f56597aa5d164_42359882', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2529520055f56597aa5e046_76517427', 'resultTable');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17600053975f56597aa5ea88_29315551', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_19448342975f56597aa5d164_42359882 extends Smarty_Internal_Block
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
RamView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
RamPartView','tab_RAM'); return false;">
	<legend>Wpisz poniżej pojemność aby wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Pojemność" name="RamSF" value="<?php echo $_smarty_tpl->tpl_vars['RamSF']->value->RamSF;?>
"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj psmięć ram</button>
	</fieldset>
    </form>
</div>	

<div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
AdminOptions" method="post"  pure-button">
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
class Block_2529520055f56597aa5e046_76517427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="tab_RAM">
            <?php $_smarty_tpl->_subTemplateRender("file:RamPartView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php
}
}
/* {/block 'resultTable'} */
/* {block 'footer'} */
class Block_17600053975f56597aa5ea88_29315551 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thank You for using my (unfortunately outdated) cellar calculator! Work on improvement is ongoing.<?php
}
}
/* {/block 'footer'} */
}
