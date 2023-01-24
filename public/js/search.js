var search = document.getElementById('search');
var products = document.querySelectorAll('.prod');
var productsName = document.querySelectorAll('.productsName');
var btn = document.getElementById('done');

search.addEventListener('keyup', e => {
    for (var i in products) {
        if (search.value == productsName[i].innerHTML) {
            products[i].classList.remove('hidden');
        } else if (search.value == '') {
            products[i].classList.remove('hidden');
        } else if (search.value != productsName[i].innerHTML)
            products[i].classList.add('hidden');
    }
})