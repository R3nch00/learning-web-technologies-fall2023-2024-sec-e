function ajax(){
    var x = document.getElementById("ename").value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../Controller/searhCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('show').innerHTML = this.responseText
        }
    }

    xhttp.send('ename='+x);
}