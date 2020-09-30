<?php
/* Smarty version 3.1.30, created on 2020-09-06 14:35:17
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\HardDiscsView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f54d785c11d30_12798737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0adc62495023f3b133b960d1e796e4739286ad99' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\HardDiscsView.tpl',
      1 => 1599394360,
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
function content_5f54d785c11d30_12798737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4617373815f54d785c0fbb7_38349486', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15886970165f54d785c10ee4_63971939', 'resultTable');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10869751995f54d785c119e6_98272512', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_4617373815f54d785c0fbb7_38349486 extends Smarty_Internal_Block
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
HardDiscView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
GraphicsCardPartView','tab_HD'); return false;">
	<legend>Wpisz poniżej typ dysku aby wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Typ" name="hardDiscSF" value="<?php echo $_smarty_tpl->tpl_vars['hardDisc']->value->hardDisc;?>
"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj dysk twardy</button>
	</fieldset>
    </form>
</div>	

<div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
backFromService" method="post"  pure-button">
        <input type="submit" value="Dodaj dysk twardy" class="pure-button"/>   
    </form>
</div>                
                
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php
}
}
/* {/block 'content'} */
/* {block 'resultTable'} */
class Block_15886970165f54d785c10ee4_63971939 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="tab_HD">
            <?php $_smarty_tpl->_subTemplateRender("file:GraphicsCardPartView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php
}
}
/* {/block 'resultTable'} */
/* {block 'footer'} */
class Block_10869751995f54d785c119e6_98272512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thank You for using my (unfortunately outdated) cellar calculator! Work on improvement is ongoing.<?php
}
}
/* {/block 'footer'} */
}
