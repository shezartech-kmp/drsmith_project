  <?php


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");



   include "db.php";
 
      // username and password sent from form 
       
      $id=$_GET['id'];
      // $myusername = mysqli_real_escape_string($connection,$_GET['username']);
      // $mypassword = mysqli_real_escape_string($connection,$_GET['password']); 
      
      // $sql = "SELECT * FROM mentor WHERE name = '$myusername' and password = '$mypassword'";
      // $result = mysqli_query($connection,$sql);
      // $row = mysqli_fetch_assoc($result);

      //  if($result){
      //  $row=array("row"=>$row,"type"=> "mentor");
      //   }
      
      // $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row

      // $sql1 = "SELECT * FROM mentee WHERE name = '$myusername' and password = '$mypassword'";

            $sql1 = "SELECT * FROM mentee WHERE id='$id'";

      $result1 = mysqli_query($connection,$sql1);
      $row1 = mysqli_fetch_assoc($result1);
      
      $mid=$row1['mid'];
      // echo $mid ;

      $sql2= "SELECT name FROM mentor WHERE id='$mid'";
      $mentor_name=mysqli_query($connection,$sql2);

       $mentor_name = mysqli_fetch_assoc($mentor_name);

        if ($result1) {
           
       $row1 = array("row"=>$row1,"mentor"=>$mentor_name['name']);
         }
      
      $count1 = mysqli_num_rows($result1);
		
      if($count1 == 1) {
     echo json_encode($row1);
      
      }
      // else if ($count1==1) {
      //  echo json_encode($row1);
      // }

      else {
		echo json_encode(["value"=>"false"]);
		
      }
   
?>
