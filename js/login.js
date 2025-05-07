const databaseform = document.querySelector(".sign-up form");
const signupbtn = databaseform.querySelector(".btn input");
const alertmsg = databaseform.querySelector(".error-warn");
databaseform.onsubmit = (e) => {
  //Prevent it submitting the form, causing it to refresh the website.
  //also prevent it from adding or creating another link in the url. So, without this when you click submit buttom
  //your website will refresh and the form you entered then will be emptied.

  e.preventDefault();
};

signupbtn.onclick = () => {
  console.log("asdasada");
  //Use create xml object. Unless you want a dynamic webpage, otherwise don't if you don't.
  let xhr = new XMLHttpRequest(); //create xml object.
  xhr.open("POST", "php/login.config.php"); //where file to be loaded or opened for the ajax.
  xhr.onload = () => {
    //The onload detecst the user when load this page.
    if (xhr.readyState === XMLHttpRequest.DONE) {
      //once ready, it will excute.
      if (xhr.status === 200) {
        let datastatus = xhr.response;
        if (datastatus == "success") {
          //the echo print success, then return true, otherwise skip this and go to else.
          location.href = "home.php";
        } else {
          //Once, it received an echo "errors" inside the requested php file, it will excute this.
          alertmsg.textContent = datastatus;
          alertmsg.style.display = "block";
        }
      }
    }
  };
  //send data form data through ajax
  let dataset = new FormData(databaseform);
  xhr.send(dataset);
};
