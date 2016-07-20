<?php
function get_cities() {
    global $db;
    $query = 'SELECT * FROM adress
              ORDER BY city';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function get_city($adress_id) {
    global $db;
    $query = 'SELECT * FROM adress
              WHERE adressID = :adressID';
    $statement = $db->prepare($query);
    $statement->bindValue(':adressID', $adress_id);
    $statement->execute();  
    $city = $statement->fetch();
    $statement->closeCursor(); 
    return $city;
}

//function delete_category($category_id) {
//   global $db;
//   $query = 'DELETE FROM category
//              WHERE categoryID = :categoryID';
//    $statement = $db->prepare($query);
//    $statement->bindValue(':categoryID', $category_id);
//    $statement->execute();
//    $statement->closeCursor();
//}
//
//function add_category($categoryName) {
//   global $db;
//   $query = 'INSERT INTO category
//               (categoryName)
//            VALUES
//               (:categoryName)';
//   $statement = $db->prepare($query);
//   $statement->bindValue(':categoryName', $categoryName);
//   $statement->execute();
//   $statement->closeCursor();
//}