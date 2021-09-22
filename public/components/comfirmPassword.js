const password = document.getElementById("password_singup");
const confirmPassword = document.getElementById("confirmPassword_singup");

function sla() {

  if (password.value !== confirmPassword.value) {
    confirmPassword.setCustomValidity("As senhas são diferentes");
  } else {
    confirmPassword.setCustomValidity('');
  }

}

password.onchange = sla;
confirmPassword.onkeyup = sla;