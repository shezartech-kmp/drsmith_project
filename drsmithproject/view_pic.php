
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("test");
	//$id=$_GET["id"];
	 $sql="select * from table1"; //where mentor_id=$id";
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