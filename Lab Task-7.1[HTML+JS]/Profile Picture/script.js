function profilePicture() {
    let userId = document.getElementById("userId").value;
    let picture = document.getElementById("picture").value;

   if (!userId || isNaN(parseInt(userId)) || parseInt(userId) <= 0) {
    document.getElementById('replace').innerHTML = "User id can not be empty and must be a positive number";
    return;
    }


    if (!picture) {
        document.getElementById('replace').innerHTML = "Picture can not be empty";
        return;
    }

    
    document.getElementById('replace').innerHTML = "";
   
}
