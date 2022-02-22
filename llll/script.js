function log() {

    var log = document.getElementById("log");
    var reg = document.getElementById("reg");

    log.style.display = "none";
    reg.style.display = "block";

}

function reg() {

    var log = document.getElementById("log");
    var reg = document.getElementById("reg");

    log.style.display = "block";
    reg.style.display = "none";

}

function showPassword() {

    // alert("ok");

    var sp = document.getElementById("sp");
    var pswd = document.getElementById("pswd");

    if (sp.innerHTML == "Show Password") {
        pswd.type = "text";
        sp.innerHTML = "Hide Password";
    } else if (sp.innerHTML == "Hide Password") {
        pswd.type = "password";
        sp.innerHTML = "Show Password";
    }

    var sp2 = document.getElementById("sp2");
    var pswd2 = document.getElementById("pswd2");
    var pswd22 = document.getElementById("pswd22");

    if (sp2.innerHTML == "Show Password") {
        pswd2.type = "text";
        sp2.innerHTML = "Hide Password";
        pswd22.type = "text";
    } else if (sp2.innerHTML == "Hide Password") {


        pswd2.type = "password";
        sp2.innerHTML = "Show Password";
        pswd22.type = "password";
    }

}