function f1(){
    let email = document.getElementById('email').value;
    
    if (email==''){
        document.getElementById('replace').innerHTML = 'Cannot be empty';
    }

    else if(!email.includes("@")){
        document.getElementById('replace').innerHTML = 'Must be a valid email address (i.e anything@example.com)'; 
   } else{
        document.getElementById('replace').innerHTML = email;

     }

}
