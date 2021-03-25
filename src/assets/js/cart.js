var formsCart = document.querySelectorAll('.cart');
var iconsCart = document.querySelectorAll('.cart #icon_cart');
var inputsCart = document.querySelectorAll('#id_cart');
var idsCart = [];

for(let i = 0; i < inputsCart.length; i++){
    idsCart.push(inputsCart[i].value);
}

for(let i = 0; i < formsCart.length; i++){
    formsCart[i].onsubmit = () => {
        if(iconsCart[i].classList.contains('fa-cart-plus')){
            
            iconsCart[i].classList.remove('fa-cart-plus');
            iconsCart[i].classList.add('fa-shopping-cart');
            iconsCart[i].setAttribute('title', 'Remover Do Carrinho');

            $.ajax({
                url: 'controller/adicionarCarrinho.php',
                method: 'POST',
                data: {
                    id: idsCart[i]
                }
            })
        } else if(iconsCart[i].classList.contains('fa-shopping-cart')) {

            iconsCart[i].classList.remove('fa-shopping-cart');
            iconsCart[i].classList.add('fa-cart-plus');
            iconsCart[i].setAttribute('title', 'Adicionar Ao Carrinho');

            $.ajax({
                url: 'controller/removerCarrinho.php',
                method: 'POST',
                data: {
                    id: idsCart[i]
                }
            })
        }
    }
}

$('.cart').submit((e) => {
    e.preventDefault();
});