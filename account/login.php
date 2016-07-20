<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en-us">
    <head>
        <title>Login | RentasNow.com</title>
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
             <form class="form" method="post" action=".">
                    <input type="hidden" name="action" value="login">
                    <p>Log in to your account</p>
                    <span class="message"><?php if (isset($message)) { echo '<p>' . $message .'</p>'; } ?></span>
                    <label for="email">Email*</label><br />
                    <input type="email" name="email" required="required" id="email"><br />
                    <label for="password">Password</label><br />
                    <input type="password" name="password" required="required" id="password"><br />
                    <a href="#">Forgot Password?</a><br><br>
                    <input type="submit" value="Log In" class="button"><br>
                    <hr><br>
                    <p>Don't have an account yet? <a href="?action=show_create_form">Create one.</a></p>
                </form>
<!--             <p><?php echo $login_message; ?></p>-->
            </div>
        </main>
     </div>
        <footer>
            <?php include '../modules/footer.php'; ?>
        </footer>
    </body>
</html>
    