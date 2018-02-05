<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
     $mentee_id=$_GET["mentee_id"];
	 $task_id=$_GET["task_id"];
	 $comment=$_GET["comment"];
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith");
	$sql="insert into mentee_task_comment(mentee_id,task_id,comment) values('".$mentee_id."','".$task_id."','".$comment."')";
	 mysql_query($sql);
 /*	if(mysql_query($sql))
		echo "record inserted";
	else 
		mysql_error();*/
	 $s="select * from mentee_task_comment where mentee_id=$mentee_id AND task_id=$task_id";
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