let inputtxt = document.getElementById("inputtxt");
const btnlogin = document.getElementById("loginbtn");

btnlogin.addEventListener("click", function () {
  if (inputtxt.value == "") {
    inputtxt.style.borderColor = "red";
  } else {
    inputtxt.style.borderColor = "none";
  }
});
