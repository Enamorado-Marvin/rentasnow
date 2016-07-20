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
            <div class="login">
                <form class="form" action="index.php" method="post">
                    <h2>Create an Account</h2>
                    <p>Have access to your saved and contacted rents. You will be able to see them on any device. Already have an account? <a href="?action=login">Log In</a></p>
                    <input type="hidden" name="action" value="add_user">
                    <label for="name">First Name</label><br/>
                    <input type="text" name="name" required="required" id="name"><br/>
                    <label for="lastname">Last Name</label><br/>
                    <input type="text" name="lastname" required="required" id="lastname"><br/>
                    <label for="email">Email Address</label><br />
                    <input type="email" name="email" required="required" id="email"><br />
                    <label for="password">Password</label><br />
                    <input type="password" name="password" required="required" id="password"><br />
                    <br/>
                    <input type="submit" value="Sign Up" class="button"><br />
                </form>
            </div>
        </main>
     </div>
        <footer>
            <?php include '../modules/footer.php'; ?>
        </footer>
    </body>
</html>
    