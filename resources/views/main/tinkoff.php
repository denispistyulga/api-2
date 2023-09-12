<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
<!--        <form class="form-inline my-2 my-lg-0">-->
<!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--        </form>-->
    </div>
</nav>










<style>.payform-tinkoff-row{display:block;margin:1%;width:160px;}</style>
<script src="https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js"></script>
<form name="payform-tinkoff" onsubmit="pay(this); return false;">
    <input class="payform-tinkoff-row" type="hidden" name="terminalkey" value="1694163947287">
    <input class="payform-tinkoff-row" type="hidden" name="frame" value="true">
    <input class="payform-tinkoff-row" type="hidden" name="language" value="ru">
    <input class="payform-tinkoff-row" type="text" placeholder="Сумма заказа" name="amount" value="1" required>
    <input class="payform-tinkoff-row" type="text" placeholder="Номер заказа" name="order" value="Номер заказа настоящего  <?=time()?>">
    <input class="payform-tinkoff-row" type="text" placeholder="Описание заказа" name="description" value="Описание заказа настоящего  <?=time()?>">
    <input class="payform-tinkoff-row" type="text" placeholder="ФИО плательщика" name="name" value="ФИО  <?=time()?>">
    <input class="payform-tinkoff-row" type="text" placeholder="E-mail" name="email" value="it@sispp.ru">
    <input class="payform-tinkoff-row" type="text" placeholder="Контактный телефон" name="phone" value="<?=time()?>">

    <input class="payform-tinkoff-row" type="hidden" name="receipt" value="">

<!--    <input class="payform-tinkoff-row" type="submit" value="Оплатить">-->
    <input class="payform-tinkoff-row" type="button" onclick="tPayformFunction(this)"  value="Оплатить">
</form>





<script type="text/javascript">
    function tPayformFunction(target) {
        let form = target.parentElement;
        let name = form.description.value || "Оплата";
        let amount = form.amount.value;
        let email = form.email.value;
        let phone = form.phone.value;

        if (amount && email && phone) {
            form.receipt.value = JSON.stringify({
                "Email": email,
                "Phone": phone,
                "EmailCompany": "it@sispp.ru",
                "Taxation": "patent",
                "Items": [
                    {
                        "Name": name,
                        "Price": amount + '00',
                        "Quantity": 1.00,
                        "Amount": amount + '00',
                        "PaymentMethod": "full_prepayment",
                        "PaymentObject": "service",
                        "Tax": "none"
                    }
                ]
            });
            pay(form);
        } else alert("Не все обязательные поля заполнены")
        return false;
    }
</script>
