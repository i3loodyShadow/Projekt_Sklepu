{extends file="main.tpl"}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
    {if (\core\RoleUtils::inRole("admin"))}  
        <a href="{$conf->action_url}backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
    {else}
        <a href="{$conf->action_url}backFromService"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do nawigatora</a>
    {/if}
</div>
    
        <p></p>

<div>
<form class="pure-form pure-form-stacked" action="{$conf->action_url}ProductView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_root}ProductPartView','tab_prod'); return false;">
	<legend>Wpisz poniżej model produktu aby wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Model" name="productSF" value="{$product->product}"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj produkt</button>
	</fieldset>
    </form>
</div>	
                
{include file='messages.tpl'}


{/block}

{block name=productsTable}
<div id="tab_prod">
    {include file="ProductsPartView.tpl"}
</div>
{/block}

{block name=footer}Dziękujemy za skorzystanie z naszego sklepu.{/block}