<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
     $mentee_task_id=$_GET['mentee_task_id'];
	 $comment_by=$_GET['comment_by'];
	 $commentor_id=$_GET['commentor_id'];
	 $comment_text=$_GET['comment_text'];
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith1");
	$sql="insert into mentee_task_comment(mentee_task_id,comment_by,commenter_id,comment_text) values('".$mentee_task_id."','".$comment_by."','".$commentor_id."','".$comment_text."')";
	 mysql_query($sql);
 /*	if(mysql_query($sql))
		echo "record inserted";
	else 
		mysql_error();*/
	//  $s="select * from mentee_goals_comment where mentee_goal_id=$mentee_goal_id";
	//  $result=mysql_query($s);
	//  $count=mysql_num_rows($result);
	// $a=array();
	// for($i=0;$i<$count;$i++)
	// {
	// 	$row=mysql_fetch_assoc($result);
	//     array_push($a,$row);
	// }
	// echo json_encode($a);
?>