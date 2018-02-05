
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
     $id=$_GET["id"];
	// $goal=$_GET["goal"];
	mysql_connect("localhost","root","");
	mysql_select_db("drsmith1");
	   $q="SELECT COUNT(id)FROM mentor_goals WHERE 1";
	   $c= mysql_query($q);
	   	if(mysql_query($q))
	   	{
		echo "success";
		echo $c;
	}
	else 
		mysql_error()
	  
	  // $c=$q+1;
	   
	/* $sql="insert into mentor_goals(mentor_goal_id,mentor_id,goals) values('".$q."','".$id."','".$goal."')";
	 mysql_query($sql);
 /*	if(mysql_query($sql))
		echo "record inserted";
	else 
		mysql_error();*/
	/* $s="select * from mentor_goals where mentor_id=$id";
	 $result=mysql_query($s);
	 $count=mysql_num_rows($result);
	$a=array();
	for($i=0;$i<$count;$i++)
	{
		$row=mysql_fetch_assoc($result);
	    array_push($a,$row);
	}
	echo json_encode($a);*/
?>