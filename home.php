<?php include "php/home.config.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN UP</title>
    <link rel="stylesheet" href="sign.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script
      src="https://kit.fontawesome.com/04b3229b62.js"
      crossorigin="anonymous"
    ></script>
    <script
  src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
  type="module"
></script>
<script src="js/config/config.js"></script>
  </head>
 
  <body>
  <div class="pop-val">
    <div class="pop-lay">
    <div class="pop-box">
      <!-- Fas fa -->
      <div class="anim-con">
      <dotlottie-player class="ani-ma"
  src=""
  background="transparent"
  speed="1"
></dotlottie-player>

      </div>
      <div class="text-lay">
      <h2></h2>
      <p>
      </p>
      <button class="close-btn">Back to site</button>
      </div>

    </div>
    </div>

  </div>

    <div class="user-chat">
      <div class="header-user wrapper-lay">
     
        <header>
          <div class="content">
            <div class="details">
              <span><?php echo $user["username"]?></span>
              <p><?php echo $user["email"]?></p>
            </div>
          </div>

          <a href="php/logout.php?user_id=<?php echo $user['user_id']?>" class="logout">Logout</a>
        </header>   
    
      </div>

      <div class="wrapper-lay lay-home">
        <section class="home">
        
          <section class="form sign-up form-c">
          <header class="head-detail"><h3>Contact Us</h3></header>
          <form action="#" class="detail-con" autocomplete="off">
            <div class="error-warn"></div>
            <span><?php $user["username"] ?></span>
            <div class="text-field input-user">
              <input
                type="text"
                name="fullname"
                class="detail"
                placeholder="Name"
              />
            </div>
            <div class="text-field input-user">
              <input
              class="detail"
                type="text"
                name="phone"
                placeholder="Phone Number"
              />
            </div>
            <div class="text-field input-user">
              <input
                type="text"
                name="email"
                class="detail"
                placeholder="Email"
              />
            </div>
            <div class="text-field input-user">
              <input
              class="detail"
                type="text"
                name="subject"
                placeholder="Subject"
              />
            </div>

            <div class="text-field input-user des-input">
              <textarea
              type="text"
                name="message"
                class="detail des-detail"
                placeholder="Write your message here..."></textarea>
         
            </div>

            <div class="text-field btn">
              <input type="submit" value="Send" class="submit-btn"/>
            </div>
          </form>
        </section>
          </div>
          <div class="home-list">

          <script src="js/send_mes.js"></script>
        </section>
      </div>
    </div>
  </body>
</html>