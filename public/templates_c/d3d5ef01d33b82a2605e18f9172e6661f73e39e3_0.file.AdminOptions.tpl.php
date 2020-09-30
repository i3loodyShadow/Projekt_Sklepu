<?php
/* Smarty version 3.1.30, created on 2020-09-19 15:01:24
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\AdminOptions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f660124105dd5_54205363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3d5ef01d33b82a2605e18f9172e6661f73e39e3' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\AdminOptions.tpl',
      1 => 1600520479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:ParamProc.tpl' => 1,
  ),
),false)) {
function content_5f660124105dd5_54205363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_295160855f660124105156_71018711', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_295160855f660124105156_71018711 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Logout"  class="pure-menu-heading pure-menu-link">Log out</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
</div>

<h2 class="content-head is-center">Administracyjny nawigator sklepu</h2>

<div class="pure-g">
    
<div class="l-box-lrg pure-u-1 pure-u-med-1">
    
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</div>

<div class="l-box-lrg pure-u-1 pure-u-med-1-5">
<form id="dodProc" class="pure-form pure-form-stacked" onclick="ajaxPostForm('dodProc','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dodajParamProc','procForm'); return false;">
    <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
</form>
</div> 

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">
<div id="procForm">
<?php $_smarty_tpl->_subTemplateRender("file:ParamProc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
</div>

</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
