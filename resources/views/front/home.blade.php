<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('description')">
    
        <title>courtcenter@ahilespelid</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/assets/css/app.css?<?=time();?>"/>
        <!-- Script -->
        <script src="//api.bitrix24.com/api/v1/"></script>
<script type="text/javascript">
BX24.init(function(){
    
    BX24.callMethod(
        "crm.deal.fields", {},  
        function(result) {
            if(result.error()) console.error(result.error());
            else console.log(result.data()['ID']);
        }
    );
    console.log(BX24.getDomain(), BX24.placement.info());
    ///*/ Сформируем запрос на встраивание ///*/
});
</script>
</head>
<body>
<header id="head"></header>
<section><div></div>
  <div class="bar">
    <div class="bar__body">
        <span class="bar__body_title">Инстанции</span>
        <div class="bar__body__list">
            <a href="/?tab=first_instance"><div class="bar__body__list_i">Суды-Первая</div></a>
            <a href="/?tab=courts_appeal"><div class="bar__body__list_i">Суды-Апелляционная</div></a>
            <a href="/?tab=courts_cassation"><div class="bar__body__list_i">Суды-Кассационная</div></a>
            <a href="/?tab=enforcement_proceedings"><div class="bar__body__list_i" style="line-height: 20px;">Исполнительное производство</div></a>
            <a href="/?tab=bankruptcy"><div class="bar__body__list_i">Банкротство</div></a>
            <a href="/?tab=mediation"><div class="bar__body__list_i">Медиация</div></a>
            <a href="/?tab=courts_resumption"><div class="bar__body__list_i" style="line-height: 20px;">Суды-Возобновление производства по делу</div></a>
        </div>
    </div>
  </div><div></div><div></div>
  <div>
    <div class="form"><?//pa($_REQUEST, 3);pa($_SERVER);?>
        <form action="/" method="post">
            <table>
                <tr>
                    <td><label for="name">Название сделки, внутренний номер</label></td>
                    <td><input type="text" id="name" name="name"></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="storoni">Стороны по делу</label></td>
                    <td><input type="text" id="storoni" name="storoni"></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="strategi">Стратегия</label></td>
                    <td><input type="text" id="strategi" name="strategi" placeholder="Стратегия"></td>
                    <td><span>11.04.2023</span></td>
                </tr>
                <tr>
                    <td><label for="undefine"></label></td>
                    <td><input type="hidden" name="_token" value="{{ csrf_token() }}" /></td>
                    <td><span></span></td>
                </tr>
        
            </table>
        <footer><a href="#submit" class="button">Выгрузить</a><button type="submit" type="button" class="button">Сохранить</button></footer>
        </form>
    </div>
  </div><div></div>
</section>
</body>