<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
     $mg_id=$_GET["mg_id"];
	 $commenter_id=$_GET["commenter_id"];
	  $comment_text=$_GET["comment_text"];
	  $comment_by=$_GET["comment_by"];
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith");
	 $sql="insert into mentee_goals_comment(mg_id,comment_by,commenter_id,comment_text) values('".$mg_id."','".$comment_by."','".$commenter_id."','".$comment_text."')";
	 mysql_query($sql);
 /*	if(mysql_query($sql))
		echo "record inserted";
	else 
		mysql_error();*/
	 $s="select * from mentee_goals_comment where mg_id=$mg_id";
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