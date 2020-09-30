{extends file="main.tpl"}

{block name=content}
    
<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="{$conf->action_url}NavigateLogIn"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do nawigatora</a>
</div>

<h2 class="content-head is-center">Koszyk</h2>

<div class="pure-g">
<div class="pure-u-1">
   <table style="margin: auto;" id="tab_zamowienia" class="pure-table pure-table-bordered pure-form pure-form-align">
        <thead>
            <tr>
                <tr><th colspan="4">Zamówione produkty</th></tr>
                <th>Producent</th>
                <th>Model</th>
                <th>Cena</th>
                <th>Opcje</th>
            </tr>           
        </thead>
        <tbody>
            {foreach $data as $d}
                {strip}
                    <tr>
                        <td>{$d["producent"]}</td>
                        <td>{$d["model"]}</td>
                        <td>{$d["cena"]}</td>
                        <td>
                            <a class="button-small pure-button button-warning"
                                onclick="confirmLink('{$conf->action_url}deleteFromSC/{$d['idtowar_zamowienia']}','Czy na pewno usunąć produkt z koszyka?')">Usuń z koszyka</a>
                        </td>
                    </tr>
                {/strip}
            {/foreach}
        </tbody>
    </table>
</div>       
</div>
 
{include file='messages.tpl'}

{if isset($expense->cenaKoszyka)}
	<h4>Do zapłaty:</h4>
	<p class="res">
	{$expense->cenaKoszyka}
	</p>
{/if}

{/block}