var signuperror = urlParams.get('uperror');
var signinerror = urlParams.get('inerror');
if (signuperror) {
    alert("Entered Email is already registered");
    // document.getElementById('errormsg').innerHTML = "Entered Email is already registered";
    
}else if(signinerror){
    alert("Your Email and Password is Incorrect");
    // document.getElementById('errormsg').innerHTML = "Your Email and Password is Incorrect";
}