
<div class="section group">
<div class="logo col span_4_of_12">
 <a href="http://rentasnow.com"><img src="/images/logo.png" alt="RentasNow.com Logo"></a>
</div>
<div class="col span_8_of_12">
 <div class="menu_bar">
  <a href="#" class="bt-menu"><span class="fa fa-bars"></span></a>
 </div>
 <nav>
<!--  <ul>
      <li><a href="/RentasNow/"><span class=""><i class="ico fa fa-home"></i></span>Home</a></li>
    <li><a href="#"><span class=""><i class="ico fa fa-building"></i></span>My Rents</a></li>
    <li><a href="/RentasNow/account/?action=show_add_property_form"><span class=""><i class="ico fa fa-check-circle"></i></span>List Your Property</a></li>
    <li><a href="/RentasNow/account/?action=show_profile"><span class=""><i class="ico fa fa-user"></i></span>Profile</a></li>
    <li><a href="#"><span class=""><i class="ico fa fa-file-text" aria-hidden="true"></i></span>Blog</a></li>
    <li><a href="/RentasNow/contact/"><span class=""><i class="ico fa fa-envelope"></i></span>Contact Us</a></li>
    <?php
        if (!isset($_SESSION['user'])) { ?>
        <li>
            <a href="/RentasNow/account/"><span class=""><i class="ico fa fa-sign-in"></i></span>Sign in</a></li>
        <?php } else { ?>
        <li><a href="/RentasNow/account/?action=logout"><span class=""><i class="ico fa fa-sign-out"></i></span>Logout</a></li>
    <?php } ?>
  </ul>-->
 <ul>
    <li><a href="http://rentasnow.com"><span class=""><i class="ico fa fa-home"></i></span>Home</a></li>
    <li><a href="#"><span class=""><i class="ico fa fa-building"></i></span>My Rents</a></li>
    <li><a href="/account/?action=show_add_property_form"><span class=""><i class="ico fa fa-check-circle"></i></span>List Your Property</a></li>
    <li><a href="/account/?action=show_profile"><span class=""><i class="ico fa fa-user"></i></span>Profile</a></li>
    <!--    <li><a href="#"><span class=""><i class="ico fa fa-file-text" aria-hidden="true"></i></span>Blog</a></li>-->
    <li><a href="/contact/"><span class=""><i class="ico fa fa-envelope"></i></span>Contact Us</a></li>
    <?php
        if (!isset($_SESSION['user'])) { ?>
        <li>
            <a href="/account/"><span class=""><i class="ico fa fa-sign-in"></i></span>Sign in</a></li>
        <?php } else { ?>
        <li><a href="/account/?action=logout"><span class=""><i class="ico fa fa-sign-out"></i></span>Logout</a></li>
    <?php } ?>
</ul>
 </nav>
</div>
</div>