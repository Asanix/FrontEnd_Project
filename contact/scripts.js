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