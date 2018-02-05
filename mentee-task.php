
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith1");
	$id=$_GET['id'];
	
	$mentor_id=$_GET['mentor_id'];
	 $sql="select * from mentee_tasks where mentee_id=$id ";
	
	 $result=mysql_query($sql);
	 $count=mysql_num_rows($result);
	$a=array();
	
	for($i=0;$i<$count;$i++)
	{
		$row=mysql_fetch_assoc($result);
	    array_push($a,$row);
	}
	echo json_encode($a);
?>