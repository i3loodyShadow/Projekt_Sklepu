<?php
/* Smarty version 3.1.30, created on 2020-09-30 12:19:38
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\AddHD.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f745bba156046_12190266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb371539458c2b6c2446adf90158c9343d3539f6' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\AddHD.tpl',
      1 => 1601412011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f745bba156046_12190266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8352665075f745bba154b47_01970907', 'content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18857621355f745bba155ae5_77956425', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_8352665075f745bba154b47_01970907 extends Smarty_Internal_Block
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
HDSave" method="post"  class="pure-form pure-form-aligned">
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
		<label for="typ">Wpisz typ</label>
                <input id="typ" type="text" placeholder="Typ" name="typ" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->typ;?>
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
class Block_18857621355f745bba155ae5_77956425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Panel administracyjny.<?php
}
}
/* {/block 'footer'} */
}
