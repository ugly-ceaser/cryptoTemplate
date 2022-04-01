<?php 

session_start();
require("../../../publicScript/conn.php");

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `adminDetails` WHERE `username` = ? AND `password` = ?";
    $result = $conn->prepare($query);
    $result->execute([$username, $password]);

    if($result->rowCount()){
        $user = $result->fetch();
        $_SESSION['ADMIN'] = $user['id'];
    
        header("location: ../dashboard.php");
    }

}

