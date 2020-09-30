{extends file="main.tpl"}

{block name=content}    
    
<h2 class="content-head is-center">Administracyjny nawigator sklepu</h2>

<div class="pure-g">
    
<div class="l-box-lrg pure-u-1 pure-u-med-10-24">
    
{include file='messages.tpl'}

</div>

<div class="l-box-lrg pure-u-1 pure-u-med-14-24">
    <div class="pure-menu-horizontal">
        <li class="pure-menu-selected"><a class="pure-button" href="{$conf->action_url}ProductView">Podgląd wszystkich produktów</a>
        <li></li>
        <li class="pure-menu-selected"><a class="pure-button" href="{$conf->action_url}NewProcessor">Dodaj procesor</a>
        <li></li>
        <li class="pure-menu-selected"><a class="pure-button" href="{$conf->action_url}NewGC">Dodaj Kartę Graficzną</a>
        <li></li>
        <li class="pure-menu-selected"><a class="pure-button" href="{$conf->action_url}NewMoBo">Dodaj Płytę Główną</a>
        <li></li>
        <p><li class="pure-menu-selected"><a class="pure-button" href="{$conf->action_url}NewRAM">Dodaj Pamięć RAM</a>
        <li></li>
        <li class="pure-menu-selected"><a class="pure-button" href="{$conf->action_url}NewHD">Dodaj Dysk</a>    
        <li></li>
        <li class="pure-menu-selected"><a class="pure-button" href="{$conf->action_url}NewPS">Dodaj Zasilacz</a>
        <li></li>
        <li class="pure-menu-selected"><a class="pure-button" href="{$conf->action_url}NewCase">Dodaj Obudowę</a>
    </div>
</div>

</div>

{/block}