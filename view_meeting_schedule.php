<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

	 $mentor_id=$_GET["mentor_id"];
	 $mentee_id=$_GET["mentee_id"];
	 
	 mysql_connect("localhost","root","");
	mysql_select_db("drsmith1");
	
	//$sql="insert into mentor_forum(discussion_id,mentor_id,discussion_text) values('".$discussion_id."','".$mentor_id."','".$discussion_text."')";
	// mysql_query($sql);
	 
/* if(mysql_query($sql))
		echo "commented successfully";
	else 
		mysql_error();*/
	 $s="select * from meeting_schedule where mentor_id=$mentor_id AND mentee_id=$mentee_id";
	 $result=mysql_query($s);
	 $count=mysql_num_rows($result);
	$a=array();
	for($i=0;$i<$count;$i++)
	{
		$row=mysql_fetch_assoc($result);
	    array_push($a,$row);
	}
	echo json_encode($a);

?>