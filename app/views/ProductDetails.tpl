{extends file="main.tpl"}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="{$conf->action_url}backToAdminNavigator"}Opcje_administratora  class="pure-menu-heading pure-menu-link">Powrót do administracyjnego nawigatora</a>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-1">
{include file='messages.tpl'}
</div>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-1-2">
        <ul>
            <li>
                <div class="l-box-lrg pure-u-1 pure-u-med-1">
                    <form class="pure-form">
                        <label>Kategoria towaru</label>
                        <input type="text" value="{$grTow}" readonly="" />
                    </form>
                </div>
            </li>
            <li>
                <div class="l-box-lrg pure-u-1 pure-u-med-1">    
                    <form class="pure-form">
                        <label>Producent</label>
                        <input type="text" value="{$prod}" readonly="" />
                    </form>
                </div>
            </li>
            <li>        
                <div class="l-box-lrg pure-u-1 pure-u-med-1"> 
                    <form class="pure-form">
                        <label>Model</label>
                        <input type="text" value="{$mod}" readonly="" />
                    </form>
                </div>
            </li>
        </ul>
    </div>                
    <div class="l-box-lrg pure-u-1 pure-u-med-1-2">
        <table style="margin: auto;" id="tab_parametrow" class="pure-table pure-table-bordered pure-form pure-form-align">
            <thead>
                <tr>
                    <tr><th colspan="2">Parametry produktu</th></tr>
                    <th>Nazwa Parametrów</th>
                    <th>Wartość Parametrów</th>    
            </thead>
            <tbody>
                {foreach $data as $d}
                    {strip}
                        <tr>
                            <td>{$d["nazwa_parametru"]}</td>
                            <td>{$d["wartosc_parametrow"]}</td>
                        </tr>
                    {/strip}
                {/foreach}
            </tbody>
        </table>
    </div>        
</div>
    

{/block}