<?php
/* Smarty version 3.1.30, created on 2020-10-11 16:27:13
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\ProductsPartView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f83164143db12_51689214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfa8dcfb6f07436c4ca17fbbbbf8d40ccc4408b' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\ProductsPartView.tpl',
      1 => 1602426431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f83164143db12_51689214 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-g">
<div class="pure-u-1">
   <table style="margin: auto;" id="tab_nazw" class="pure-table pure-table-bordered pure-form pure-form-align">
        <thead>
            <tr>
                <tr><th colspan="3">Dostępne produkty</th></tr>
                <th>Producent</th>
                <th>Model</th>
                <th>Opcje</th>
            </tr>           
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'n');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['n']->value["producent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['n']->value["model"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
ProductDetails/<?php echo $_smarty_tpl->tpl_vars['n']->value['idtowar'];?>
">Szczegóły</a>&nbsp;<?php if (\core\RoleUtils::inRole("admin")) {?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
ProductEdition/<?php echo $_smarty_tpl->tpl_vars['n']->value['idtowar'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productDelete/<?php echo $_smarty_tpl->tpl_vars['n']->value['idtowar'];?>
','Czy na pewno usunąć towar?')">Usuń</a><?php } else { ?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addToShoppingCart/<?php echo $_smarty_tpl->tpl_vars['n']->value['idtowar'];?>
">Dodaj do koszyka</a><?php }?></td></tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
</div>

        
<?php }
}
