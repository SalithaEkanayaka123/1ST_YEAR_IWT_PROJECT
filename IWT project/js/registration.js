alert("Welcome To Red Cloud Registration Page!!!");

function enableButton(){
	if (document.getElementById("check").checked==true){
		document.getElementById("submit").disabled=false;
	}
	else{
		document.getElementById("submit").disabled=true;
	}
}
