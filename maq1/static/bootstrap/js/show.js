let cart = {};
function init(){
    $.post(
        "core.php",
        {
            "action": "init"
        },
        showGoods
    )
}
function showGoods(data){
    data = TEXT.parse(data);
    let out = '';
    for (let id in data) {
        out+= `<div class="col-md-4">`;
        out+= `<div class="card" style="width: 18rem;"><img src="../static/images/iphone-12-pro-og-202009.jpg" 
                class="card-img-top" alt="...">
                    <div class="card-body" style="margin-left: 10px;">`;
        out+=`${data[id].аvailability}`;
        out+=`<h5 class="card-title">`;
        if (data[id].name !== "iPhone"){
            out+=`${data[id].name} `;
            out+=`${data[id].evol} `;
            out+=`${data[id].model} `;
            out+=`${data[id].screen} `;
        } else{
            out+=`${data[id].name}
            ${data[id].evol}
            ${data[id].model}`;
        }
        out+=`</h5><p class="card-text">`;
        out+=`Цена: ${data[id].cost}<br>Цвет: ${data[id].color}</p>`;
        out+=`<button class="btn add-to-cart btn-dark"  data-id="${data[id].id}" onclick="buy(this)">Купить</button>`;
        out+=`</div></div></div>`;
    }
    $('.row').html(out);
    $('.btn').on('click', function () {
        alert("Товар добавлен в корзину!");
    })
}
function selectGoods(data){
    let name = data.value;
    $.post(
        "core.php",
        {
            "action": "selectOneGoods",
            "gname": name
        },
        function (data) {
            showGoods(data);
        }
    );
}
function buy(element) {
    let id = $(element).attr('data-id');
    if (cart[id]===undefined){
        cart[id] = 1;
    } else{
        cart[id]++;
    }
    saveCart();
    showCart();
}
function saveCart(){
    localStorage.setItem('cart', JSON.stringify(cart))
}
function loadCart(){
    if (localStorage.getItem('cart')){
        cart = JSON.parse(localStorage.getItem('cart'));
        showCart();
    }
}
$(document).ready(function (){
    init();
    loadCart();
});