<?php
session_start();
$a=$_POST['x'];
$b=$_POST['y'];
if ($a==""||$b=="")
{
echo " fill all";
echo "<a href='form.php'>click here to go back </a>";
}
else 

{
mysql_connect("localhost","root","");
mysql_select_db("netcamp");
$query="SELECT * FROM student WHERE name='$a' AND email='$b'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count!=0)
{
$_SESSION['name']=$a;
header ("location:welcome.php");
}
else 
{
echo " mismatch";
echo "<a href='form.php'>click here to go back </a>";
}
}
?>
