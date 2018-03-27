<?php
include('conn.php');
$full_name=mysqli_real_escape_string($conn,$_POST['name']);
$id_number=mysqli_real_escape_string($conn,$_POST['id']);
$email_addr=mysqli_real_escape_string($conn,$_POST['email']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);


$query="INSERT INTO students (name,id_number,email_addr,gender) VALUES ('$full_name','$id_number','$email_addr','$gender')";
$result=mysqli_query($conn,$query);
if($result)
{
    header("Location:show.php");
}else
{
    die("kabisa");
}
?>
