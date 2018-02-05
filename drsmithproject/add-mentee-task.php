
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
     $mentor_id=$_GET["mentor_id"];
	 $mentee_id=$_GET["mentee_id"];
	 $task=$_GET["task"];
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith");
	$sql="insert into mentee_tasks(mentee_id,mentor_id,tasks) values('".$mentee_id."','".$mentor_id."','".$task."')";
	 mysql_query($sql);
 /*	if(mysql_query($sql))
		echo "record inserted";
	else 
		mysql_error();*/
	 $s="select * from mentee_tasks where mentee_id=$mentee_id";
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