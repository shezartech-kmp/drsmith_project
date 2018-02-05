<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
     $reported_by=$_GET["reported_by"];
     $mentee_id=$_GET["mentee_id"];
	 $mentor_id=$_GET["mentor_id"];
	 $reason=$_GET["reason"];
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith");
	if($reported_by==="mentor")
	{
	$sql="insert into  report_abuse(reported_by,mentor_id,reason) values('".$reported_by."','".$mentor_id."','".$reason."')";
	 mysql_query($sql);
	 echo "reported successfully ";
	
	}
	else
	{
		$sql="insert into report_abuse(reported_by,mentee_id,reason) values('".$reported_by."','".$mentee_id."','".$reason."')";
	 mysql_query($sql);
	  echo "reported successfully ";
	}

 /*	if(mysql_query($sql))
		echo "record inserted";
	else 
		mysql_error();*/

?>