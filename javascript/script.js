var i = 0;
 var imgArray = [
 "./images/sliderrFINAL.jpg",
 "./images/shea2.jpg",
"./images/squalene2.jpg"
 ];



function ndrroImg() {
    document.getElementById('slideshow').src = imgArray[i];
if (i < imgArray.length - 1 ) {
    i++;
}else {
    i=0;
}
setTimeout("ndrroImg()", 2000)
}
document.body.addEventListener('load', ndrroImg());