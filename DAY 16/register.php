<?php
include_once('config.php');

if(isset($_POST['submit'])){
    $emri = $_POST['emri'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $tempPass = $_POST['password'];
    $password = password_hash($tempPass, PASSWORD_DEFAULT);

    $tempCofirm = $_POST['confirm_password'];
    $confirmPassword = password_hash($tempCofirm, PASSWORD_DEFAULT);

    if(empty($emri) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)){
        echo "You have not filled in all the fields";
}
else{
    $sql = "INSERT INTO users (emri, username, email, password, confirmPassword) VALUES (emri, username, email, password, confirmPassword)";

    $insertsql = $conn->prepare($sql);
    
    $insertsql -> bindParam(':emri', $emri);
    $insertsql -> bindParam(':username', $username);
    $insertsql -> bindParam(':email', $email);
    $insertsql -> bindParam(':password', $password);
    $insertsql -> bindParam(':confirmPassword', $confirmPassword);

     $insertsql-> execute();

    header('Location: login.php');

}
}
?>