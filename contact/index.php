<!DOCTYPE html>
<?php
    if(!isset($_SESSION['user'])) {
        $lifetime = 60 * 60 * 2; // 2 hours session
        session_set_cookie_params($lifetime);
        session_start();
    }
?>

<html lang="en-us">
 <head>
  <title>Contact Us | RentasNow.com</title>
  <meta charset="UTF-8"> 
  <meta name="author" content="Marvin Enamorado">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include '../modules/head-lines.php'; ?>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63932603-1', 'auto');
  ga('send', 'pageview');

</script>
 </head>
 <body id="home">
  <div class="container">
  <header role="banner">
   <?php include '../modules/header.php'; ?>
  </header>
   <main class="gray-bg">
   <div class="group section space space2">
    <section class="col span_3_of_5">
     <h1>Contact Us</h1>
     <article>
      <p>Thank you for visiting our website. Your satisfaction is our success. We strive to provide you with the best level of customer service, and welcome your comments and suggestions. If you have any questions about our online services or your account information, please feel free to contact our Customer Service Department.</p>
      <p><br>Simply email RentasNow.com's Customer Service Departmet to <a href="mailto:help@rentasnow.com">help@rentasnow.com</a> or call 1-888-000-0000 and let one of our representatives help you answer your questions.</p><br>
      <div>
          <!--<img src="/RentasNow/images/map-rnlocation.jpg" alt="RentasNow location">-->
          <img src="/images/map-rnlocation.jpg" alt="RentasNow location">
      </div>
     </article>
    </section>
    <section class="col span_2_of_5 white2">
     <h1 class="space2">Contact Form</h1>
     <article>
      <p class="space2">Please use the contact form below if you have any questions, comments or suggestions regarding RentasNow.com.</p><br>
      <form class="form">
       <label>
        <span>*</span>
        First Name:
       </label>
       <input type="text">
       <label>
        <span>*</span>
        Last Name:
       </label>
       <input type="text">
       <label>
        <span>*</span>
        Email:
       </label>
       <input type="email">
       <label>
        <span>*</span>
        Phone:
       </label>
       <input type="tel">
       <label>Subject:</label>
       <select>
        <option value>Select Your Subject Line</option>
        <option value="Forgot user id and password">Forgot user id and password</option>
        <option value="List an apartment">List an apartment</option>
        <option value="Having difficulty witht the site">Having difficulty with the site</option>
        <option value="Looking for a job">Looking for a job</option>
        <option value="Other">Other</option>
       </select>
       <br>
       <br>
       <label>Comments:</label>
       <textarea></textarea>
       <input type="submit" value="Contact Us" class="button">
      </form>
      <br>
     </article>
    </section>
   </div>
  </main>
   <section>
    <aside>
     
    </aside>
   </section>
 </div>
 <footer role="contentinfo">
  <?php include '../modules/footer.php'; ?>
 </footer>
 </body>
</html>
