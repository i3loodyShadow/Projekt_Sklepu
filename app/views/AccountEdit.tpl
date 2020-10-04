{extends file="main.tpl"}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="{$conf->action_url}backFromService"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
        <a href="{$conf->action_url}deleteAccount"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Usuń konto</a>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-1">
    {include file='messages.tpl'}
</div>

    <form action="{$conf->action_root}passEdit" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-lg-8-24">
		<label for="stareHaslo">Wpisz stare hasło</label>
                <input id="stareHaslo" type="password" placeholder="Stare Hasło" name="stareHaslo">
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-lg-7-24">
		<label for="noweHaslo">Wpisz nowe hasło</label>
                <input id="noweHaslo" type="password" placeholder="Nowe Hasło" name="noweHaslo">
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-lg-8-24">
		<label for="powtHaslo">Powtórz hasło</label>
                <input id="powtHaslo" type="password" placeholder="Powtórz hasło" name="powtHaslo">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-lg-1">
		<input type="submit" value="Zapisz" class="pure-button"/>
        </div>
        </fieldset>
    </form>
        
    <form action="{$conf->action_root}emailEdit" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="email">Obecny email</label>
                <input id="email" type="text" placeholder="Email" name="email" >
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-7-24">
		<label for="nowyEmail">Wpisz nowy email</label>
                <input id="nowyEmail" type="text" placeholder="Nowy email" name="nowyEmail">
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="powtEmail">Powtórz email</label>
                <input id="powtEmail" type="text" placeholder="Powtórz email" name="powtEmail">
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-1">
		<input type="submit" value="Zapisz" class="pure-button"/>
        </div>
        </fieldset>
    </form>


{/block}