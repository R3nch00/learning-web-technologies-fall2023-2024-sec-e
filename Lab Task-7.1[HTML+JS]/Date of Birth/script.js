function dob(){
    let day = document.getElementById("DD").value;
    let month = document.getElementById("MM").value;
    let year = document.getElementById("YYYY").value;

    if (!day || !month || !year)
    {
        document.getElementById('replace').innerHTML = "Cannot be empty";
        return;
    }
    for (let i = 0; i < day.length; i++) {
        if (checkChar(day[i])){}
        else {
            document.getElementById('replace').innerHTML = "invalid day";
            return;
        }
    }
    for (let i = 0; i < month.length; i++) {
        if (checkChar(month[i])) {}
        else {
            document.getElementById('replace').innerHTML = "replace month";
            return;
        }
    }
    for (let i = 0; i < year.length; i++) {
        if (checkChar(year[i])) {}
        else {
            document.getElementById('replace').innerHTML = "invalid year";
            return;
        }
    }

    if (day > 31 || day < 1 || day === "") {
        document.getElementById('replace').innerHTML = "invalid day";
        return;
    }

   else if (month > 12 || month < 1 || month === "") {
    document.getElementById('replace').innerHTML = "invalid month";
    return;
}

   else if (year.length !== 4 || year === "") {
    document.getElementById('replace').innerHTML = "invalid year";
    return;
}
document.getElementById('replace').innerHTML = "";
}
function checkChar(ch) {
    if(ch >= '0' && ch <= '9') 
    return true;
}
