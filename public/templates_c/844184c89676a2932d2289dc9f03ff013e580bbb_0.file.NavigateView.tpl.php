<?php
/* Smarty version 3.1.30, created on 2020-09-28 20:51:56
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\NavigateView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f7230cc3db161_18014540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '844184c89676a2932d2289dc9f03ff013e580bbb' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\NavigateView.tpl',
      1 => 1601319113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f7230cc3db161_18014540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12598922145f7230cc3dad66_67599075', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_12598922145f7230cc3dad66_67599075 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  

<h2 class="content-head is-center">Sklep elektroniczny</h2>

<div style="text-align:center">
<a align="center" class="pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
ProductView">Zoabcz produkty</a>
</div>

<div class="pure-g">   
<div class="l-box-lrg pure-u-1 pure-u-med-1">
    
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
