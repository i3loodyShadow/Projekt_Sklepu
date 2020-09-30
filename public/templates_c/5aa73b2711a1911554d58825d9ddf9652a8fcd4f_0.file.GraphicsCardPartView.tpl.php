<?php
/* Smarty version 3.1.30, created on 2020-09-06 13:59:01
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\GraphicsCardPartView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f54cf05e4a169_53914502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aa73b2711a1911554d58825d9ddf9652a8fcd4f' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\GraphicsCardPartView.tpl',
      1 => 1599393066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f54cf05e4a169_53914502 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-g">
    <div class="pure-u-xl-1">
        <table style="margin: auto;" id="tab_KG" class="pure-table pure-table-bordered pure-form pure-form-align center-margin">
            <thead>
                <tr>
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
