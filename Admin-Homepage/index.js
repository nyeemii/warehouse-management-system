function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "0px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

let checker = document.getElementById('terms-and-condition');
let submitBtn = document.getElementById('submit-btn');

checker.onchange = function() {
    if(this.checked) {
        submitBtn.disabled = false;
        submitBtn.style.background="#fff";
        submitBtn.style.color="#28B5B5";
    } else {
        submitBtn.disabled = true;
        submitBtn.style.background="#e1e5ea";
    }
}

let modal = document.getElementById("modal");
let btn = document.getElementById("terms");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  