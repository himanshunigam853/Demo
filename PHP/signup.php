<?php

$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "food";

$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    ?>
    <script>
        alert ('Connection Successful')
    </script>
    <?php
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$sql = "INSERT INTO signup_users (name,email,password,phone) Value ('$name','$email','$password',$phone)";

$result = mysqli_query($conn,$sql);
if(!$result){
    echo "Connection Failed" .mysqli_error($conn);
    exit;
}

echo "Registration Successful";
mysqli_close($conn);

?>