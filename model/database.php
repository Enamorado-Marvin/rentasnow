<?php
//    $dsn = 'mysql:host=localhost;dbname=rentasnow'; // Local configuration
    $dsn = 'mysql:host=thebeathomecom.ipagemysql.com;dbname=rentasnow'; // Remote configuration
    $username = 'mgs_user';
    $password = 'pa55word';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>

