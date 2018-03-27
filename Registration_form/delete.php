<?php
include('conn.php');
$id=mysqli_real_escape_string($conn,$_GET['id']);

$query="DELETE FROM `students` WHERE `id`='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
	header('location:show.php');
}else
{
	die("kufa");
}
?>
