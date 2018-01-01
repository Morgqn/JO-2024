function coloring(champs, erreur) {

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
        alert("Veuillez remplir correctement tous les champs");
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


function verifSecondPage(f) {
    var mailOk = isEmail(f.email);
    var phoneOk = isPhone(f.phone);


    if (mailOk && phoneOk)
        return true;
    else {
        alert("Veuillez remplir correctement tous les champs");
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


function verifThirdPage(f) {
    var dateOk = isDate(f.date);
    var usernameOk = isUsername(f.username);
    var passOk = isPass(f.pw);


    if (dateOk && usernameOk && passOk)
        return true;
    else {
        alert("Veuillez remplir correctement tous les champs");
        return false;
    }

}