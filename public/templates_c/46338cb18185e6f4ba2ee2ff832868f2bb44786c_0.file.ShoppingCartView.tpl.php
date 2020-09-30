<?php
/* Smarty version 3.1.30, created on 2020-09-26 10:56:06
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\ShoppingCartView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f6f022664a445_85437740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46338cb18185e6f4ba2ee2ff832868f2bb44786c' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\ShoppingCartView.tpl',
      1 => 1601110564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f6f022664a445_85437740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18120477925f6f0226649f67_20127948', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_18120477925f6f0226649f67_20127948 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NavigateLogIn"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do nawigatora</a>
</div>

<h2 class="content-head is-center">Koszyk</h2>

<div class="pure-g">
<div class="pure-u-1">
   <table style="margin: auto;" id="tab_zamowienia" class="pure-table pure-table-bordered pure-form pure-form-align">
        <thead>
            <tr>
                <tr><th colspan="4">Zamówione produkty</th></tr>
                <th>Producent</th>
                <th>Model</th>
                <th>Cena</th>
                <th>Opcje</th>
            </tr>           
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['d']->value["producent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["model"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["cena"];?>
</td><td><a class="button-small pure-button button-warning" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
deleteFromSC/<?php echo $_smarty_tpl->tpl_vars['d']->value['idtowar_zamowienia'];?>
','Czy na pewno usunąć produkt z koszyka?')">Usuń z koszyka</a></td></tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
</div>       
</div>
 
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['expense']->value->cenaKoszyka)) {?>
	<h4>Do zapłaty:</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['expense']->value->cenaKoszyka;?>

	</p>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
