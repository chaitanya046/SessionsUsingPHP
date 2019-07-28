function form_validation_function()
{
	if(txtName.value == null || txtName.value == "") {
		 alert("Name cannot be empty");
		return false;
	}
	else {
		document.getElementById("orderForm").submit();
	}
}

function form_post()
{
    if(item1.value<0 || item2.value <0 || item3.value <0 || item4.value <0 || item5.value <0 || item6.value <0 ){
        alert("Value Cannot be less than 0");
		return false;
    }
    
	document.getElementById("orderForm").submit();
}

function signout()
{
	window.location.replace("logout.php");
}
