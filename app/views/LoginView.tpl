{extends file="main.tpl"}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}NavigateShow"  class="pure-menu-heading pure-menu-link">Powrót do sklepu</a>
</div>
    
<form action="{$conf->action_root}Login" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-med-12-24">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-11-24">
			<label for="id_login">Hasło: </label>
			<input id="id_hasło" type="password" name="pass"/><br />
		</div>
			<input type="submit" value="Zaloguj" class="pure-button"/>
	</fieldset>
</form>
        
<div style="text-align:center">
    <a class="pure-button button-rejestracja" href="{$conf->action_url}Register">Nie masz jeszcze konta? Zarejestruj się!</a>
</div>

{include file='messages.tpl'}

{/block}
