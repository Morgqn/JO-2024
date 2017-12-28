function surligne(champs, erreur) {
    if (erreur){
        champs.style.borderColor = "red";
    }
    else{
        champs.style.borderColor = "green";
    }
}
    
var nom;

function formatAllUpperCase() {
    nom = document.getElementById('name');
    nom.value = nom.value.toUpperCase();

    if (nom.value.length < 2 || nom.value.length > 25) {
        surligne(nom, true);
        return false;

    } else {
        surligne(nom, false);
        return true;
    }
}

function formatFirstUpperCase() {
    prenom = document.getElementById("surname");
    prenom.value = prenom.value.charAt(0).toUpperCase() + prenom.value.substring(1).toLowerCase();

    if (prenom.value.length < 2 || prenom.value.length > 25) {
        surligne(prenom, true);

        return false;
    } else {
        surligne(prenom, false);
        return true;

    }
}

function isEmail() {
    emailf = document.getElementById("email");
    emailf.value = emailf.value;
    var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (!regEmail.test(emailf.value)) {
        surligne(emailf, true);
        return false;
    } else {
        surligne(emailf, false);
        return true;
    }
}
