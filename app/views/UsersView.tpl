{extends file="main.tpl"}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
    {if (\core\RoleUtils::inRole("admin"))}  
        <a href="{$conf->action_url}backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
    {/if}
</div>
    
        <p></p>

<div>
<form class="pure-form pure-form-stacked" action="{$conf->action_url}usersAccountsView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_root}usersAccountsPartView','tab_kont'); return false;">
	<legend>Wpisz poniżej e-mail aby wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="E-mail" name="emailSF" value="{$form->email}"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj po e-mailu</button>
	</fieldset>
    </form>
</div>	
                
{include file='messages.tpl'}


{/block}

{block name=productsTable}
<div id="tab_kont">
    {include file="UsersPartView.tpl"}
</div>
{/block}

{block name=footer}Dziękujemy za skorzystanie z naszego sklepu.{/block}