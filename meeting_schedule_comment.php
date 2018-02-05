<?php

// include 'db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
     $schedule_id=$_GET['schedule_id'];
	 $comment_by=$_GET['comment_by'];
	  $commentor_id=$_GET['commentor_id'];
	 $comment_text=$_GET['comment_text'];

   


	 $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "drsmith1";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	
	 $sql = "INSERT INTO meeting_schedule_comment(schedule_id,comment_by,commentor_id,comment_text)  VALUES('$schedule_id',
	 '$comment_by','$commentor_id','$comment_text')";
    $conn->query($sql);
 /*	if(mysql_query($sql))
		echo "record inserted";
	else 
		mysql_error();*/
	 $s="select * from meeting_schedule_comment where schedule_id='$schedule_id'";
	 $result=$conn->query($s);
	 $count=mysqli_num_rows($result);
	$a=array();
	for($i=0;$i<$count;$i++)
	{
		$row=mysqli_fetch_assoc($result);
	    array_push($a,$row);
	}
	echo json_encode($a);
?>