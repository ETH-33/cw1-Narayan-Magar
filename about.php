<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
  header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/about.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <body>
    <?php include 'header.php'; ?>
    <section>
    <div class="responsive-container-block bigContainer">
  <div class="responsive-container-block Container">
    <img class="mainImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eaboutus1.svg">
    <div class="allText aboveText">
      <p class="text-blk headingText">
        Our Mission
      </p>
      <p class="text-blk subHeadingText">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
      <p class="text-blk description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum pulvinar ullamcorper suspendisse ac eget. Pellentesque tempus leo in ullamcorper quis vestibulum ligula elementum ut.
      </p>
      <button class="explore">
        Explore
      </button>
    </div>
  </div>
  <div class="responsive-container-block Container bottomContainer">
    <img class="mainImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/xpraup2.svg">
    <div class="allText bottomText">
      <p class="text-blk headingText">
        Our Vision
      </p>
      <p class="text-blk subHeadingText">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
      <p class="text-blk description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum pulvinar ullamcorper suspendisse ac eget. Pellentesque tempus leo in ullamcorper quis vestibulum ligula elementum ut.
      </p>
      <button class="explore">
        Explore
      </button>
    </div>
  </div>
</div>
    </section>

    <section class="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

      <div class="box">
        <img src="images/1.jpg" alt="">
        <p>The purchase of UC, Diamonds, and BP from this online store was seamless! The in-game currency was delivered
          instantly, and I was able to enhance my gaming experience immediately. Highly recommended!</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Manish</h3>
      </div>

      <div class="box">
        <img src="images/2.jpg" alt="">
        <p>I had a great experience buying UC, Diamonds, and BP from this store. The transaction was smooth, and the
          customer support was excellent. I will definitely come back for more in the future.</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Bishal Timsina</h3>
      </div>

      <div class="box">
        <img src="images/3.jpg" alt="">
        <p>The UC, Diamonds, and BP I purchased from this online store worked perfectly in-game. It was a reliable and
          trustworthy platform, and I received the currency quickly. Very satisfied with my purchase!</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>shiril Mahato</h3>
      </div>

      <div class="box">
        <img src="images/4.jpg" alt="">
        <p>I was initially hesitant about buying UC, Diamonds, and BP online, but this store exceeded my expectations.
          The process was secure, and the in-game currency added a new level of excitement to my gaming sessions. Thank
          you!</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Suzan stha</h3>
      </div>

      <div class="box">
        <img src="images/5.jpg" alt="">
        <p>I'm extremely happy with my purchase of UC, Diamonds, and BP from this online store. The prices were
          competitive, and the delivery was prompt. It significantly enhanced my gameplay, and I would highly recommend
          it to other gamers.</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Sebika karki</h3>
      </div>

      <div class="box">
        <img src="images/6.jpg" alt="">
        <p>I was very thankful to the owner of this online platform for this kind of services.I was able to get uc in
          time from this store. so this is a kind of trusted webite.</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Roshan Dongol</h3>
      </div>

    </div>

  </section>

  <?php include 'footer.php'; ?>

  <!-- custom js file link  -->
  <script src="js/script.js"></script>
</body>
</html>