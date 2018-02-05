<?php 

if(isset($_GET['submit']))
{
$mid=$_GET['mid'];
$name=$_GET['name'];
//$img=$_GET['img'];
$address=$_GET['address'];
$created_at=$_GET['created_at'];
//$degree=$_GET['degree'];


$connection= mysqli_connect('localhost','root','','drsmith');

if (!$connection) {

	die("database connection failed");

}

 $query= "INSERT INTO mentee(mid,name,address,created_at) VALUES ('$mid','$name','$address','$created_at')";
 //$query2= "INSERT INTO mentee(name,location,created_at,degree) VALUES ('$name','$location','$created_at','degree')";
 

 $result=mysqli_query($connection,$query);

 if(!$result){

die('Query FAILED'.mysqli_error());

 }

}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" >
</head>
<body>

<!--<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

<div class="container">

	<div class="col-xs-6">

		<div class="dropdown">
  <button class="dropbtn">Select Type</button>
  <div class="dropdown-content">
    <a href="#">Mentor</a>
    <a href="#">Mentee</a>
  </div>
</div>-->

		<form action="login_create.php" method="get">
          
          <style>
          h3 {
            color: red;
              } 
          </style>
          <h3>Welcome Login Here</h3>

	      <!-- <div class="form-group">
	       	<label for="id">ID</label>
	     <input type="text" name="id" class="form-control">
	       </div>
	      -->

	       <div class="form-group">
	       	<label for="mid">MID</label>
	     <input type="text" name="mid" class="form-control">
	       </div>

           
	   <!--    <div class="form-group">
	       	<label for="image">Image</label>
	     <input type="image" name="img" class="form-control">
	       </div>
        -->

	       <div class="form-group">
	       	<label for="name">Name</label>
	     <input type="text" name="name" class="form-control">
	       </div>


	       <div class="form-group">
	       	<label for="address">Address</label>
	     <input type="text" name="address" class="form-control">
	       </div>

	       <div class="form-group">
	       	<label for="created_at">Created at</label>
	     <input type="text" name="created_at" class="form-control">
	       </div>

	       
	       <input class="btn btn-primary" type="submit" name="submit" value="Store In DB">

	       




    </form>
</div>




 

</div>
</body>
</html>