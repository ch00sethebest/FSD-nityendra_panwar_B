<?php
include("db.php");

if(isset($_POST['update']))
{

$id=$_POST['id'];
$name=$_POST['name'];

$query="update student set name='$name' where id='$id'";

mysqli_query($conn,$query);

echo "Record Updated";

}
?>

<form method="post">

Enter ID:
<input type="text" name="id"><br><br>

Enter New Name:
<input type="text" name="name"><br><br>

<input type="submit" name="update" value="Update">

</form>