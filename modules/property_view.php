<?php
    // Parse data
    $category_id = $property['categoryID'];
    $propertyName = $property['propertyName'];
    $address = $property['address'];
    $city_id = $property['adressID'];
    $state = $property['state'];
    $zipCode = $property['zipCode'];
    $propertyDetails = $property['propertyDetails'];
    $numberOfBeds = $property['numberOfBeds'];
    $numberOfBaths = $property['numberOfBaths'];
    $propertyPhone = $property['propertyPhone'];
    $propertyPrice = $property['propertyPrice'];
    $propertySquareMeters = $property['propertySquareMeters'];
    $user_id = $property['userID'];
	if (isset($product['images'])) {
		$images = unserialize($product['images']);		
	}
	//print_r($images);

    // Add HMTL tags to the description
    $description_tags = add_tags($description);

    // Format price
    $property_price_f = number_format($propertyPrice, 2);
    
    // Format size to square meters
    $property_size_f = number_format($propertySquareMeters, 2);

    // Get image URL and alternate text
    $image_filename = $propertyID . '_m.jpg';
    $image_path = $app_path . 'images/' . $image_filename;
    $image_alt = 'Image filename: ' . $image_filename;
?>

<h1><?php echo $propertyName; ?></h1>
<div id="left_column">
	<?php 
		if (isset($images) && $images != NULL) {
			foreach ($images as $image) {
	?>
				<p><img src="<?php echo IMAGE_SITE_DIR . $image['100']; ?>"
				alt="<?php echo IMAGE_SITE_DIR . $image['100']; ?>"> </p>
	<?php	
			}
		}
	?>
</div>

<div id="right_column">
    <p><b>Property Title:</b>
        <?php echo $propertyName; ?></p>
    <p><b>Address:</b>
        <?php echo $address . ', ' . $city_id['cityName'] . ', ' . $state . ', ' . $zipCode; ?></p>
    <p><b>Property Description:</b>
        <?php echo $propertyDetails; ?></p>
    <p><b>Property Type:</b>
        <?php echo $category['categoryID']; ?></p>
    <p><b>Number of Bedrooms:</b>
        <?php echo $numberOfBeds['numberOfBeds']; ?></p>
    <p><b>Number of Bathrooms:</b>
        <?php echo $numberOfBaths['numberOfBaths']; ?></p>
    <p><b>Contact Phone:</b>
        <?php echo $propertyPhone['propertyPhone']; ?></p>
    <p><b>Property Price:</b>
        <?php echo '$' . $property_price_f; ?></p>
    <p><b>Property Area:</b>
        <?php echo $property_size_f . ' M' . '<sup>2</sup>'; ?></p>
    
<!--    <form action="<?php echo $app_path . 'cart' ?>" method="post">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="product_id"
               value="<?php echo $product_id; ?>">
        <b>Quantity:</b>
        <input type="text" name="quantity" value="1" size="2">
        <input type="submit" value="Add to Cart">
    </form>-->
    <h2 class="no_bottom_margin">Description</h2>
    <?php echo $description_tags; ?>
</div>