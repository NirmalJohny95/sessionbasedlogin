<?php
include('session.php');
include('picupload.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<img src="getImage.php?id=<?php echo $idno;?>" width="175" height="200" /><br>
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<hr>
<form enctype="multipart/form-data" method="post" action="">
<input type=hidden name=MAX_FILE_SIZE value=150000>
<input type=hidden name=completed value=1>
<input type=file name=imagefile value="Upload pic"><br>
<input type=submit name=submit>
</form><br>

<hr>

</body>
</html>