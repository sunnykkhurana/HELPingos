function validation() {
	document.getElementById("name").innerHTML = "";
	document.getElementById("email").innerHTML = "";
	document.getElementById("age").innerHTML = "";
	document.getElementById("address").innerHTML = "";
	
	var phone = document.getElementById("telephone").value;
		if(phone.length < 9){
			document.getElementById("number").innerHTML = "number should be of 10 digits";
		}
	
	/*var x = document.getElementById("contactName").value;
	if(x == null || x ==""){
		document.getElementById("name").innerHTML = '<br/>Please enter your name';
	}
	
	var x = document.getElementById("contactEmail").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        document.getElementById("email").innerHTML ="<br/>Not a valid e-mail address";
	}

	var x = document.getElementById("agegroup").value;
	if(x == "select"){
		document.getElementById("age").innerHTML = '<br/>Please enter your age group';
	}
	
	var x = document.getElementById("contactAddress").value;
	if(x == null || x ==""){
		document.getElementById("address").innerHTML = '<br/>Please enter your address';
	}*/
	return false;
}