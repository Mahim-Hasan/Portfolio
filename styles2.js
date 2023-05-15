
var sub=document.getElementById("sd");
sub.onclick=function validate(){
    var name=document.getElementById("f");
    var email=document.getElementById("e");
	
	/*
    else{}
    
	var eml=email.value.slice(lenght);
    if(eml!='@'){
        alert("email is not valid");
    }
    */
    var str=name.value.slice(0,1);
    if(str=='$'||str=='_'){
        alert("username is not valid");
       }
	
	if(document.getElementById('m').checked) {
	alert("Thanks for filling up the form");
	}else if(document.getElementById('fe').checked) {
	alert("Thanks for filling up the form");
}
}