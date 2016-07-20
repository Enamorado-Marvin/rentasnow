<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en-us">
    <head>
        <title>List a new property | RentasNow.com</title>
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
            <div class="add-form">
                <form class="form" action="index.php" method="post" enctype="multipart/form-data">
                    <h2>Submit a New Property</h2>
                    <input type="hidden" name="action" value="add_property">
                    <div class="group">
                        <div class="col span_6_of_12">
                            <label>Property Title</label><br/>
                            <input type="text" name="propertyName" required="required" id="name"><br/>
                        </div>
                        <div class="col span_6_of_12">
                            <label>Address</label>
                            <input type="text" name="address" required="required" /><br/>
                        </div>
                    </div>
                    <div class="group">
                        <div class="col span_3_of_12">
                            <label>City</label>
                            <select name="adressID">
                                <?php foreach ( $cities as $city ) : ?>
                                    <option value="<?php echo $city['adressID']; ?>">
                                        <?php echo $city['city']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select><br/>
                        </div>
                        <div class="col span_3_of_12">
                            <label>State</label>
                            <input type="text" name="state"><br/>
                        </div>
                        <div class="col span_3_of_12">
                            <label>Zip Code</label>
                            <input type="text" name="zipCode"><br/>
                        </div>
                        <div class="col span_3_of_12">
<!--                            <label>Upload Your Photo</label><br/>
                            <input type="file" name="file"><br/>-->
                        </div>
                    </div>
                    <div class="group">
                        <div class="col span_8_of_12">
                            <label>Property Description</label>
                            <textarea rows="5" cols="50" name="propertyDetails"></textarea><br/>
                        </div>
                        <div class="col span_4_of_12">
                            <p>* An image should have minimum width of 850px and minimum height of 600px.</p>
                        </div>
                    </div>
                    <div class="group">
                        <div class="col span_4_of_12">
                            <label>Type</label><br />
                            <select name="categoryID">
                                <?php foreach ( $categories as $category ) : ?>
                                    <option value="<?php echo $category['categoryID']; ?>">
                                        <?php echo $category['categoryName']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select><br/>
                        </div>
                        <div class="col span_4_of_12">
                            <label>Number of Bedrooms</label><br/>
                            <input type="text" name="numberOfBeds" required="required" id="lastname"><br/>
                        </div>
                        <div class="col span_4_of_12">
                            <label>Number of Bathrooms</label><br />
                            <input type="text" name="numberOfBaths" required="required" id="email"><br />
                        </div>
                    </div>
                    <div class="group">
                        <div class="col span_4_of_12">
                            <label>Contact Phone</label><br />
                            <input type="tel" name="propertyPhone" required="required" /><br />
                        </div>
                        <div class="col span_4_of_12">
                            <label>Price</label><br />
                            <input type="text" name="propertyPrice" required="required"/><br />
                        </div>
                        <div class="col span_4_of_12">
                            <label>Area (Square Meters)</label><br />
                            <input type="text" name="propertySquareMeters" required="required" /><br />
                            <br/>
                        </div>
                    </div>
                    <div class="group">
                        <input type="submit" value="Submit Property" class="button col span_3_of_12"><br />
                    </div>
                </form>
            </div>
        </main>
     </div>
        <footer>
            <?php include '../modules/footer.php'; ?>
        </footer>
    </body>
</html>