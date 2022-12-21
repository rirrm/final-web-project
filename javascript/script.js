function validoInput(){

    var emailiUserit=document.getElementById('email').value;
    var passiUserit=document.getElementById('password').value;

    if(emailiUserit==""){
        alert("Duhet te shenosh email!")
    }else if(passiUserit==""){
        alert("Duhet te shenosh password!")
    }else{
        alert("Ke shenuar te dhenat me sukses <3");
    }
}