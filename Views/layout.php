<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Styles/front-page-styles.css">
  <link rel="stylesheet" href="/Design/style.css">
  <title>Document</title>
</head>
<body>
  <div class="front-page">
    <div class="base">
      <div class="top-bar">
        <!-- Top bar logo -->
        <div class="logo">
          <img src="/Design/logo_pineapple-1.svg" alt="pinapple logo">
        </div>
        <!-- Top bar links -->
        <div class="links">
          <a href="#">About</a>
          <a href="#">How it works</a>
          <a href="#">Contact</a>
        </div>
      </div>
      <div class="content">
        <!-- Heading -->
        <div class="heading">
          <h1>Subscribe to newsletter</h1>
        </div>
        <!-- Subheading -->
        <div class="subheading">
          <p>Subscribe to our newsletter and get 10% discount on pinapple glasses.</p>
        </div>
        <!-- Email input -->
        <div class="email-input">
          <form action="../Controllers/controllerAddRecord.php" method="POST">
            <input type="email" name="email" placeholder="Type your emai address here..." id="email" oninput="validate(this.value)"/>
            <!-- Submition button -->
            <button type="submit" class="arrow" id="arrow">
              <i class="icon icon-ic-arrow-one"><a href="subscribed.php"></a></i>
            </button>
            <!-- Validation messages -->
            <div class="validation-box" id="validation-message">
              <p id="validation"></p>
              <p id="is-checked"></p>
            </div>
          </form>
        </div>
        <!-- TOS -->
        <div class="terms-of-services">
          <input type="checkbox" id="tos" class="checkbox" onclick="isChecked()" checked>
          <label for="tos">I agree to <a href="#">terms of service</a></label>
        </div>

        <div class="line">
          <hr>
        </div>
        <!-- Social icons -->
        <div class="social-icons">
          <span class="merge-icons facebook">
            <i class="icon icon-ic-facebook-one"></i>
          </span>
          <span class="merge-icons instagram">
            <i class="icon icon-ic-instagram-one"></i>
          </span>
          <span class="merge-icons twitter">
            <i class="icon icon-ic-twitter-one"></i>
          </span>
          <span class="merge-icons youtube">
            <i class="icon icon-ic-youtube-one"></i>
          </span>
        </div>

      </div>
    </div>
    <!-- Pineapple image -->
    <div class="image">
      <img src="/Design/image_summer-1.png" alt="pinapple image" class="responsive-image">
    </div>

  </div>
  <script src="./JavaScript/email-validation.js"></script>
</body>
</html>