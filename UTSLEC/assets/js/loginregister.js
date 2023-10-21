const container = document.getElementById("container");
const registerBtn = document.getElementById("register");
const loginBtn = document.getElementById("login");

registerBtn.addEventListener("click", () => {
  container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
});

function validasiPassword() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var password2 = document.getElementById("password2").value;
  var errorMessage = document.getElementById("error");

  if (!username) {
    message = `<p class="text-center p-2" style='color: red;'>Username must be filled</p>`;
    errorMessage.innerHTML = message;
    return false;
  } else if (!password) {
    message = `<p class="text-center mt-5 text-center text-1xl font-bold leading-9 tracking-tight" style="color: red;">Password Can't Empty</p>`;
    errorMessage.innerHTML = message;
    return false;
  } else if (password != password2) {
    message = `<p class="text-center mt-5 text-center text-1xl font-bold leading-9 tracking-tight" style="color: red;">Incorrect Password</p>`;
    errorMessage.innerHTML = message;
    return false;
  } else {
    errorMessage.innerHTML = "";
    return true;
  }
}
