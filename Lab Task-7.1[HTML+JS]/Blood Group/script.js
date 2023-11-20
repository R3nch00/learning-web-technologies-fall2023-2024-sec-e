function bloodgroup() {
    let opt = document.getElementById("grp").value;

    if (opt==="option0") {
        document.getElementById('replace').innerHTML = "Please select a blood group";
    } else {
        document.getElementById('replace').innerHTML = "Selection done";
    }
}