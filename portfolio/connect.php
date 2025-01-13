<?php
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$message=$_POST['message'];


$conn = new mysqli('localhost','root','','record');
 if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contact(name,email,address,phone,message) values (?,?,?,?,?)");
    $stmt->bind_param("sssss",$name,$email,$address,$phone,$message);
    $stmt->execute();
    echo "successfully...";
    $stmt->close();
    $conn->close();
}
?>

