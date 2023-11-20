function f1(){
    let name = document.getElementById('username').value;
    
    

    if(!name) {
        document.getElementById('replace').innerHTML = "name can not be empty";
        return;
    }
    let nameLength = name.split(' ');
    if(nameLength.length < 2) {
        document.getElementById('replace').innerHTML = "name has to contain atleast two words";
        return;
    }
    if(checkFirstChar(name[0])){}
    else {
        document.getElementById('replace').innerHTML = "name must start with a letter";
        return;
    }
    for(let i=0; i<name.length; i++){
        if(checkChar(name[i])){}
        else {
            document.getElementById('replace').innerHTML = "name can only contain a-z or A-Z or dot or dash";
            return;
        }
    }
    document.getElementById('replace').innerHTML = "";  
}
function checkChar(ch){
    if((ch >= 'A' && ch <= 'Z' ) || (ch >= 'a' && ch <= 'z') || ch == '.' || ch == '_' || ch == ' ') return true;
    
}
function checkFirstChar(ch){
    if((ch >= 'A' && ch <= 'Z') || (ch >= 'a' && ch <= 'z')) return true;
}