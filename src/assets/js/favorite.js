var formsFavorite = document.querySelectorAll('.favorite');
var iconsFavorite = document.querySelectorAll('.favorite #icon_fav');
var inputsFavorite = document.querySelectorAll('#id_fav');
var idsFavorite = [];

for(let i = 0; i < inputsFavorite.length; i++){
    idsFavorite.push(inputsFavorite[i].value);
}

for(let i = 0; i < formsFavorite.length; i++){
    formsFavorite[i].onsubmit = () => {
        if(iconsFavorite[i].classList.contains('fa-heart-o')){
            
            iconsFavorite[i].classList.remove('fa-heart-o');
            iconsFavorite[i].classList.add('fa-heart');
            iconsFavorite[i].setAttribute('title', 'Remover Dos Favoritos');

            $.ajax({
                url: 'controller/adicionarFavoritos.php',
                method: 'POST',
                data: {
                    id: idsFavorite[i]
                }
            })
        } else if(iconsFavorite[i].classList.contains('fa-heart')) {

            iconsFavorite[i].classList.remove('fa-heart');
            iconsFavorite[i].classList.add('fa-heart-o');
            iconsFavorite[i].setAttribute('title', 'Adicionar Aos Favoritos');

            $.ajax({
                url: 'controller/removerFavoritos.php',
                method: 'POST',
                data: {
                    id: idsFavorite[i]
                }
            })
        }
    }

}

$('.favorite').submit((e) => {
    e.preventDefault();
});