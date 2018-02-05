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
	 if(isset($_POST['but_upload'])){
        $  = $_FILES['file']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $uploadFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif","mp3","rar","tar.gz","zip","ppt","pptx","mp4","doc","docx","pdf","txt");

        // Check extension
        if( in_array($uploadFileType,$extensions_arr) ){
            
            // Convert to base64 
            $upload_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $upload = 'data:upload/'.$uploadFileType.';base64,'.$upload_base64;

            // Insert record
            //$query = "insert into uploads(uploads) values('".$name."')";
           
            //mysqli_query($connection,$query) or die(mysqli_error($connection));
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$name);

        }
    
    }
	 $sql="insert into mentee_goals_comment(mg_id,comment_by,commenter_id,comment_text,uploads) values('".$mg_id."','".$comment_by."','".$commenter_id."','".$comment_text."','".$name."')";
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