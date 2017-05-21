<?php
 
if(isset($_POST["submit"]))
{

$image = $_FILES['imagefile']['tmp_name'];
    $img = file_get_contents($image);
	
    $con = mysqli_connect('localhost','root','pass','login') or die('Unable To connect');
    //$sql = "insert into images (image) values(?)";
	$curuser=$_SESSION['login_user'];
	if (strlen($img) < 149000) {
	
	$sql="Update register set image=? where username='$curuser'";
 
    $stmt = mysqli_prepare($con,$sql);
 
    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);
	}
	else
	    echo "Too big file";
 
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Successfullly UPloaded';
    }else{
        $msg = 'Could not upload';
    }

    mysqli_close($con);


}

?>