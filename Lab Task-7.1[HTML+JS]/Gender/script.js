function checkGender() {
    let M = document.getElementById("male").checked;
    let F = document.getElementById("female").checked;
    let O = document.getElementById("other").checked;

    if (!M && !F && !O) 
    document.getElementById('replace').innerHTML = "One option must be selected";
    
    else document.getElementById('replace').innerHTML = "Selection Done";
}
