function degree() {
    let SSC = document.getElementById("SSC").checked;
    let HSC = document.getElementById("HSC").checked;
    let BSc = document.getElementById("BSc").checked;

    if (!SSC && !HSC && !BSc) 
    document.getElementById('replace').innerHTML = "One option must be selected";
    
    else document.getElementById('replace').innerHTML = "Selection Done";
}
