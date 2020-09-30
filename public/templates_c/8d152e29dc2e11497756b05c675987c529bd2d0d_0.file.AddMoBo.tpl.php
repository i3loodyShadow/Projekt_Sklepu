<?php
/* Smarty version 3.1.30, created on 2020-09-30 11:23:30
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\AddMoBo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f744e92ef04d0_18958486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d152e29dc2e11497756b05c675987c529bd2d0d' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\AddMoBo.tpl',
      1 => 1601410967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f744e92ef04d0_18958486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11731396955f744e92eef7b3_71040001', 'content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13826674265f744e92ef0197_08027185', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_11731396955f744e92eef7b3_71040001 extends Smarty_Internal_Block
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
MoBoSave" method="post"  class="pure-form pure-form-aligned">
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
		<label for="usb_3_0">Czy posiada USB 3.0?</label>
                <input id="usb_3_0" type="text" placeholder="Tak/Nie" name="usb_3_0" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->usb_3_0;?>
">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-4-24">
		<label for="gniazdo_m_2">Czy posiada złącze M2?</label>
                <input id="gniazdo_m_2" type="text" placeholder="Tak/Nie" name="gniazdo_m_2" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->gniazdo_m_2;?>
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
class Block_13826674265f744e92ef0197_08027185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Panel administracyjny.<?php
}
}
/* {/block 'footer'} */
}
