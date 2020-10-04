<table style="margin: auto;" id="tab_kont" class="pure-table pure-table-bordered pure-form pure-form-align">
    <thead>
        <tr>
            <tr><th colspan="5">Konta</th></tr>
            <th>Id konta</th>
            <th>Login</th>
            <th>Hasło</th>
            <th>E-mail</th>
            <th>Opcje</th>
        </tr>           
    </thead>
    <tbody>
        {foreach $names as $n}
            {strip}
                <tr>
                    <td>{$n["idkonto"]}</td>
                    <td>{$n["login"]}</td>
                    <td>{$n["haslo"]}</td>
                    <td>{$n["email"]}</td>
                    <td>       
                        <a class="button-small pure-button button-warning"
                            onclick="confirmLink('{$conf->action_url}accountDelete/{$n['idkonto']}','Czy na pewno usunąć konto tego użytkownika?')">Usuń</a>                                
                            &nbsp;
                    </td>
                </tr>
            {/strip}
        {/foreach}
    </tbody>
</table>


        
