/* global $ */

function validateDetails(){
    
    var name;
    
    name = document.getElementById("name").value;

    if (name == ""){
        alert("Please enter a name.");
    }
    else if (!name.match(/^[a-zA-Z]+$/)){
        alert('Only letters are allowed in a name.');
    }
    else{
        validateDetails_2();
    }

}

function validateDetails_2(){
    
    var email;
    
    email = document.getElementById("email").value;
    
    if (email == ""){
        alert("Please enter an email.")
    }
    else if (validateEmail(email) == false){
        alert("Please enter a valid Email ID");
    }
    else{
        validateDetails_3();
    }
}

function validateDetails_3(){
    
var pin;
    
    pin = document.getElementById("pin").value;
    
    if (pin == ""){
        alert("Please enter your PIN.");
    }
    else if (pin.length < 4){
        alert("Your PIN must be 4 digits.");
    }
    else{
        enablebtnPurchase()
    }
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
    }
    
function enablebtnPurchase(){
    
    $('#btnPurchase').prop('disabled', false);
    }
    
function disablebtnPurchase() {
    
    $('#btnPurchase').prop('disabled', true);
    }