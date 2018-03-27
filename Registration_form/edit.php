<?php
include('conn.php');

$column=mysqli_real_escape_string($conn,$_POST['column']);
$id=mysqli_real_escape_string($conn,$_POST['id']);
$content=mysqli_real_escape_string($conn,$_POST['content']);

$query="UPDATE `students` SET `$column`='$content' WHERE `id`='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
	echo 'success';
}else
{
	//die(mysqli_error($result));
	die("kufa");
}

?>
