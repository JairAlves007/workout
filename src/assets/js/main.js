var input = document.querySelector('.input-field input[type=password]');
var icon = document.getElementById('icon');

icon.onclick = () => {
    if(icon.classList.contains('fa-eye')){
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');

        input.type = "text";
    } else if(icon.classList.contains('fa-eye-slash')){
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');

        input.type = "password";
    }
};