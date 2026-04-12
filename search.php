<?php
include("db.php");

if(isset($_POST['search']))
{

$id=$_POST['id'];

$query="select * from student where id='$id'";

$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result))
{
echo $row['id']." ";
echo $row['name']." ";
echo $row['email']." ";
echo $row['mobile'];
}

}
?>

<form method="post">

Enter ID:
<input type="text" name="id"><br><br>

<input type="submit" name="search" value="Search">

</form>