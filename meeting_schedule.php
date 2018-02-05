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
	mysql_select_db("drsmith1");
	
	$sql="insert into meeting_schedule(mentor_id,mentee_id,comment,date,start_time,end_time) values('".$mentor_id."','".$mentee_id."','".$comment."','".$date."','".$start_time."','".$end_time."')";
     mysql_query($sql);
	 
/* if(mysql_query($sql))
		echo "noted successfully";
	else 
		mysql_error();*/
		

?>