{extends file="main.tpl"}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="{$conf->action_url}backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-1">
{include file='messages.tpl'}
</div>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-12-24">    
<form class="pure-form">
    <label>Producent</label>
    <input type="text" value="{$prod}" readonly="" />
</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-11-24"> 
<form class="pure-form">
    <label>Model</label>
    <input type="text" value="{$mod}" readonly="" />
</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-1">    
<form action="{$conf->action_root}addParameter" method="post"  class="pure-form pure-form-aligned">
            <div class="l-box-lrg pure-u-1 pure-u-med-9-24">
                    <label for="insertedValue">Wpisz wartość parametru</label>
                    <p>
                        <input id="model" type="text" placeholder="Wartość parametru" name="insertedValue">
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-med-4-24">
            <label for="op">Wybierz parametr</label>
            <p>
            <select id="op" name="op">
                {foreach $param_names as $pn}
                    {strip}
                        <option>{$pn}</option>
                    {/strip}
                {/foreach}
            </select>
            </div>
            <div class="l-box-lrg pure-u-1 pure-u-med-3-24">
                <label>Naciśnij aby zapisać</label>
                <p>
                <input type="submit" value="Dodaj" class="pure-button"/>
            </div>
            <input type="hidden" name="id" value="{$form->id}">      
</form>
</div>

</div>
{/block}


{block name=footer}Panel administracyjny.{/block}