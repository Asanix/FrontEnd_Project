var isClosed = true;

function openNav() {
    if (isClosed) {
        document.getElementById("mySidebar").style.marginRight = "0";
        document.getElementById("mySidebar").style.display = "grid";
        isClosed = false;
    }
    else {
        document.getElementById("mySidebar").style.marginRight = "-20.5vw";
        document.getElementById("mySidebar").style.display = "none";
        isClosed = true;
    }
}

var closeMes = true;

function show() {
    if (closeMes) {
        document.getElementById("typing").style.display = "inline";
        document.getElementById("message").style.display = "none";
        closeMes = false;
    } else {
        document.getElementById("typing").style.display = "none";
        document.getElementById("message").style.display = "inline";
        closeMes = true;
    }
}

function empty() {
    var x = document.forms["form"]["text"].value;
    var y = document.getElementById("text");
    if (x.length == 0) {
        y.classList.add("shake");
    }
}
