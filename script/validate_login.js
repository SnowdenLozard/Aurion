const form   = document.getElementById('form');
const campos = document.querySelectorAll('.input');
const spans  = document.querySelectorAll('.span-required');

function setError(index){
    campos[index].classList.add('error');
    spans[index].classList.add('show');
    campos[index].setAttribute('aria-invalid', 'true');
}

function removeError(index){
    campos[index].classList.remove('error');
    spans[index].classList.remove('show');
    campos[index].removeAttribute('aria-invalid');
}

function emailValidate(){
    const email = campos[0];

    if (email.value.length === 0) {
        removeError(0);
        return;
    }

    if (!email.checkValidity()) {
        setError(0);
    } else {
        removeError(0);
    }
}

function mainPasswordValidate(){
    const password = campos[1];

    if (password.value.length === 0) {
        removeError(1);
        return;
    }

    if (password.value.length < 8) {
        setError(1);
    } else {
        removeError(1);
    }
}

form.addEventListener('submit', (e) => {
    emailValidate();
    mainPasswordValidate();

    if (document.querySelectorAll('.error').length > 0) {
        e.preventDefault();
    }
});
