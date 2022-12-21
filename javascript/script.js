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
 "./images/test1.jpg",
 "./images/test2.jpg",
"./images/test3.jpg"
 ];



function ndrroImg() {
    document.getElementById('slideshow').src = imgArray[i];
if (i < imgArray.length - 1 ) {
    i++;
}else {
    i=0;
}
setTimeout("ndrroImg()", 4000)
}
document.body.addEventListener('load', ndrroImg());

