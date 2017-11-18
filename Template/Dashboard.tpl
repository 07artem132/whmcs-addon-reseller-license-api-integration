<style>
    table.form {
        border: none;
    }
</style>
{foreach from=$allow_module key=Module item=Parametr}
    <div class="panel-group" id="collapse-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#collapse-group" href="#{$Module}" aria-expanded="false"
                       class="collapsed">{$Parametr->title}</a>
                </h4>
            </div>
            <div id="{$Module}" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
                <table class="form" width="100%" border="0" cellspacing="2" cellpadding="3">
                    <tbody>
                    {foreach from=$Parametr key=Name item=Value}
                        <tr>
                            <td class="fieldlabel">{$Name}:</td>
                            <td class="fieldarea">{$Value}</td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
                <div style="text-align: center;padding-bottom: 15px;">
                    <a href="{$basheURL}&page=enabletelemetry&module={$Module}" style="text-align: center; color:white;"
                       class="btn btn-info">
                        Включить режим отладки (будет отправляться телеметрия)
                    </a>
                </div>
            </div>
        </div>
    </div>
{/foreach}
<div style="text-align: center;padding-bottom: 15px;">
    <a href="{$basheURL}&page=clearcache" style="text-align: center; color:white;"
       class="btn btn-danger">
        Очистить кеш (удалить все локальные данные о лицениях)
    </a>
</div>