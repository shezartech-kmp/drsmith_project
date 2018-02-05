<?php  

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$connection= mysqli_connect('localhost','root','','drsmith1');

if (!$connection) {


	die("database connection failed");

}
	$id=$_GET["id"];

 $query1= "SELECT * FROM mentee where mid='$id'";



 //$query2="SELECT * FROM mentor";
 

 $result1=mysqli_query($connection,$query1);
 //$result2=mysqli_query($connection,$query2);
 	//$row1=mysqli_fetch_assoc($result1);
    //$row2=mysqli_fetch_assoc($result2);

 	$a=array();


 	while($row1=mysqli_fetch_assoc($result1))
 	{
 		



 			array_push($a, $row1);

 		    //array_push($a, $row2);


 			//return false;
 		}

 	

echo json_encode($a);

 if(!$result1){

die('Query FAILED'.mysqli_error()); 

 }


?>
