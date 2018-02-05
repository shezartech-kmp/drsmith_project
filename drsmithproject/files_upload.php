<!doctype html>
<html>
<head>
    <?php
    include("db.php");
 
    if(isset($_POST['but_upload'])){
        $name = $_FILES['file']['name'];
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
            $query = "insert into uploads(uploads) values('".$name."')";
           
            mysqli_query($connection,$query) or die(mysqli_error($connection));
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$name);

        }
    
    }
    ?>
<body>
    <form method="post" action="" enctype='multipart/form-data'>
        <input type='file' name='file' />
        <input type='submit' value='Save name' name='but_upload'>
        
    </form>

</body>
</html>
