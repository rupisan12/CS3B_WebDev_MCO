document.addEventListener("DOMContentLoaded", () => {
  const popUpCon = document.querySelector(".pop-val");
  const close = document.querySelector(".close-btn");
  const empty = document.querySelectorAll(".detail");
  close.onclick = () => {
    popUpCon.classList.remove("active");

    for (let i = 0; i < empty.length; i++) {
      empty[i].value = "";
    }
  };
});
