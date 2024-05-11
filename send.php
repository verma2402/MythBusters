<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'feedback';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO response (name,email,message) values ('$name','$email','$message')";
    mysqli_query($conn,$sql);
}

?>