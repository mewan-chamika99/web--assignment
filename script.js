function changeToLogin() {

    var lg = document.getElementById("login");
    var reg = document.getElementById("register");

    lg.style.display = "block";
    reg.style.display = "none";

}


function changeToRegister() {

    var lg = document.getElementById("login");
    var reg = document.getElementById("register");

    lg.style.display = "none";
    reg.style.display = "block";

}

function login() {

    var uname = document.getElementById("uname");
    var pswrd = document.getElementById("pswrd");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text2 = r.responseText;
            alert(text2);

            // if (text2 == "Success") {
            //     window.location = "home.php";
            // } else {
            //     alert(text2);
            // }

        }
    };

    r.open("POST", "signProcess.php", true);
    r.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    r.send("e=" + uname.value + "&p=" + pswrd.value);

}

function register() {

    var fname = document.getElementById("fname");
    var uname1 = document.getElementById("uname1");
    var ps1 = document.getElementById("ps1");
    var ps2 = document.getElementById("ps2");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);

        }
    };

    r.open("POST", "registerProcess.php", true);
    r.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    r.send("n=" + fname.value + "&u=" + uname1.value + "&p1=" + ps1.value + "&p2=" + ps2.value);

}