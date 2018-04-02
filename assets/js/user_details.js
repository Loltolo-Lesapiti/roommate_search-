
// Validating the text fields
function validation() {
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var description = document.getElementById("Description").value;
var price = document.getElementById("price").value;
var place=document.getElementById("place").value;
var age=document.getElementById("age").value;
var male=document.getElementById("male").checked;
var female=document.getElementById("female").checked;

if (name =='' || price == ''|| description == ''|| email == ''|| place==''|| age=='') {
alert("Please fill all fields...!!!!!!");

return false;
} else if(male==false && female==false){
	alert("Select gender");
	return false;
} else if(!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}