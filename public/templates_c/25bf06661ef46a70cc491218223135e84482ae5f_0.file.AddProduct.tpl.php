<?php
/* Smarty version 3.1.30, created on 2020-10-06 17:46:06
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\AddProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f7c913ea53f75_88852826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25bf06661ef46a70cc491218223135e84482ae5f' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\AddProduct.tpl',
      1 => 1601998732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f7c913ea53f75_88852826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13403707425f7c913ea53272_33625104', 'content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1857449935f7c913ea53c45_43825292', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_13403707425f7c913ea53272_33625104 extends Smarty_Internal_Block
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
ProductSave" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="producent">Wpisz producenta</label>
                <input id="producent" type="text" placeholder="Producent" name="producent">
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="model">Wpisz model</label>
                <input id="model" type="text" placeholder="Model" name="model">
	</div>
        
        <div class="l-box-lrg pure-u-1 pure-u-med-4-24">
        <label for="op">Wybierz grupę towarów</label>
        <select id="op" name="op">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_names']->value, 'gn');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gn']->value) {
?>
                <option><?php echo $_smarty_tpl->tpl_vars['gn']->value;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </select>
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
class Block_1857449935f7c913ea53c45_43825292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Panel administracyjny.<?php
}
}
/* {/block 'footer'} */
}
