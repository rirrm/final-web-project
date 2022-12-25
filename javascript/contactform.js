let name1 = document.forms['form']['emri'];
let surname1 = document.forms['form']['mbiemri'];

let name1_error = document.getElementById('name1_error');
let surname1_error = document.getElementById('surname1_error');


name1.addEventListener('textInput', name1_Verify);
surname1.addEventListener('textInput', surname1_Verify);


function validated(){
    
    if(name1.value.length < 6){
        name1_error.style.display = "block"
        name1.focus();
        return false 
    }
    if(surname1.value.length< 6){
        surname1_error.style.display = "block"
        surname1.focus();
        return false 
    }
    

}

function name1_Verify(){

    if(name1.value.length >= 6){
        name1_error.style.display = "none"
        return true ;
    }
}

function surname1_Verify(){

    if(surname1.value.length >= 6){
        surname1_error.style.display = "none"
        return true ;
    }
}
