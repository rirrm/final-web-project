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

var i = 0;
 var imgArray = [
 "./images/slider5.jpg",
 "./images/slider8.jpg",
"./images/slider9.jpg"
 ];



function ndrroImg() {
    document.getElementById('slideshow').src = imgArray[i];
if (i < imgArray.length - 1 ) {
    i++;
}else {
    i=0;
}
setTimeout("ndrroImg()", 1500)
}
document.body.addEventListener('load', ndrroImg());
