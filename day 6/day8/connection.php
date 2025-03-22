<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=ariana","root","");

    $username= "Ariana";
    $password = password_hash("mypassword123", PASSWORD_DEFAULT);
    $email = "test@gmail.com";

    // $sql = "INSERT INTO users(username,password, email) VALUES ('$username', '$password', '$email')";
  
    // $sql = "ALTER table users ADD email VARCHAR(255)";
    
    $sql = "DROP TABLE PRODUCTS";
    
    $pdo->exec($sql);

    echo "New record created succssefully";
}catch(DOExepction $e){
    echo $e->getMessage();
}

?>