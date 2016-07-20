<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM category
              ORDER BY categoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM category
              WHERE categoryID = :categoryID';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryID', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();   
    $category_name = $category['categoryName'];
    return $category_name;
}

function delete_category($category_id) {
   global $db;
   $query = 'DELETE FROM category
              WHERE categoryID = :categoryID';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryID', $category_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_category($categoryName) {
   global $db;
   $query = 'INSERT INTO category
               (categoryName)
            VALUES
               (:categoryName)';
   $statement = $db->prepare($query);
   $statement->bindValue(':categoryName', $categoryName);
   $statement->execute();
   $statement->closeCursor();
}