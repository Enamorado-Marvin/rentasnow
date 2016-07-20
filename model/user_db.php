<?php
function get_users() {
    global $db;
    $query = 'SELECT * FROM user
              ORDER BY userID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function get_user($user_id) {
    global $db;
    $query = 'SELECT * FROM user
              WHERE userID = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":user_id", $user_id);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
}

function delete_user($user_id) {
    global $db;
    $query = 'DELETE FROM user
              WHERE userID = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_user($name, $lastname, $password, $email) {
    global $db;
//    $password = sha1($email . $password);
    $query = 'INSERT INTO user
                 (name, lastName, password, email)
              VALUES
                 (:name, :lastname, :password, :email)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':lastname', $lastname);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $statement->closeCursor();
}

function edit_user($user_id, $name, $lastname, $password, $email, $phone) {
    global $db;
//    $password = sha1($email . $password);
    $query = 'UPDATE user
                 SET userID = :userID, name=:name, lastName=:lastname, password=:password, email=:email, phone=:phone
              WHERE userID = :userID';
    $statement = $db->prepare($query);
    $statement->bindValue(':userID', $user_id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':lastname', $lastname);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->execute();
    $statement->closeCursor();
}

function user_login($email, $password) {
    global $db;
//    $password = sha1($email . $password);
    $query = 'SELECT * FROM user WHERE email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    return $user;
}

?>
