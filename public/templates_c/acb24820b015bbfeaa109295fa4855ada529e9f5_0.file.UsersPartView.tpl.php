<?php
/* Smarty version 3.1.30, created on 2020-10-04 19:23:21
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\UsersPartView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f7a05098f2628_62038945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acb24820b015bbfeaa109295fa4855ada529e9f5' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\UsersPartView.tpl',
      1 => 1601832200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7a05098f2628_62038945 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table style="margin: auto;" id="tab_kont" class="pure-table pure-table-bordered pure-form pure-form-align">
    <thead>
        <tr>
            <tr><th colspan="5">Konta</th></tr>
            <th>Id konta</th>
            <th>Login</th>
            <th>Hasło</th>
            <th>E-mail</th>
            <th>Opcje</th>
        </tr>           
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'n');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
?>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['n']->value["idkonto"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['n']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['n']->value["haslo"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['n']->value["email"];?>
</td><td><a class="button-small pure-button button-warning" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountDelete/<?php echo $_smarty_tpl->tpl_vars['n']->value['idkonto'];?>
','Czy na pewno usunąć konto tego użytkownika?')">Usuń</a>&nbsp;</td></tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
</table>


        
<?php }
}
