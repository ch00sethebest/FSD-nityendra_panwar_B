<?php
include("db.php");

if(isset($_POST['delete']))
{

$id=$_POST['id'];

$query="delete from student where id='$id'";

mysqli_query($conn,$query);

echo "Record Deleted";

}
?>

<form method="post">

Enter ID:
<input type="text" name="id"><br><br>

<input type="submit" name="delete" value="Delete">

</form>