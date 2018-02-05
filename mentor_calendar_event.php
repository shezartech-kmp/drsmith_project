<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	 $mentor_id=$_GET["mentor_id"];
	 $day=$_GET["day"];
	 $month=$_GET["month"];
	 $year=$_GET["year"];
	 $webinar=$_GET["webinar"];
	 $meeting=$_GET["meeting"];
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith");
	
	$sql="insert into mentor_calendar_event(mentor_id,day,month,year,webinar,meeting) values('".$mentor_id."','".$day."','".$month."','".$year."','".$webinar."','".$meeting."')";
	// mysql_query($sql);
	 
 if(mysql_query($sql))
		echo "noted successfully";
	else 
		mysql_error();

?>