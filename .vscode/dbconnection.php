<?php
$name=$_GET['name'];
$email=$_GET['email'];
$number=$_GET['number'];
$query=$_GET['query'];

$conn=new mysqli('localhost','root','','trial');
if($conn->connect_error){
    die('Connection failed :'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration(name, email, number, query)
    values(?,?,?,?)");
    $stmt->bind_param("ssis",$name,$email,$number,$query);
    $stmt->execute();
    echo "Contact Form Successfully Filled";
    $stmt->close();
    $conn->close();
}
?>