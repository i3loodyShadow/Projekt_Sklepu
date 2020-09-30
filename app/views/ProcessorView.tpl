{extends file="main.tpl"}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="{$conf->action_url}backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
        <a href="{$conf->action_url}NewProcessor"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Dodaj procesor</a>
</div>
    
        <p></p>

<div>
<form class="pure-form pure-form-stacked" action="{$conf->action_url}ProcessorView"></form>
</div>

<div class="center-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_root}ProcessorPartView','tab_proc'); return false;">
	<legend>Wpisz poniżej model procesora aby wyszukać</legend>
	<fieldset>
		<input type="text" placeholder="Model" name="productSF" value="{$product->product}"/><br/>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj procesor</button>
	</fieldset>
    </form>
</div>	              
                
{include file='messages.tpl'}


{/block}

{block name=processorsTable}
<div id="tab_proc">
            {include file="ProcessorPartView.tpl"}
</div>
{/block}

{block name=footer}Thank You for using my (unfortunately outdated) cellar calculator! Work on improvement is ongoing.{/block}