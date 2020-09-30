<?php
/* Smarty version 3.1.30, created on 2020-09-30 17:06:59
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\ProductsPartView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f749f1358f881_12791506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfa8dcfb6f07436c4ca17fbbbbf8d40ccc4408b' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\ProductsPartView.tpl',
      1 => 1601478377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f749f1358f881_12791506 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-g">
<div class="pure-u-1-2">
   <table style="margin: auto;" id="tab_nazw" class="pure-table pure-table-bordered pure-form pure-form-align">
        <thead>
            <tr>
                <tr><th colspan="4">Dostępne produkty</th></tr>
                <th>Id towaru</th>
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
                <tr><td><?php echo $_smarty_tpl->tpl_vars['n']->value["idtowar"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['n']->value["producent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['n']->value["model"];?>
</td><td><?php if (\core\RoleUtils::inRole("admin")) {?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productEdit/<?php echo $_smarty_tpl->tpl_vars['n']->value['idtowar'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productDelete/<?php echo $_smarty_tpl->tpl_vars['n']->value['idtowar'];?>
','Czy na pewno usunąć towar?')">Usuń</a>&nbsp;<?php } else { ?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
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

<div class="pure-u-1-2">
    <table style="margin: auto;" id="tab_parametrow" class="pure-table pure-table-bordered pure-form pure-form-align">
        <thead>
            <tr>
                <tr><th colspan="4">Parametry produktów</th></tr>
                <th>Id towaru</th>
                <th>Nazwa Parametrów</th>
                <th>Wartość Parametrów</th>
                     
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['d']->value["idtowar"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["nazwa_parametru"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["wartosc_parametrow"];?>
</td></tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
</div>
</div>
        
<?php }
}
