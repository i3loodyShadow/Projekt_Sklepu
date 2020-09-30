<!doctype html>
<html lang="pl">      
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$page_description|default:"Deafult description"}">

    <title>{$page_title|default:"Deafult title"}</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="{$conf->app_url}/css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="{$conf->app_url}/css/main-grid.css">
    <!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="{$conf->app_url}/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="{$conf->app_url}/css/layouts/marketing.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="{$conf->app_url}/css/style.css">
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/grids-responsive-min.css" />
    
{if $hide_intro }
    <link rel="stylesheet" href="{$conf->app_url}/css/style_hide_intro.css">
{/if}
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="{$conf->app_url}/js/jquery.min.js"></script>
	<script src="{$conf->app_url}/js/softscroll.js"></script>
        <script src="{$conf->app_url}/js/functions.js"></script>
        <script src="{$conf->app_url}/js/scrollbooster.min.js"></script>
        
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
        .button-koszyk{
            background: rgb(128, 0, 0);
        }
    </style>
</div>    
    
{block name=header}    
    
<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">{$page_title|default:"Deafult page title"}</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Do góry strony</a></li>
            {if count($conf->roles)<1}
            <li class="pure-menu-selected"><a class="button-rejestracja pure-button" href="{$conf->action_root}Register">Zarejestruj</a></li>
            {/if}
            <li></li>
            {if \core\RoleUtils::inRole("user")}
            <li class="pure-menu-selected"><a class="button-koszyk pure-button" href="{$conf->action_root}ShoppingCartView">Koszyk</a></li>
            {/if}
            {if count($conf->roles)>0}
            <li class="pure-menu-selected"><a class="button-logowanie pure-button" href="{$conf->action_root}Logout">Wyloguj</a></li>
            <li></li>
            {else}
            <li class="pure-menu-selected"><a class="button-logowanie pure-button" href="{$conf->action_root}Login">Zaloguj</a></li>
            <li></li>
            {/if}
        </ul>
    </div>
</div>
        
{/block}
        
<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">{$page_title|default:"Deafult page title"}</h1>
        <t1 class="splash-subhead">
             {$page_description|default:"Deafult description"}
        </t1>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Do sklepu</a>
        </p>
    </div>
</div>

<div class="content-wrapper">
    <div id="app_content" class="content">

{block name=content} Domyślny stuff {/block}


{block name=productsTable} {/block}

    </div>

    <div class="footer l-box is-center">
		<p>
{block name=footer} Dziękujemy za skorzystanie z naszego sklepu! {/block}
		</p>
        <p>Widok oraz szablon zaczerpnięty z: <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (Autor storny: Eryk Tyndel)</p>
    </div>

</div>


</body>
</html>