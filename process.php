<?php

//connect to mysql database

$servername="localhost";
$username="root";
$password="";
$dbname="user_auth";// change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed :". $conn->connect_error);
}

//Handle login form data

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $hashedPassword=md5($password); // hashing of password for security

    $sql="SELECT * FROM users where email = '$email' and password='$hashedPassword'";
    $result=$conn->query($sql);

    if($result->num_rows>0){
        echo "Login Successful";
    }
    else{
        echo "Login Failed";
    }
}


// Handle signup form data

if(isset($_POST['signup']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $hashedPassword=md5($password); // hashing of password for security

    $sql="INSERT INTO users (name,email,password) values('$name','$email','$hashedPassword')";

    if($conn->query($sql)===TRUE)
    {
        echo "Signup successful";
    }
    else
    {
        echo "Error" . $sql ."<br>".$conn->error;
    }

}

$conn->close();

?>


