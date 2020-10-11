<?php
/* Smarty version 3.1.30, created on 2020-10-11 17:22:40
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\AdminView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f832340276f44_30277204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7752897bb805c487f41dc2c8aace96d05175c43f' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\AdminView.tpl',
      1 => 1602429758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f832340276f44_30277204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12989589425f832340276995_88144581', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_12989589425f832340276995_88144581 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
    
<h2 class="content-head is-center">Administracyjny nawigator sklepu</h2>

<div class="pure-g">
    
<div class="l-box-lrg pure-u-1 pure-u-med-10-24">
    
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</div>

<div class="l-box-lrg pure-u-1 pure-u-med-14-24">
    <div style="text-align:center">
        <a align="center" class="pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NewProduct">Dodaj produkt</a>
    </div>  
    &nbsp;
    <div style="text-align:center">
        <a align="center" class="pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
ProductView">Podgląd wszystkich produktów</a>
    </div>
    


</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
