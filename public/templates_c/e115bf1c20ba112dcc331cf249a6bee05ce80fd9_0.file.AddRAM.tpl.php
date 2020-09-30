<?php
/* Smarty version 3.1.30, created on 2020-09-30 11:56:18
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\AddRAM.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f745642358588_85418333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e115bf1c20ba112dcc331cf249a6bee05ce80fd9' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\AddRAM.tpl',
      1 => 1601459321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f745642358588_85418333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20132246245f745642357883_71886758', 'content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14456458915f745642358247_75836315', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_20132246245f745642357883_71886758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
</div>
    
<p>
<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-1">
        
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
RAMSave" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-med-5-24">
		<label for="producent">Wpisz producenta</label>
                <input id="producent" type="text" placeholder="Producent" name="producent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->producent;?>
">
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-4-24">
		<label for="model">Wpisz model</label>
                <input id="model" type="text" placeholder="Model" name="model" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->model;?>
">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-5-24">
		<label for="pojemnoscPamieci">Wpisz pojemnosc pamieci</label>
                <input id="pojemnoscPamieci" type="text" placeholder="Pojemność Pamięci" name="pojemnoscPamieci" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pojemnoscPamieci;?>
">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-4-24">
		<label for="DDR">Wpisz DDR</label>
                <input id="DDR" type="text" placeholder="DDR" name="ddr" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ddr;?>
">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-5-24">
		<label for="cena">Wpisz cenę</label>
                <input id="cena" type="text" placeholder="Cena" name="cena" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cena;?>
">
	</div>

        <div class="l-box-lrg pure-u-1 pure-u-med-1">
		<input type="submit" value="Zapisz" class="pure-button"/>
        </div>
	</fieldset>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-1">
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_14456458915f745642358247_75836315 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Panel administracyjny.<?php
}
}
/* {/block 'footer'} */
}
