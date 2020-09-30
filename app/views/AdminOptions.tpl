{extends file="main.tpl"}

{block name=content}
    
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}Logout"  class="pure-menu-heading pure-menu-link">Log out</a>
        <a href="{$conf->action_url}backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
</div>

<h2 class="content-head is-center">Administracyjny nawigator sklepu</h2>

<div class="pure-g">
    
<div class="l-box-lrg pure-u-1 pure-u-med-1">
    
{include file='messages.tpl'}

</div>

<div class="l-box-lrg pure-u-1 pure-u-med-1-5">
<form id="dodProc" class="pure-form pure-form-stacked" onclick="ajaxPostForm('dodProc','{$conf->action_root}dodajParamProc','procForm'); return false;">
    <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
</form>
</div> 

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">
<div id="procForm">
{include file="ParamProc.tpl"}
</div>
</div>

</div>

</div>

{/block}