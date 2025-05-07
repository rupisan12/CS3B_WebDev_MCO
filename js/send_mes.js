const databaseform = document.querySelector(".sign-up form");
const signupbtn = databaseform.querySelector(".btn input");
const alertmsg = document.querySelector(".error-warn");
const popUpCon = document.querySelector(".pop-val");

const h2let = document.querySelector(".text-lay h2");
const plet = document.querySelector(".text-lay p");
const anims = document.querySelector(".anim-con");
databaseform.onsubmit = (e) => {
  //Prevent it submitting the form, causing it to refresh the website.
  //also prevent it from adding or creating another link in the url. So, without this when you click submit buttom
  //your website will refresh and the form you entered then will be emptied.
  e.preventDefault();
};

document.addEventListener("DOMContentLoaded", () => {
  signupbtn.onclick = () => {
    //Use create xml object. Unless you want a dynamic webpage, otherwise don't if you don't.
    let xhr = new XMLHttpRequest(); //create xml object.
    xhr.open("POST", "send_mes.php", true); //where file to be loaded or opened for the ajax.
    xhr.onload = () => {
      //The onload detecst the user when load this page.
      if (xhr.readyState === XMLHttpRequest.DONE) {
        //once ready, it will excute.
        if (xhr.status === 200) {
          let datastatus = xhr.response;
          if (datastatus == "success") {
            //the echo print success, then return true, otherwise skip this and go to else.
            popUpCon.classList.add("active");
            h2let.innerHTML = "Thanks for submitting!";
            plet.innerHTML =
              "Your message has been succesfully submitted. We will be in touch and contact you soon!";
            anims.innerHTML = `
      <dotlottie-player
        class="ani-ma"
        src="https://lottie.host/d490915a-c616-4d75-808f-448887c5f0e2/Oyp07lIVmK.lottie"
        background="transparent"
        speed="1"
        autoplay
      ></dotlottie-player>
    `;
            alertmsg.style.display = "none";
            alertmsg.setAttribute("style", "display: none;");
          } else if (datastatus == "failed") {
            h2let.innerHTML = "Failed to send messsage";
            plet.innerHTML = "Message could not be sent. Please try again!";
            anims.innerHTML = `
      <dotlottie-player
        class="ani-ma"
        src="https://lottie.host/03135803-1f80-4a31-9af4-667964cfa14e/37QPt8F739.lottie"
        background="transparent"
        speed="1"
        autoplay
  
      ></dotlottie-player>
    `;

            popUpCon.classList.add("active");
            alertmsg.setAttribute("style", "display: none;");
          } else {
            //Once, it received an echo "errors" inside the requested php file, it will excute this.
            alertmsg.textContent = datastatus;
            alertmsg.setAttribute("style", "display: block;");
          }
        }
      }
    };
    //send data form data through ajax
    let dataset = new FormData(databaseform);
    xhr.send(dataset);
  };
});
