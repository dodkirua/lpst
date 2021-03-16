/**
 * validate the password before validation
 */
export function validatePass() {
    let msg;
    const elem = document.getElementById("passwordRegistration");
    let str = elem.value;
    if (str.match( /[0-9]/g) &&
        str.match( /[A-Z]/g) &&
        str.match(/[a-z]/g) &&
        str.match( /[^a-zA-Z\d]/g) &&
        str.length >= 10) {
        msg = "<p style='color:green'>Mot de passe fort.</p>";
        //elem.setCustomValidity("Mot de passe fort.");
        console.log(elem);
    }

    else
        msg = "<p style='color:red'>Mot de passe faible.</p>";
    document.getElementById("pwMsg").innerHTML= msg;
}

/**
 * compare the password and the password repeat
 */
export function comparePass() {
    let msg;
    let pass1 = document.getElementById("passwordRegistration").value;
    let pass2 = document.getElementById("repeatPassword").value;

    if (pass1 === pass2){
        msg = "Les mots de passes correspondent";
    }
    else {
        msg = "Les mots de passes sont différents";
    }
    document.getElementById("pwMsgRepeat").innerHTML= msg;
}