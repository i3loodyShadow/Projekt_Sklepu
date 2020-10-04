<?php
/* Smarty version 3.1.30, created on 2020-10-04 19:02:09
  from "D:\Xampp\htdocs\Projekt_Sklepu\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f7a0011c1dda6_07531071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c16b4834bb3b42595c8a7c1b9b3a7ea88a28248' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Projekt_Sklepu\\app\\views\\templates\\main.tpl',
      1 => 1601830834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7a0011c1dda6_07531071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">      
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Deafult description" : $tmp);?>
">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Deafult title" : $tmp);?>
</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main-grid.css">
    <!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/layouts/marketing.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/grids-responsive-min.css" />
    
<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style_hide_intro.css">
<?php }?>
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/softscroll.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/scrollbooster.min.js"><?php echo '</script'; ?>
>
        
</head>
<body>

<div>
    <style scoped="">

        .button-light_blue {
            color: #fff;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-logowanie {
            background: rgb(128, 0, 128);
        }

        .button-rejestracja {
            background: rgb(0, 100, 0);
        }
        .button-maroon{
            background: rgb(128, 0, 0);
        }
    </style>
</div>    
    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19502085465f7a0011c1aed8_02922973', 'header');
?>

        
<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Deafult page title" : $tmp);?>
</h1>
        <t1 class="splash-subhead">
             <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Deafult description" : $tmp);?>

        </t1>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Do sklepu</a>
        </p>
    </div>
</div>

<div class="content-wrapper">
    <div id="app_content" class="content">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10251145565f7a0011c1c904_16013079', 'content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9702980415f7a0011c1d0d7_97220550', 'productsTable');
?>


    </div>

    <div class="footer l-box is-center">
		<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1859655435f7a0011c1d846_35893024', 'footer');
?>

		</p>
        <p>Widok oraz szablon zaczerpnięty z: <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (Autor storny: Eryk Tyndel)</p>
    </div>

</div>


</body>
</html><?php }
/* {block 'header'} */
class Block_19502085465f7a0011c1aed8_02922973 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
    
<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Deafult page title" : $tmp);?>
</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Do góry strony</a></li>
            <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) < 1) {?>
            <li class="pure-menu-selected"><a class="button-rejestracja pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Register">Zarejestruj</a></li>
            <?php }?>
            <li></li>
            <?php if (\core\RoleUtils::inRole("user")) {?>
            <li class="pure-menu-selected"><a class="button-maroon pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ShoppingCartView">Koszyk</a></li>
            <?php }?>
            <?php if (\core\RoleUtils::inRole("admin")) {?>
            <li class="pure-menu-selected"><a class="button-maroon pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
usersAccountsView">Zarządzanie kontami</a></li>
            <?php }?>
            <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
            <li class="pure-menu-selected"><a class="button-light_blue pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
accountEdit">Ustawienia Konta</a></li>          
            <li class="pure-menu-selected"><a class="button-logowanie pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Logout">Wyloguj</a></li>
            <li></li>
            <?php } else { ?>
            <li class="pure-menu-selected"><a class="button-logowanie pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Login">Zaloguj</a></li>
            <li></li>
            <?php }?>
        </ul>
    </div>
</div>
        
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_10251145565f7a0011c1c904_16013079 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślny stuff <?php
}
}
/* {/block 'content'} */
/* {block 'productsTable'} */
class Block_9702980415f7a0011c1d0d7_97220550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'productsTable'} */
/* {block 'footer'} */
class Block_1859655435f7a0011c1d846_35893024 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Dziękujemy za skorzystanie z naszego sklepu! <?php
}
}
/* {/block 'footer'} */
}
