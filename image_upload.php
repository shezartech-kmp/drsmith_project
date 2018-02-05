
<?php

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("drsmith") or die(mysql_error());

// Your file name you are uploading
$file_name = $_FILES['ufile']['name'];

// random 4 digit to add to our file name
// some people use date and time in stead of random digit
$random_digit=rand(0000,9999);

//combine random digit to you file name to create new file name
//use dot (.) to combile these two variables

$new_file_name=$random_digit.$file_name;

//set where you want to store files
//in this example we keep file in folder upload
//$new_file_name = new upload file name
//for example upload file name cartoon.gif . $path will be upload/cartoon.gif
$path= "images/".$new_file_name;
if($ufile !="none")
{
if(copy($_FILES['ufile']['tmp_name'], $path))
{

mysql_query("INSERT INTO images (name) VALUES('$new_file_name')") or die(mysql_error());	
echo "Successful<BR/>";

//$new_file_name = new file name
//$HTTP_POST_FILES['ufile']['size'] = file size
//$HTTP_POST_FILES['ufile']['type'] = type of file
echo "File Name :".$new_file_name."<BR/>";
echo "File Size :".$_FILES['ufile']['size']."<BR/>";
echo "File Type :".$_FILES['ufile']['type']."<BR/>";
}
else
{
echo "Error";
}
}
?>



<!DOCTYPE html>
<html>
<body>

<table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form action="image_upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td><strong>Single File Upload </strong></td>
</tr>
<tr>
<td>Select file
<input name="ufile" type="file" id="ufile" size="50" /></td>
</tr>
<tr>
<td align="center"><input type="submit" name="Submit" value="Upload" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>


	</body>
</html>