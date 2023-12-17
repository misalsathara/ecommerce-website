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
         <img src="images/about-imge.jpg" alt="">
      </div>

      <div class="content">
         
    <h2>About Us!</h2>
    <h3 style="text-align: center;">Welcome To <span id="W_Name1">Backlink pc</span></h3>
    <p><span id="W_Name2">Backlink pc</span> is a Professional <span id="W_Type1">Computer shop</span> Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of <span id="W_Type2">Computer shop</span>, with a focus on dependability and <span id="W_Spec">computer shop</span>. We're working to turn our passion for <span id="W_Type3">Computer shop</span> into a booming <a href="https://www.blogearns.com/2021/05/free-about-us-page-generator.html" rel="do-follow" style="color: inherit; text-decoration: none;">online website</a>. We hope you enjoy our <span id="W_Type4">Computer shop</span> as much as we enjoy offering them to you.</p>
<p>I will keep posting more important posts on my Website for all of you. Please give your support and love.</p>
<p style="font-weight: bold; text-align: center;">Thanks For Visiting Our Site<br><br>
<span style="color: blue; font-size: 16px; font-weight: bold; text-align: center;">Have a nice day!</span></p>
    
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.jpg" alt="">
         <p>Had a very pleasant experience at Winsoft when I was looking for a laptop for my daughter. The staff was very courteous and responded to my calls promptly, informing me of the price and upgrade costs. I was sent a location video so that I could find the store without any hassle at Unity Plaza. The purchase process was simple and we had to spend a short time to get the OS and basic software installed. All in all, a very good experience after a long time. Good job guys, keep up the good work!
Like</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Ama Bandara</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.jpeg" alt="">
         <p>Pleased to find another place that sells genuine products. I ordered my favorite headphones Sades Snuk, it was packed superb well and the delivery was done within the next day. If you are looking for products with a genuine brand warranty this is the place to go. Highly recommended! Update: Customer service is top notch, they even asked if I received the product. Well educated staff.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sanduni Ahinsa</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.jpg" alt="">
         <p>I recently purchased a laptop from Winsoft Colombo, and I'm not only extremely satisfied with their product and service but also pleasantly surprised by the extra mile they went. The laptop works perfectly, and the staff at Winsoft Colombo were incredibly helpful throughout the purchasing process.

I want to express my gratitude for the excellent service I received from Dakkhina. Their assistance and support were truly exceptional. Highly satisfied with their service</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Supuni Lakshani</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.jpeg" alt="">
         <p>Bought msi pulse 15 b13vfk core i7 rtx 4060 laptop. They gave a really good price. The representatives there are also very friendly and can talk and find out anything. I think that he will fulfill his responsibilities well in the future warranty service period. They offer some great free gifts this time period.
thank you Backlink.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Suranga Bandara</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.jpg" alt="">
         <p>I recently purchased a motherboard from backlink, and I'm thrilled with my experience! The staff was extremely helpful, guiding me to the perfect motherboard that met my requirements and budget. The purchase process was quick and smooth, and the motherboard is working flawlessly. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>James Appuhami</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.jpg" alt="">
         <p>Best place to buy conforming laptops. Quality guaranteed. Looking forward to other services from Winsoft. Best place for gaming laptops. Friendly and professional staff.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Gayani Amasha</h3>
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