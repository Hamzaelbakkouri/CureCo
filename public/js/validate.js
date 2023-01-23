var count = 0;

const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');

// form.addEventListener('submit', (e) => {
//     e.preventDefault();

//     login();
// });

function login(e) {

    e.preventDefault();
    

    const emailValue =  email.value.trim();
    const passwordValue = password.value.trim();


    const isEmailValid = validateEmail(emailValue);

    if(isEmailValid){

        form.submit();
    }

    
}


function setErrorFor(input, message){
    const formControle = input.parentElement;
    const small = formControle.querySelector('small');
    small.innerText = message;
    formControle.className = 'form-controle error';
}


function validateEmail(email){

    const regExp = /^([a-zA-Z0-9-_.]+)@([a-zA-Z0-9]+).([a-zA-Z]{2,10})(.[a-zA-Z]{2,8})?$/

    if (email === "") {

        return false;

    } else if (!(regExp.test(email))) {

        return false;

    } else {

        return true;

    }
}