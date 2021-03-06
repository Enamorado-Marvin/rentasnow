<?php
function get_properties() {
    global $db;
    $query = 'SELECT * FROM property
              ORDER BY propertyID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function get_properties_by_categories($category_id) {
    global $db;
    $query = 'SELECT * FROM property
              WHERE property.categoryID = :categoryID
              ORDER BY propertyID';
    $statement = $db->prepare($query);
    $statement->bindValue(":categoryID", $category_id);
    $statement->execute();
    $properties = $statement->fetchAll();
    $statement->closeCursor();
    return $properties;
}

function get_property($property_id) {
    global $db;
    $query = 'SELECT * FROM property
              WHERE propertyID = :propertyID';
    $statement = $db->prepare($query);
    $statement->bindValue(":propertyID", $property_id);
    $statement->execute();
    $property = $statement->fetch();
    $statement->closeCursor();
    return $property;
}

function delete_property($property_id) {
    global $db;
    $query = 'DELETE FROM property
              WHERE propertyID = :property_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':property_id', $property_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_property($category_id, $propertyName, $address, $city_id, $state, $zipCode, $numberOfBeds, $numberOfBaths, $propertyPrice, 
                      $propertySquareMeters, $propertyDetails, $propertyPhone, $user_id) {
    global $db;
//    $password = sha1($email . $password);
    $query = 'INSERT INTO property
                 (categoryID, propertyName, address, adressID, state, zipCode, numberOfBeds, numberOfBaths, propertyPrice, 
                  propertySquareMeters, propertyDetails, propertyPhone, userID)
              VALUES
                 (:categoryID, :propertyName, :address, :adressID, :state, :zipCode, :numberOfBeds, :numberOfBaths, :propertyPrice,
                  :propertySquareMeters, :propertyDetails, :propertyPhone, :userID)';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryID', $category_id);
    $statement->bindValue(':propertyName', $propertyName);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':adressID', $city_id);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':zipCode', $zipCode);
    $statement->bindValue(':numberOfBeds', $numberOfBeds);
    $statement->bindValue(':numberOfBaths', $numberOfBaths);
    $statement->bindValue(':propertyPrice', $propertyPrice);
    $statement->bindValue(':propertySquareMeters', $propertySquareMeters);
    $statement->bindValue(':propertyDetails', $propertyDetails);
    $statement->bindValue(':propertyPhone', $propertyPhone);
    $statement->bindValue(':userID', $user_id);
//    $statement->bindValue(':images', $images);
    $statement->execute();
    $statement->closeCursor();
}

function edit_property($property_id, $propertyName, $numberOfBeds, $numberOfBaths, $propertyPrice, 
                      $propertyTerms, $propertyPolicy, $propertySquareMeters, $propertyDetails, $images) {
    global $db;
//    $password = sha1($email . $password);
    $query = 'UPDATE property
                 SET propertyID = :propertyID, propertyName=:propertyName, numberOfBeds=:numberOfBeds, 
                 numberOfBaths=:numberOfBaths, propertyPrice=:propertyPrice,  
                 propertyTerms=:propertyTerms, propertyPolicy=:propertyPolicy, propertySquareMeters=:propertySquareMeters, 
                 propertyDetails=:propertyDetails, images=:images
              WHERE propertyID = :propertyID';
    $statement = $db->prepare($query);
    $statement->bindValue(':propertyID', $property_id);
    $statement->bindValue(':propertyName', $propertyName);
    $statement->bindValue(':numberOfBeds', $numberOfBeds);
    $statement->bindValue(':numberOfBaths', $numberOfBaths);
    $statement->bindValue(':propertyPrice', $propertyPrice);
    $statement->bindValue(':propertyTerms', $propertyTerms);
    $statement->bindValue(':propertyPolicy', $propertyPolicy);
    $statement->bindValue(':propertySquareMeters', $propertySquareMeters);
    $statement->bindValue(':propertyDetails', $propertyDetails);
    $statement->bindValue(':images', $images);
    $statement->execute();
    $statement->closeCursor();
}


?>
