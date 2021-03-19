/**
 * validate the password before validation
 */
export function validatePass()  {
    let msg;
    let token = 0;
    const elem = document.getElementById("passwordRegistration");
    let str = elem.value;
    if (str.match( /[0-9]/g)){
        colorGreen("number");
    }
    else if (str.match( /[A-Z]/g)){
        colorGreen("maj");
    }
    else if (str.match(/[a-z]/g)){
        colorGreen("min");
    }
    else if (str.match( /[^a-zA-Z\d]/g)){
        colorGreen('char');
    }
    else if (str.length >= 10) {
        colorGreen("length");
    }

    if (str.match( /[0-9]/g) &&
        str.match( /[A-Z]/g) &&
        str.match(/[a-z]/g) &&
        str.match( /[^a-zA-Z\d]/g) &&
        str.length >= 10) {
        token = true;
    }


    else {
        token = false;
    }
    document.getElementById("pwMsg").innerHTML= msg;
    return token;
}

/**
 * compare the password and the password repeat
 */
export function comparePass() {
    let msg;
    let token;
    let pass1 = document.getElementById("passwordRegistration").value;
    let pass2 = document.getElementById("repeatPassword").value;

    if (pass1 === pass2){
        msg = "Les mots de passes correspondent";
        token = true;
    }
    else {
        msg = "Les mots de passes sont différents";
        token = false;
    }
    document.getElementById("pwMsgRepeat").innerHTML= msg;
    return token;
}

export function validate(){
    if (comparePass() && validatePass()){
        return true;
    }
    else {
        return false;
    }
}

function colorGreen($id){
    document.getElementById("$id").className = "colorGreen2";
}