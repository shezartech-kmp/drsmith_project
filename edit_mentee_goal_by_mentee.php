<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
     $mentee_id=$_GET["mentee_id"];
	 $goal_id=$_GET["goal_id"];
	 $goal=$_GET["goal"];
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith");
	$sql="UPDATE mentee_goals SET goals='".$goal."',edited_date=CURRENT_TIMESTAMP()+1 WHERE mentee_id=$mentee_id AND mentee_goal_id=$goal_id";
		 mysql_query($sql);
		/* 	if(mysql_query($sql))
		echo "successfully updated";
	else 
		mysql_error();*/
	// $sql="insert into mentee_goals(mentee_id,goals) values('".$id."','".$goal."')";
	//$sql="update mentee_goals SET goals=$goal WHERE mentee_id=$mentee_id AND mentee_goal_id=$goal_id";
	/*$sql="UPDATE mentee_goals SET goals=$goal WHERE mentee_id=$mentee_id AND mentee_goal_id=$goal_id";
	 mysql_query($sql);
 	if(mysql_query($sql))
		echo "record inserted";
	else 
		mysql_error();*/
	 $s="select * from mentee_goals where mentee_id=$mentee_id AND mentee_goal_id=$goal_id ";
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