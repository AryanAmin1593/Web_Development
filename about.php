<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>"At MOBECOMMERCE, we're dedicated to providing an exceptional shopping experience tailored to meet the needs of modern consumers. With a focus on innovation, reliability, and customer satisfaction, we strive to offer the latest mobile gadgets and accessories at competitive prices. Our commitment to quality ensures that every product we offer meets stringent standards, providing our customers with peace of mind and confidence in their purchases. Backed by a team of tech enthusiasts and industry experts, we go above and beyond to deliver personalized service, expert advice, and swift resolution to any inquiries or concerns. Whether you're a tech-savvy enthusiast or a casual shopper, we aim to be your trusted partner in the ever-evolving world of mobile technology. Choose MOBECOMMERCE for a seamless shopping experience, exceptional products, and unparalleled customer service."</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>"As a tech enthusiast, I'm always on the lookout for the latest gadgets and accessories, and MOBECOMMERCE never disappoints. Their website is a treasure trove of cutting-edge products, and I love browsing through their extensive catalog. Whether I'm shopping for myself or looking for the perfect gift, MOBECOMMERCE has everything I need. Their prices are competitive, and their shipping is lightning-fast. I'm constantly impressed by the quality of their products and their commitment to customer satisfaction. MOBECOMMERCE has earned my loyalty as a customer for life."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shivansh Patel</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>"I can't say enough good things about MOBECOMMERCE. From their vast selection of products to their exceptional customer service, they truly excel in every aspect of the shopping experience. I recently had an issue with an order, and their support team went above and beyond to resolve it quickly and efficiently. It's clear that they value their customers and are committed to ensuring complete satisfaction. I wouldn't hesitate to recommend MOBECOMMERCE to anyone looking for a reliable and trustworthy mobile shopping destination."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nitesh Yadav</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>"I recently made my first purchase from MOBECOMMERCE, and I couldn't be happier with the experience. Their website was easy to navigate, making it a breeze to find the latest mobile gadgets and accessories I was looking for. The checkout process was smooth and secure, giving me confidence in my purchase. What impressed me the most was the speed of delivery - my order arrived earlier than expected, and the packaging was top-notch, ensuring that my items arrived in perfect condition. The quality of the products exceeded my expectations, and I've been enjoying using them ever since. Overall, I highly recommend MOBECOMMERCE to anyone looking for a reliable and convenient online shopping experience for all their mobile tech needs."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sujalsinh Gohel</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>"MOBECOMMERCE is a game-changer in the world of mobile shopping. Their selection of products is unparalleled, and I love how they stay ahead of the curve with the latest tech trends. Shopping on their website is a breeze, and I appreciate the detailed product descriptions and reviews that help me make informed decisions. Plus, their frequent promotions and discounts make it easy to score great deals. MOBECOMMERCE has become my trusted partner in staying connected and up-to-date with the latest mobile innovations."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Soham Soni</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>"I've been a loyal customer of MOBECOMMERCE for years, and they continue to exceed my expectations with every order. Their commitment to quality is evident in the products they offer, and I always feel confident knowing that I'm getting the best value for my money. Whether I'm shopping for a new smartphone or just need to stock up on accessories, MOBECOMMERCE is my one-stop shop. I appreciate their fast shipping and excellent customer service, making them the ultimate destination for all my mobile needs."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shivam Mahajan</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>"MOBECOMMERCE has become my go-to destination for all things mobile-related. Their wide selection of products, combined with their competitive prices, always ensures that I find exactly what I'm looking for. The website is user-friendly, and the checkout process is quick and hassle-free. Plus, their customer service team is incredibly helpful and responsive. I've never been disappointed with a purchase from MOBECOMMERCE, and I highly recommend them to anyone in need of quality mobile gadgets and accessories."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shakti Dube</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>