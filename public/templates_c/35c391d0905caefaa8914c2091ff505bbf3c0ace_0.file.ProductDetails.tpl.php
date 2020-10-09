<?php
/* Smarty version 3.1.30, created on 2020-10-09 13:37:09
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\ProductDetails.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f804b65979bd5_80185718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35c391d0905caefaa8914c2091ff505bbf3c0ace' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\ProductDetails.tpl',
      1 => 1602243428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f804b65979bd5_80185718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13582905115f804b65979627_37719271', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_13582905115f804b65979627_37719271 extends Smarty_Internal_Block
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
    <div class="l-box-lrg pure-u-1 pure-u-med-1-2">
        <ul>
            <li>
                <div class="l-box-lrg pure-u-1 pure-u-med-1">
                    <form class="pure-form">
                        <label>Kategoria towaru</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['grTow']->value;?>
" readonly="" />
                    </form>
                </div>
            </li>
            <li>
                <div class="l-box-lrg pure-u-1 pure-u-med-1">    
                    <form class="pure-form">
                        <label>Producent</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['prod']->value;?>
" readonly="" />
                    </form>
                </div>
            </li>
            <li>        
                <div class="l-box-lrg pure-u-1 pure-u-med-1"> 
                    <form class="pure-form">
                        <label>Model</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" readonly="" />
                    </form>
                </div>
            </li>
        </ul>
    </div>                
    <div class="l-box-lrg pure-u-1 pure-u-med-1-2">
        <table style="margin: auto;" id="tab_parametrow" class="pure-table pure-table-bordered pure-form pure-form-align">
            <thead>
                <tr>
                    <tr><th colspan="2">Parametry produktu</th></tr>
                    <th>Nazwa Parametrów</th>
                    <th>Wartość Parametrów</th>    
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['d']->value["nazwa_parametru"];?>
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
    

<?php
}
}
/* {/block 'content'} */
}
