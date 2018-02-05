<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	 $mentee_id=$_GET["mentee_id"];
	 $mentor_id=$_GET["mentor_id"];
	 $comment=$_GET["comment"];
	 $date=$_GET["date"];
	   $start_time=$_GET["start_time"];
	    $end_time=$_GET["end_time"];
	 
	
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith");
	
	$sql="insert into meeting_schedule(mentor_id,mentee_id,comment,date,start_time,end_time) values('".$mentor_id."','".$mentee_id."','".$comment."','".$date."','".$start_time."','".$end_time."')";
     mysql_query($sql);
	 
/* if(mysql_query($sql))
		echo "noted successfully";
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