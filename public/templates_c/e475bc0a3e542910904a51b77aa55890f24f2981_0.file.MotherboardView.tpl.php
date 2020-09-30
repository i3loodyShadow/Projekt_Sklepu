<?php
/* Smarty version 3.1.30, created on 2020-09-07 18:01:37
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\MotherboardView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f565961e0cd54_13843981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e475bc0a3e542910904a51b77aa55890f24f2981' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\MotherboardView.tpl',
      1 => 1599493982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:MotherBoardPartView.tpl' => 1,
  ),
),false)) {
function content_5f565961e0cd54_13843981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14619203115f565961e0b343_71707961', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20778334175f565961e0c249_92923738', 'resultTable');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11176980955f565961e0ca39_66971010', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_14619203115f565961e0b343_71707961 extends Smarty_Internal_Block
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
MotherboardView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
MotherboardPartView','tab_MOBO'); return false;">
	<legend>Wpisz poniżej pojemność aby wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Producent" name="MoBoSF" value="<?php echo $_smarty_tpl->tpl_vars['MoBoSF']->value->mobo;?>
"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj płytę główną</button>
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
class Block_20778334175f565961e0c249_92923738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="tab_MOBO">
            <?php $_smarty_tpl->_subTemplateRender("file:MotherBoardPartView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php
}
}
/* {/block 'resultTable'} */
/* {block 'footer'} */
class Block_11176980955f565961e0ca39_66971010 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thank You for using my (unfortunately outdated) cellar calculator! Work on improvement is ongoing.<?php
}
}
/* {/block 'footer'} */
}
