<?php
session_start();

include_once('config.php');

if(isses($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        echo "Please fill in all fields";
}