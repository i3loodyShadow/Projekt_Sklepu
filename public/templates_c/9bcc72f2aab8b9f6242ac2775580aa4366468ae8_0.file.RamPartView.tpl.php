<?php
/* Smarty version 3.1.30, created on 2020-09-06 14:49:48
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\RamPartView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f54daec889317_41197050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bcc72f2aab8b9f6242ac2775580aa4366468ae8' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\RamPartView.tpl',
      1 => 1599396246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f54daec889317_41197050 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-g">
    <div class="pure-u-xl-1">
        <table style="margin: auto;" id="tab_HD" class="pure-table pure-table-bordered pure-form pure-form-align center-margin">
            <thead>
                <tr>
                    <th>Producent</th>
                    <th>Pojemność</th>
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
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["pojemnosc"];?>
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
