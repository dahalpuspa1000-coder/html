const button = document.getElementById("btn");
const box = document.getElementById("box");

function changeColor() {
  box.style.backgroundColor =
    box.style.backgroundColor === "blue" ? "red" : "blue";
}
button.addEventListener("click", changeColor);
function Alert(){
alert("No internet connection") 
}
function validationEmail(){
  function validateEmail() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (name === "") {
    alert("Name is required");
  } else if (email === "") {
    alert("Email is required");
  } else if (!emailPattern.test(email)) {
    alert("Invalid email format");
  } else {
    alert("Form submitted successfully ✅");
  }
}
}
