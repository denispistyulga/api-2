<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script src="https://bootstraptema.ru/plugins/2016/easing/jquery.easing.min.js"></script>

<style>
    body{background-color:#222}
    .menu{
        float:left;
    }
    .menu{
        margin:4em 2em;
    }
    .box{
        position:absolute;
        top:-1200px;
        width:100%;
        color:#fff;
        margin:auto;
        padding:0px;
        z-index:999999;
        text-align:right;
        left:0;
    }
    a.boxclose{
        cursor: pointer;
        text-align: center;
        display: block;
        position: absolute;
        top: 46px;
        right: 320px;
    }
    .menu_box_list {
        display: inline-block;
        float: right;
        margin-right: 35em;
    }
    .menu_box_list ul li {
        display:inline-block;
    }
    .menu_box_list li a{
        color: #fff;
        font-size: 1.2em;
        font-weight:400;
        display: block;
        padding:0.5em 0.5em;
        text-decoration:none;
        text-transform: uppercase;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        letter-spacing: 0.1em;
    }
    .menu_box_list li a:hover,.menu_box_list ul li.active a{
        color:#E74C3C;
    }
    .menu_box_list ul {
        background:transparent;
        padding:50px;
    }
    .menu_box_list li a > i > img{
        vertical-align:middle;
        padding-right:10px;
    }
    @media (max-width:1280px){
        a.boxclose {
            right: 190px;
        }
        .menu_box_list {
            margin-right: 25em;
        }
    }
    @media (max-width:1024px){
        a.boxclose {
            right: 104px;
        }
        .menu_box_list {
            margin-right: 14em;
        }
    }
    @media (max-width:768px){
        .menu_box_list {
            margin-right: 3em;
        }
        a.boxclose {
            right: 28px;
            top:18px;
        }
        .menu_box_list ul li {
            display:block;
        }
        .menu_box_list ul {
            background:transparent;
            padding:1em 20em;
            margin:28px 0px;
            text-align:center;
        }
    }
    @media (max-width:640px){
        .menu_box_list ul {
            padding: 1em 15em;
        }
    }
    @media (max-width:480px){
        .menu_box_list ul {
            padding: 1em 9.5em;
        }
    }
    @media (max-width:320px){
        a.boxclose {
            right: 15px;
            top: 4px;
        }
        .menu_box_list ul {
            padding: 0em 5.2em;
            margin: 14px 0px;
        }
        .menu_box_list li a {
            padding: 0.4em 0.5em;
        }
        .menu_box_list {
            margin-right: 1em;
        }
    }
</style>

<div class="menu">
    <a href="#" id="activator"><img src="https://bootstraptema.ru/snippets/menu/2016/button/menu.png" alt="" /></a>
    <div class="box" id="box">
        <div class="box_content">
            <div class="menu_box_list">
                <ul>
                    <li class="active"><a href="#">Главная</a></li>
                    <li><a href="/index">Шаблоны</a></li>
                    <li><a href="#">Плагины</a></li>
                    <li><a href="#">Сниппеты</a></li>
                    <li><a href="#">Контакты</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <a class="boxclose" id="boxclose"><img src="https://bootstraptema.ru/snippets/menu/2016/button/close.png" alt="" /></a>
        </div>
    </div>


    <style>.payform-tinkoff-row{display:block;margin:1%;width:160px;}</style>
    <script src="https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js"></script>
    <form name="payform-tinkoff" onsubmit="pay(this); return false;">
        <input class="payform-tinkoff-row" type="hidden" name="terminalkey" value="TinkoffBankTest">
        <input class="payform-tinkoff-row" type="hidden" name="frame" value="true">
        <input class="payform-tinkoff-row" type="hidden" name="language" value="ru">
        <input class="payform-tinkoff-row" type="text" placeholder="Сумма заказа" name="amount" required>
        <input class="payform-tinkoff-row" type="text" placeholder="Номер заказа" name="order">
        <input class="payform-tinkoff-row" type="text" placeholder="Описание заказа" name="description">
        <input class="payform-tinkoff-row" type="text" placeholder="ФИО плательщика" name="name">
        <input class="payform-tinkoff-row" type="text" placeholder="E-mail" name="email">
        <input class="payform-tinkoff-row" type="text" placeholder="Контактный телефон" name="phone">
        <input class="payform-tinkoff-row" type="submit" value="Оплатить">
    </form>

    <script>
        var $ = jQuery.noConflict();
        $(function() {
            $('#activator').click(function(){
                $('#box').animate({'top':'0px'},500);
            });
            $('#boxclose').click(function(){
                $('#box').animate({'top':'-700px'},500);
            });
        });
    </script>
