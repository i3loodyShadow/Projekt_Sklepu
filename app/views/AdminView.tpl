{extends file="main.tpl"}

{block name=content}    
    
<h2 class="content-head is-center">Administracyjny nawigator sklepu</h2>

<div class="pure-g">
    
<div class="l-box-lrg pure-u-1 pure-u-med-10-24">
    
{include file='messages.tpl'}

</div>

<div class="l-box-lrg pure-u-1 pure-u-med-14-24">
    <div style="text-align:center">
        <a align="center" class="pure-button" href="{$conf->action_url}NewProduct">Dodaj produkt</a>
    </div>  
    &nbsp;
    <div style="text-align:center">
        <a align="center" class="pure-button" href="{$conf->action_url}ProductView">Podgląd wszystkich produktów</a>
    </div>
    


</div>

</div>

{/block}