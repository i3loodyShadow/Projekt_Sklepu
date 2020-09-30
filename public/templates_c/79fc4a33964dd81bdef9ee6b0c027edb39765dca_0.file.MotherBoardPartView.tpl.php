<?php
/* Smarty version 3.1.30, created on 2020-09-06 18:00:17
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\MotherBoardPartView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f550791b1aae4_79283985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79fc4a33964dd81bdef9ee6b0c027edb39765dca' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\MotherBoardPartView.tpl',
      1 => 1599407612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f550791b1aae4_79283985 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-g">
    <div class="pure-u-xl-1">
        <table style="margin: auto;" id="tab_MOBO" class="pure-table pure-table-bordered pure-form pure-form-align center-margin">
            <thead>
                <tr>
                    <th>Producent</th>
                    <th>Karta Dźwiękowa</th>
                    <th>USB 3.0</th>
                    <th>Złącze M2</th>
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
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["karta_dzwiekowa"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["usb_3_0"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["zlacze_m2"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["cena"];?>
</td></tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    </div>
</div><?php }
}
