/**
 * validate the password before validation
 */
export function validatePass()  {
    let msg;
    let token = 0;
    const elem = document.getElementById("passwordRegistration");
    let str = elem.value;

    if (str.match( /[0-9]/g)){
        document.getElementById("number").className = "colorGreen2";
    }
    else {
        document.getElementById("number").className = "colorRed2";
    }

    if (str.match( /[A-Z]/g)){
        document.getElementById("maj").className = "colorGreen2";
    }
    else {
        document.getElementById("maj").className = "colorRed2";
    }
    if (str.match(/[a-z]/g)){
        document.getElementById("min").className = "colorGreen2";
    }
    else{
        document.getElementById("min").className = "colorRed2";
    }
    if (str.match( /[^a-zA-Z\d]/g)){
        document.getElementById("char").className = "colorGreen2";
    }
    else {
        document.getElementById("char").className = "colorRed2";
    }

    if (str.length >= 10) {
        document.getElementById("length").className = "colorGreen2";
    }
    else {
        document.getElementById("length").className = "colorRed2";
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
    return !!(comparePass() && validatePass());
}
