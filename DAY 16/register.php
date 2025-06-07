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
}
?>