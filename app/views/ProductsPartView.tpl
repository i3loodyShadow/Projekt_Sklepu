<div class="pure-g">
<div class="pure-u-1-2">
   <table style="margin: auto;" id="tab_nazw" class="pure-table pure-table-bordered pure-form pure-form-align">
        <thead>
            <tr>
                <tr><th colspan="4">Dostępne produkty</th></tr>
                <th>Id towaru</th>
                <th>Producent</th>
                <th>Model</th>
                <th>Opcje</th>
            </tr>           
        </thead>
        <tbody>
            {foreach $names as $n}
                {strip}
                    <tr>
                        <td>{$n["idtowar"]}</td>
                        <td>{$n["producent"]}</td>
                        <td>{$n["model"]}</td>
                        <td>
                            {if \core\RoleUtils::inRole("admin")}        
                            <a class="button-small pure-button button-secondary" href="{$conf->action_url}productEdit/{$n['idtowar']}">Edytuj</a>
                                &nbsp;
                            <a class="button-small pure-button button-warning"
                                onclick="confirmLink('{$conf->action_url}productDelete/{$n['idtowar']}','Czy na pewno usunąć towar?')">Usuń</a>                                
                                &nbsp;
                            {else}
                            <a class="button-small pure-button button-secondary" href="{$conf->action_url}addToShoppingCart/{$n['idtowar']}">Dodaj do koszyka</a>
                            {/if}
                        </td>
                    </tr>
                {/strip}
            {/foreach}
        </tbody>
    </table>
</div>

<div class="pure-u-1-2">
    <table style="margin: auto;" id="tab_parametrow" class="pure-table pure-table-bordered pure-form pure-form-align">
        <thead>
            <tr>
                <tr><th colspan="4">Parametry produktów</th></tr>
                <th>Id towaru</th>
                <th>Nazwa Parametrów</th>
                <th>Wartość Parametrów</th>
                     
        </thead>
        <tbody>
            {foreach $data as $d}
                {strip}
                    <tr>
                        <td>{$d["idtowar"]}</td>
                        <td>{$d["nazwa_parametru"]}</td>
                        <td>{$d["wartosc_parametrow"]}</td>
                    </tr>
                {/strip}
            {/foreach}
        </tbody>
    </table>
</div>
</div>
        
