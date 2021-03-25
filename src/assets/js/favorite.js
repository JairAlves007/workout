var forms = document.querySelectorAll('.favorite');
var icons = document.querySelectorAll('.favorite #icon_fav');
var inputs = document.querySelectorAll('#id_fav');
var ids = [];

for(let i = 0; i < inputs.length; i++){
    ids.push(inputs[i].value);
}

for(let i = 0; i < forms.length; i++){
    forms[i].onsubmit = () => {
        if(icons[i].classList.contains('fa-heart-o')){
            
            icons[i].classList.remove('fa-heart-o');
            icons[i].classList.add('fa-heart');
            icons[i].setAttribute('title', 'Remover Dos Favoritos');

            $.ajax({
                url: 'controller/adicionarFavoritos.php',
                method: 'POST',
                data: {
                    id: ids[i]
                }
            })
        } else if(icons[i].classList.contains('fa-heart')) {

            icons[i].classList.remove('fa-heart');
            icons[i].classList.add('fa-heart-o');
            icons[i].setAttribute('title', 'Adicionar Aos Favoritos');

            $.ajax({
                url: 'controller/removerFavoritos.php',
                method: 'POST',
                data: {
                    id: ids[i]
                }
            })
        }
    }

}

$('.favorite').submit((e) => {
    e.preventDefault();
});