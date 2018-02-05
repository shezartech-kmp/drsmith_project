<html>
<body>
<form  method="POST">
id:
<input type="number" name="id" placeholder="mentor id"><br>
goals:
<input type="text" name="name" placeholder="add goals of mentor"><br>
<input type="submit" name="submit" value="add">
</form>
</body>
</html>

<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

if($_POST["submit"]=="add")
	{
		//echo "sfdds";
		//echo $_POST["name"];
	
   /* $conn = mysqli_connect("localhost","root","","drsmith");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     } 
    echo "Connected successfully";*/
	$name=$_POST["name"];
	$id=$_POST["id"];
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith");
	//echo "connected";
   //$sql="select * from mentor_goals where mentor_id=$id";
	//$resource=mysql_query($sql);
	//$row=mysql_fetch_row($resource);
	 $sql="insert into mentor_goals values('".$id."','".$name."')";
	//$result=mysql_query($sql);
	//$row=mysql_fetch_row($result);
 //	$var =encode_json($row);
	//echo $var;
	//echo $row['address']."address of mentee";
	//echo $row[0]."".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." " ;
	//$row=mysql_fetch_assoc($result);
	//echo $row['id']." ".$row['mid']." ".$row['address']." ".$row['name']."<br> ";
	/*$count=mysql_num_rows($result);
	//echo "goals :<br>";
	for($i=0;$i<$count;$i++)
	{
		$row=mysql_fetch_assoc($result);
	//echo $row['id']." ".$row['mid']." ".$row['name']." ".$row['address'].$row['img']." ".$row['created_at']."<br> ";
	echo  json_encode( $row["goals"])."<br>";
	}
	} */
	if(mysql_query($sql))
		echo "record inserted";
	else 
		mysql_error();
	}
?>