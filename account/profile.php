<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en-us">
    <head>
        <title>Create an Account | RentasNow.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Marvin Enamorado">
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
        <header>
            <?php include '../modules/header.php'; ?>
        </header>
        <main>
            <h1>Welcome</h1>
<!--            <p>Welcome <span class="message"><?php echo $_SESSION['user']['name']; ?></span> to RentasNow.com, now you can contact owners or save your favorite rents.</p>-->
            <section class="full-width">
                <div class="container space">
                <h1 class="centered">Hi <?php echo $_SESSION['user']['name']; ?>! What would you like to do?</h1>
                <div class="section group" id="services">
                  <div class="col span_1_of_3">
                   <div class="service">
                       <img src="/images/list-property.png" alt="List new properties">
                    <h2>List a new property</h2>
                    <p>Have a property you want to rent? List it now to make much more people know about your property.</p>
                    <div class="button2">
                     <a href="/account/.?action=show_add_property_form" class="button">List my property</a>
                    </div>
                   </div>
                  </div>
                  <div class="col span_1_of_3">
                   <div class="service">
                       <img src="/images/list-properties.png" alt="Listed Properties">
                    <h2>See your listed properties</h2>
                    <p>Check out your properties already listed. Edit the information and more.</p>
                    <div class="button2">
                     <a href="/account/.?action=see_properties" class="button">See my properties</a>
                    </div>
                   </div>
                  </div>
                  <div class="col span_1_of_3">
                   <div class="service">
                       <img src="/images/88288-200.png" alt="Edit profile">
                    <h2>Edit your profile</h2>
                    <p>Edit your account information, add your phone number and address to complete your profile.</p>
                    <div class="button2">
                     <a href="/account/.?action=edit_profile_form" class="button">Edit my profile</a>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
           </section>
        </main>
     </div>
     <footer>
        <?php include '../modules/footer.php'; ?>
     </footer>
    </body>
</html>
