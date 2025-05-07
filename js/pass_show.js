const password = document.querySelector(
    ".form .text-field input[type='password']"
  ),
  btn = document.querySelector(".form .text-field i");

btn.onclick = () => {
  if (password.type == "password") {
    password.type = "text";
    btn.classList.add("active");
  } else {
    password.type = "password";
    btn.classList.remove("active");
  }
};
