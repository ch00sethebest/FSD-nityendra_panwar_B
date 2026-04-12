<?php
include("db.php");

if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

if($id=="" || $name=="" || $email=="" || $mobile=="")
{
    echo "All fields required";
}
else
{
$query="insert into student values('$id','$name','$email','$mobile')";

mysqli_query($conn,$query);

echo "Record Inserted";
}
}
?>

<form method="post">

ID:
<input type="text" name="id"><br><br>

Name:
<input type="text" name="name"><br><br>

Email:
<input type="text" name="email"><br><br>

Mobile:
<input type="text" name="mobile"><br><br>

<input type="submit" name="submit" value="Insert">

</form>