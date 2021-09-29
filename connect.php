<?php
$firstName= $_POST['firstName'];
$lastName= $_POST['lastName'];
$Email= $_POST['email'];
$Password= $_POST['password'];
$confirmpassword=$_post['confirmpassword']

$conn = new mysqli('localhost','root','','register');
if($conn->connect_error){
    die('connection failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into details(firstName,lastName,email,password,confirm password)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstName, $lastName, $email, $password, $confirm password);
    $stmt->execute();
    echo"registration successfully....";
    $stmt->close();
    $conn->close();
}

?>


