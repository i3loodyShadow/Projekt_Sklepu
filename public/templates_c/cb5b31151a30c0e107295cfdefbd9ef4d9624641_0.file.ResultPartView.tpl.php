<?php
/* Smarty version 3.1.30, created on 2020-08-25 14:44:26
  from "D:\Xampp\htdocs\amelia_test\app\views\ResultPartView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f4507aa76b541_97970327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb5b31151a30c0e107295cfdefbd9ef4d9624641' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\amelia_test\\app\\views\\ResultPartView.tpl',
      1 => 1598359456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4507aa76b541_97970327 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-g">
    <div class="pure-u-xl-1">
        <table style="margin: auto;" id="tab_history" class="pure-table pure-table-bordered pure-form pure-form-align center-margin">
            <thead>
                <tr>
                    <th>Number of exchange</th>
                    <th>Amount</th>
                    <th>Cellar</th>
                    <th>Amount in PLN</th>
                    <th>Date of exchange</th>
                </tr>           
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['d']->value["idresult"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["amount"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["cellar"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["amountPLN"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["date"];?>
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
