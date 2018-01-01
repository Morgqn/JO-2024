
function formatNom()
{
	var tmp = document.getElementById("nom").value;
	document.getElementById("nom").value = tmp.toUpperCase();
}
function formatPrenom()
{
	var prenom = document.getElementById("prenom").value;

	var tmp1 = prenom.substr(0,1);
	var tmp2 = prenom.substr(1,(prenom.length));

	document.getElementById("prenom").value = tmp1.toUpperCase()+tmp2.toLowerCase();
	
}

function checkEmail()
{
	var nb1, nb2 ;
	nb1 = nb2 = 0;
	var tmp = document.getElementById("email").value;
	for (var i = 0; i < tmp.length; i++) {
		if(tmp[i] === "@")
			nb1++;
		if(tmp[i] === ".")
			nb2++; 
	}

	if (!(nb1 >= 1 && nb2 >=2))
	{
		document.getElementById("info").style.display= "inline-block";
		document.getElementById("register").disabled= true;

		return false;
		
	}
	else{

			document.getElementById("info").style.display= "none";
				document.getElementById("register").disabled= false;

			return true;
		}

}
function infoEmail()
{
	alert("\n Le format de votre email est incorrect");	
}


function checkPassword()
{
	var nbMaj, nbChiffre, nbSymbole ;

	nbChiffre = nbMaj = nbSymbole = 0;

	var tmp = document.getElementById("password").value;

	for (var i = 0; i < tmp.length; i++) {
		if(tmp[i].charCodeAt() > 64 && tmp[i].charCodeAt() < 91)
			nbMaj++;

		if(tmp[i].charCodeAt() > 47 && tmp[i].charCodeAt() < 58)
			nbChiffre++;

		if((tmp[i].charCodeAt() > 32 && tmp[i].charCodeAt() < 48)
			|| (tmp[i].charCodeAt() > 57 && tmp[i].charCodeAt() < 65)
			 || (tmp[i].charCodeAt() > 90 && tmp[i].charCodeAt() < 97))

			nbSymbole++;
	}

	if (!(nbSymbole >= 1 && nbMaj >=1 && nbChiffre >=1 && tmp.length >= 6))
	{
		document.getElementById("infopassword").style.display= "block";
		document.getElementById("register").disabled= true;

		return false;

	}
		
	else
	{

		document.getElementById("infopassword").style.display= "none";
		document.getElementById("register").disabled= false;
		return true;
	}
}
function infoPassword()
{
	alert("Votre mot de passe doit respecter les regles suivantes : \n Une longueur minimum de 6 caractéres \n Comporter au moins un chiffre, une lettre et un symbole\n");	
}














