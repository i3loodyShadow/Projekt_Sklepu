{extends file="main.tpl"}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="{$conf->action_url}backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
</div>
    
<p>
<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-1">
        
<form action="{$conf->action_root}HDSave" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-med-5-24">
		<label for="producent">Wpisz producenta</label>
                <input id="producent" type="text" placeholder="Producent" name="producent" value="{$form->producent}">
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-4-24">
		<label for="model">Wpisz model</label>
                <input id="model" type="text" placeholder="Model" name="model" value="{$form->model}">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-5-24">
		<label for="pojemnoscPamieci">Wpisz pojemnosc pamieci</label>
                <input id="pojemnoscPamieci" type="text" placeholder="Pojemność Pamięci" name="pojemnoscPamieci" value="{$form->pojemnoscPamieci}">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-4-24">
		<label for="typ">Wpisz typ</label>
                <input id="typ" type="text" placeholder="Typ" name="typ" value="{$form->typ}">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-5-24">
		<label for="cena">Wpisz cenę</label>
                <input id="cena" type="text" placeholder="Cena" name="cena" value="{$form->cena}">
	</div>

        <div class="l-box-lrg pure-u-1 pure-u-med-1">
		<input type="submit" value="Zapisz" class="pure-button"/>
        </div>
	</fieldset>
        <input type="hidden" name="id" value="{$form->id}">
</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-1">
{include file='messages.tpl'}
</div>

</div>
{/block}


{block name=footer}Panel administracyjny.{/block}