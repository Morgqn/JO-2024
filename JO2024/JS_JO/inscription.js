function coloring(champs, erreur) {
    console.log(champs);
    if (erreur) {
        champs.style.borderColor = "red";
    } else {
        champs.style.borderColor = "green";
    }

}


function formatName() {
    nom = document.getElementById('name');
    nom.value = nom.value.toUpperCase();

    if (nom.value.length < 2 || nom.value.length > 25) {
        coloring(nom, true);
        return false;
    } else {
        coloring(nom, false);
        return true;
    }
}

function formatSurname() {
    prenom = document.getElementById("surname");
    prenom.value = prenom.value.charAt(0).toUpperCase() + prenom.value.substring(1).toLowerCase();

    if (prenom.value.length < 2 || prenom.value.length > 25) {
        coloring(prenom, true);
        return false;
    } else {
        coloring(prenom, false);
        return true;

    }
}



function verifFirstPage(f) {
    var nomOk = formatName(f.nom);
    var prenomOk = formatSurname(f.prenom);


    if (nomOk && prenomOk)
        return true;
    else {
        popup.alert({
            content: "Veuillez compléter correctement les champs",
            modal_size: 'small',
            btn_align: 'right',
            effect: 'left',
            default_btns: {
                ok: 'Ok'
            }
        });
        return false;
    }

}




function isEmail() {
    email = document.getElementById("mail");
    email.value = email.value;
    var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (!regEmail.test(email.value)) {
        coloring(email, true);
        return false;
    } else {
        coloring(email, false);
        return true;
    }
}


function isPhone() {

    phone.value = document.getElementById('phone').value;

    if (isNaN(phone.value) || phone.value == "") {
        coloring(phone, true);
        return false;
    } else {
        coloring(phone, false);
        return true;
    }

}

var pw;

function isPass() {

    pw = document.getElementById('pass');
    pw.value = pw.value;

    var upper = /[A-Z]{1}/;
    var number = /[0-9]{1}/;

    if (!(upper.test(pw.value) && number.test(pw.value))) {
        coloring(pw, true);
        return false;
    } else {
        coloring(pw, false);
        return true;
    }
}

function confirmPass() {

    var cpw, pw;

    cpw = document.getElementById("confirmpass");
    //cpw.value = cpw.value;
    pw = document.getElementById('pass');

    if (cpw.value == "" || pw.value != cpw.value) {
        coloring(cpw, true);
        return false;
    } else {
        coloring(cpw, false);
        return true;
    }

}


function verifSecondPage(f) {
    var mailOk = isEmail(f.email);
    //var phoneOk = isPhone(f.phone);
    var passOk = isPass(f.pw);
    var confirmOk = confirmPass(f.cpw);


    if (mailOk && passOk && confirmOk)
        return true;
    else {
        popup.alert({
            content: "Veuillez compléter correctement les champs",
            modal_size: 'small',
            btn_align: 'right',
            effect: 'left',
            default_btns: {
                ok: 'Ok'
            }
        });
        return false;
    }

}



function isDate() {

    date.value = document.getElementById('date').value;

    if (date.value == "") {
        coloring(date, true);
        return false
    } else {
        coloring(date, false);
        return true;
    }

}

function isUsername() {
    username.value = document.getElementById('username').value;

    if (username.value.length < 2 || username.value.length > 25) {
        coloring(username, true);
        return false;
    } else {
        coloring(username, false);
        return true;
    }
}



function isAge() {

    var age = document.getElementById('ageI');

    if (age.value < 5 || age.value > 125) {

        coloring(age, true);
        return false;
    } else {
        coloring(age, false);
        return true;
    }

}


function verifThirdPage(f) {
    var dateOk = isDate(f.date);
    //var usernameOk = isUsername(f.username);
    var ageOk = isAge(f.age);

    if (dateOk && ageOk)
        return true;
    else {
        popup.alert({
            content: "Veuillez compléter correctement les champs",
            modal_size: 'small',
            btn_align: 'right',
            effect: 'left',
            default_btns: {
                ok: 'Ok'
            }
        });
        return false;
    }

}
