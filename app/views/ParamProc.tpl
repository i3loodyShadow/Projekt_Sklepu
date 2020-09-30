<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-3-5">
<form action="{$conf->action_root}Register" method="post"  class="pure-form pure-form-aligned">
	<fieldset>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="id_email">E-mail: </label>
		<input id="id_email" type="text" placeholder="Email" name="email"/>
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-7-24">
		<label for="id_login">Login: </label>
		<input id="id_login" type="text" placeholder="Login" name="login"/>
        </div>
        <div class="l-box-lrg pure-u-1 pure-u-med-8-24">
		<label for="id_pass">Hasło: </label>
		<input id="id_pass" type="password" placeholder="Hasło" name="pass"/><br />
	</div>
        <div class="l-box-lrg pure-u-1 pure-u-med-1">
		<input type="submit" value="Zarejestruj" class="pure-button"/>
        </div>
	</fieldset>
</form>
</div>