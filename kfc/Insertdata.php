<?php
$name=$_POST['username'];
$pass=$_POST['password'];


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'login');
$q="insert into Wow (username,passwrd) values('$name','$pass')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<html
<head>
</head>
<body>

<p>
<?php
if($status==1)
echo"welcome to tutor.com";
else
echo"not inserted";

?>



</p>
</body></html>