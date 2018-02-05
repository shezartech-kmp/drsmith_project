<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
     $interaction_id=$_GET["interaction_id"];
     $mentee_id=$_GET["mentee_id"];
	 $mentor_id=$_GET["mentor_id"];
	 $comment_by=$_GET["comment_by"];
	 $comment=$_GET["comment"];
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith");
	if($comment_by==="mentor")
	{
	$sql="insert into  interaction_comment(interaction_id,mentor_id,comment_by,comment) values('".$interaction_id."','".$mentor_id."','".$comment_by."','".$comment."')";
	 mysql_query($sql);
	
	}
	else
	{
		$sql="insert into interaction_comment(interaction_id,mentee_id,comment_by,comment) values('".$interaction_id."','".$mentee_id."','".$comment_by."','".$comment."')";
	 mysql_query($sql);
	}

 /*	if(mysql_query($sql))
		echo "record inserted";
	else 
		mysql_error();*/
	 $s="select * from interaction_comment where interaction_id=$interaction_id";
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