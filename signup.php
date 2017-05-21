

<html>
<head><title>Signup</title>
</head>
<body>
<?php
$msg=$userid=$pwd="";
if($_SERVER['REQUEST_METHOD']=="post")
{
   $userid=$_POST['user'];
   $pwd=$_POST['pass'];
  $con=mysql_connect("localhost","root","pass") or die("Unable to connect");
  mysql_select_db("login");
  $sql="insert into register(username,password) values('$userid','$pwd')";
  $result=mysql_query($sql);
  
  if(!$result)
    $msg="Failed";
  else
     $msg="Saved";
  
mysql_close($con);
  
}



?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="user" placeholder="username"><br>
Password:<input type="text" name="pass" placeholder="*************"><br>
<input type="submit" name="submit"><br>

</form>
<span><?php echo $msg; ?></span>

</body>
</html>