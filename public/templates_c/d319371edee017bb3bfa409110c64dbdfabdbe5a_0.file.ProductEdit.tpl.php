<?php
/* Smarty version 3.1.30, created on 2020-10-09 10:27:37
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\ProductEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f801ef9bb0903_25598858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd319371edee017bb3bfa409110c64dbdfabdbe5a' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\ProductEdit.tpl',
      1 => 1602232055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f801ef9bb0903_25598858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2930388485f801ef9baf416_64508604', 'content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11214990095f801ef9bb0344_33060135', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2930388485f801ef9baf416_64508604 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-1">
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-12-24">    
<form class="pure-form">
    <label>Producent</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['prod']->value;?>
" readonly="" />
</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-11-24"> 
<form class="pure-form">
    <label>Model</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" readonly="" />
</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-1">    
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addParameter" method="post"  class="pure-form pure-form-aligned">
            <div class="l-box-lrg pure-u-1 pure-u-med-9-24">
                    <label for="insertedValue">Wpisz wartość parametru</label>
                    <p>
                        <input id="model" type="text" placeholder="Wartość parametru" name="insertedValue">
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-med-4-24">
            <label for="op">Wybierz parametr</label>
            <p>
            <select id="op" name="op">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['param_names']->value, 'pn');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pn']->value) {
?>
                    <option><?php echo $_smarty_tpl->tpl_vars['pn']->value;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
            </div>
            <div class="l-box-lrg pure-u-1 pure-u-med-3-24">
                <label>Naciśnij aby zapisać</label>
                <p>
                <input type="submit" value="Dodaj" class="pure-button"/>
            </div>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">      
</form>
</div>

</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_11214990095f801ef9bb0344_33060135 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Panel administracyjny.<?php
}
}
/* {/block 'footer'} */
}
