<?php

include("db.php");

if(isset($_POST['submit']))
{
$id=$_POST["id"];



$sql = "select uploads from uploads where id='$id'";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result);



$image = $row['uploads'];
$image_src = "uploads/".$image;
}
?>
<img src='<?php echo $image_src;  ?>' height="300" width="300" align="centre" >

<!DOCTYPE html>
<html>
<head>
	<title>retrieve</title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">
    <br/>
<input type="rext" name="id">
<br/><br/>
<input type="submit" name="submit" value="submit">
</form>


</body>
</html>