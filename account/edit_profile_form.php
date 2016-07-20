<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en-us">
    <head>
        <title>Edit Profile | RentasNow.com</title>
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
<!--            <p>Welcome <span class="message"><?php echo $_SESSION['user']['name']; ?></span> to RentasNow.com, now you can contact owners or save your favorite rents.</p>-->
            <section class="full-width">
                <div class="container space">
                <h1 class="centered">Edit Profile</h1>
                <form action="/" method="post" class="form">
                    <input type="hidden" name="action" value="edit_profile" />
                   <label>
                    <span>*</span>
                    First Name:
                   </label>
                    <input class="editp" type="text" name="name" value="<?php echo $_SESSION['user']['name']; ?>" />
                   <label>
                    <span>*</span>
                    Last Name:
                   </label>
                    <input type="text" name="lastname" value="<?php echo $_SESSION['user']['lastName']; ?>" />
                   <label>
                    <span>*</span>
                    Email:
                   </label>
                    <input type="email" name="email" value="<?php echo $_SESSION['user']['email']; ?>" /> 
                   <label>
                    <span>*</span>
                    Password:
                   </label>
                    <input type="password" name="password" value="<?php echo $_SESSION['user']['password']; ?>" /> 
                   <label>
                    <span>*</span>
                    Phone:
                   </label>
                    <input type="tel" name="phone" value="<?php echo $_SESSION['user']['phone']; ?>" />
                    <label>&nbsp;</label>
                    <input type="hidden" name="userID" value="<?php echo $_SESSION['user']['userID']; ?>"/>
                    <input type="submit" value="Save Changes" />
                    <br>
                </form>
                </div>
           </section>
        </main>
     </div>
     <footer>
        <?php include '../modules/footer.php'; ?>
     </footer>
    </body>
</html>
