const databaseform = document.querySelector(".sign-up form");
const signupbtn = databaseform.querySelector(".btn input");
const alertmsg = databaseform.querySelector(".error-warn");
databaseform.onsubmit = (e) => {
  //Prevent submitting.

  e.preventDefault();
};
signupbtn.onclick = () => {
  //Feom static to dynamiv
  //This how prevent from refreshing a window as possible.
  let ajax = new XMLHttpRequest();
  ajax.open("POST", "php/sign_up.config.php", true);
  ajax.onload = () => {
    //When the user goes to a specific page like "sign in". This will load the ajax.
    if (ajax.readyState === XMLHttpRequest.DONE) {
      if (ajax.status === 200) {
        let datastatus = ajax.response; //This is receives the response from the echo php.
        if (datastatus == "success") {
          //If the console print "success" then it will redirect to our user page.
          location.href = "home.php"; //Location for the user home page
        } else {
          alertmsg.textContent = datastatus;
          alertmsg.style.display = "block"; //Display bloc
        }
      }
    }
  };
  //send data form through ajax
  let dataset = new FormData(databaseform);
  ajax.send(dataset);
};
