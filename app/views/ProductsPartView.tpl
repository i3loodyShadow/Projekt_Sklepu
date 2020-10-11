<div class="pure-g">
<div class="pure-u-1">
   <table style="margin: auto;" id="tab_nazw" class="pure-table pure-table-bordered pure-form pure-form-align">
        <thead>
            <tr>
                <tr><th colspan="3">Dostępne produkty</th></tr>
                <th>Producent</th>
                <th>Model</th>
                <th>Opcje</th>
            </tr>           
        </thead>
        <tbody>
            {foreach $names as $n}
                {strip}
                    <tr>
                        <td>{$n["producent"]}</td>
                        <td>{$n["model"]}</td>
                        <td>
                            <a class="button-small pure-button button-secondary" href="{$conf->action_url}ProductDetails/{$n['idtowar']}">Szczegóły</a>
                            &nbsp;
                            {if \core\RoleUtils::inRole("admin")}        
                            <a class="button-small pure-button button-secondary" href="{$conf->action_url}ProductEdition/{$n['idtowar']}">Edytuj</a>
                                &nbsp;
                            <a class="button-small pure-button button-warning"
                                onclick="confirmLink('{$conf->action_url}productDelete/{$n['idtowar']}','Czy na pewno usunąć towar?')">Usuń</a>                                
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

        
