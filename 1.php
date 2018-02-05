<html>
<body>
<form  method="POST">id:
<input type="number" name="number" placeholder="enter id of mentor">
<input type="submit" name="showlist" value="goals">
</form>
</body>
</html>
<?php
if($_POST["showlist"]=="goals")
	{
		//echo "sfdds";
		//echo $_POST["name"];
	
   /* $conn = mysqli_connect("localhost","root","","drsmith");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     } 
    echo "Connected successfully";*/
	$id=$_POST["number"];
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith");
	//echo "connected";
   $sql="select * from mentor_goals where mentor_id=$id";
	//$resource=mysql_query($sql);
	//$row=mysql_fetch_row($resource);
	$result=mysql_query($sql);
	//$row=mysql_fetch_row($result);
 //	$var =encode_json($row);
	//echo $var;
	//echo $row['address']."address of mentee";
	//echo $row[0]."".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." " ;
	//$row=mysql_fetch_assoc($result);
	//echo $row['id']." ".$row['mid']." ".$row['address']." ".$row['name']."<br> ";
	$count=mysql_num_rows($result);
	echo "goals :<br>";
	$a=array();
	for($i=0;$i<$count;$i++)
	{
		$row=mysql_fetch_assoc($result);
	//echo $row['id']." ".$row['mid']." ".$row['name']." ".$row['address'].$row['img']." ".$row['created_at']."<br> ";
	//echo json_encode( $row["goals"])."<br>";
	array_push($a, $row);

	}
	echo json_encode($a);
	} 
?>