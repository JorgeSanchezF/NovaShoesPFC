function mensajeInicio(){
    alert("Has iniciado sesión");
}

function mensajeRegister(){
    alert("Tu usuario ha sido registrado correctamente");
}

let formularios = document.forms;

function validarCorreo(){
    let valor = formularios[0]['elements']['clase']['value'];
    let span = formularios[0].getElementsByTagName('label')[2].getElementsByTagName('span')[0];

    //Cuenta Bancaria: let expresion = /^ES\d{2}\s\d{4}\s\d{4}\s\d{2}\s\d{10}$/;

    //FECHA: let expresion = /^\d{1,2}[/-]\d{1,2}[/-]\d{4}$/;

    //URL: let expresion = /^http[s]?:[/]{2}w{3}\.\S+[.][a-z]{2,}$/;

    let expresion = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/

    // contraseña = /(?=.*[a-z])(?=.*\d{2})(?=.*[A-Z])(?=.*[-_+.@])(?=.*.{10,})/
    /*
    * REGLAS CONTRASEÑA: 
    *   - una mayuscula ✅
    *   - una minuscula ✅
    *   - dos digitos seguidos ✅
    *   - algun signo entre "-_+.@" ✅
    *   - Longitud mayor a 10 ✅
    */


    // 2. Comprobar expresion
    if(expresion.test(valor)){
        span.textContent = 'Correcto';
        span.classList.add('valid');
        span.classList.remove('invalid');
    }else {
        span.textContent = ' Correo Incorrecto ';
        span.classList.add('invalid');
        span.classList.remove('valid');
    }
}

function validarPasswd(){
    let valor = formularios[0]['elements']['contra']['value'];
    let span = formularios[0].getElementsByTagName('label')[1].getElementsByTagName('span')[0];

    //Cuenta Bancaria: let expresion = /^ES\d{2}\s\d{4}\s\d{4}\s\d{2}\s\d{10}$/;

    //FECHA: let expresion = /^\d{1,2}[/-]\d{1,2}[/-]\d{4}$/;

    //URL: let expresion = /^http[s]?:[/]{2}w{3}\.\S+[.][a-z]{2,}$/;

    // correo: let expresion = /^\w\S[@]\w\S[.]\w{2,}\D\S$/

    let expresion = /(?=.*[a-z])(?=.*\d{2})(?=.*[A-Z])(?=.*[-_+.@])(?=.*.{10,})/
    /*
    * REGLAS CONTRASEÑA: 
    *   - una mayuscula ✅
    *   - una minuscula ✅
    *   - dos digitos seguidos ✅
    *   - algun signo entre "-_+.@" ✅
    *   - Longitud mayor a 10 ✅
    */


    // 2. Comprobar expresion
    if(expresion.test(valor)){
        span.textContent = 'Correcto';
        span.classList.add('valid');
        span.classList.remove('invalid');
    }else {
        span.textContent = 'Contraseña Incorrecta ';
        span.classList.add('invalid');
        span.classList.remove('valid');
    }
}



































