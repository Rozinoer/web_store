let cart={};
function init(){
    $.post(
        "core.php",
        {
            "action": "init"
        },
        loadCart
    )
}
function loadCart(data){
    if (localStorage.getItem('cart')){
        cart = JSON.parse(localStorage.getItem('cart'));
        showCart(data);
    } else {
        $('.cart').html('Корзина пуста');
    }
}
function showCart(data){
    let cost = 0;
    data = JSON.parse(data);
    let out = '';
    for (let key in cart){
        out+=`<div class="d-flex justify-content-around">`;
        out+=`<p>${data[key].product_code}</p> `;
        out+=`${data[key].name} `;//название
        out+=`${data[key].evol} `;//поколение
        out+=`${data[key].model} `;//модель
        out+=`${data[key].color}</p>`;
        out+=`<p>${cart[key]}</p>`;
        out+=`<p>${data[key].cost} ₽</p> `;
        out+=`</div>`;
        cost = cost + cart[key] * data[key].cost;
    }
    $('.cart-body').html(out);
    cost =cost + '₽';
    $('.cost').html(cost);
    $('.btn').on('click',function () {
        alert("Товары переданы в службу доставки!");
    })
    localStorage.clear();
    $(document).reload();
}
$(document).ready(function () {
    init();
})