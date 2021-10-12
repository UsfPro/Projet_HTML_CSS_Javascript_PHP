
// Below Function Executes On Form Submit

function ValidateFormForLoginEvent() {
	// Storing Field Values In Variables
	var login = document.getElementById("login").value;
	var pwd = document.getElementById("pwd").value;
	
	//alert("Validation du formulaire avant l'envoi au serveur.");
	
	// Conditions
	if (login != '' && pwd != '') {
		//alert("All type of validation has done on OnSubmit event.");
		return true;

	} else {
		alert("Login and password are required.....!");
		return false;
	}
}