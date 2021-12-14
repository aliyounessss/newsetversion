console.log("linked");

document.getElementById("Emr").addEventListener("click", function () {
  document.getElementById("sidebtntext").style.display = "block";
});

document.getElementById("close").addEventListener("click", function () {
  document.getElementById("sidebtntext").style.display = "none";
});

let btnreg = document
  .getElementById("btnreg")
  .addEventListener("click", function () {
    window.open("../LogInPage/login.html");
  });
