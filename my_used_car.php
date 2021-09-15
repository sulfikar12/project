<!-- session -->
<?php 
session_start();
$id= $_SESSION['variable'];
var_dump($id);
?>
<!-- uploding image -->
<?php
$host="localhost";
 $user_name="root";
 $password="";
 $database="db";
 $conn=mysqli_connect($host,$user_name,$password,$database);
 if(!$conn){
    echo "not connected";
}else{
    echo"connected sucessfully.<br>";
}

if(isset($_POST["submit"]))
{
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "./uploads/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "uploads/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
    $check = mysqli_query($conn,"insert into image(user_id,filename) values('$id','$dst_db')");  // executing insert query
		
    if($check)
    {
    	echo "uploding sucess";  
    }
    else
    {
    	echo "uploding faild";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="blank.css">
</head>
<body>
   <div class="container">
        <h1 class="heading" >USED CARS</h1>
         <div class="tag"> <a class="links" href="">Home</a>
            <a class="links" href="">My used car listing</a>
            <a class="links" href="">Sell your car</a>
            <a class="links" href="">Enquuiries</a> 
            <a class="links" href="">Edit profile</a>
            <a class="links" href="">VIew Full LIsting</a>
            <a class="links"href="">Logout</a> 
         </div>     
      <div class="body">
<?php

$host="localhost";
$user_name="root";
$password="";
$database="db";
$conn=mysqli_connect($host,$user_name,$password,$database);

// getting datas from table

$info = mysqli_query($conn,"select * from sell_your_car where user_id=$id");
while($row = mysqli_fetch_array($info))
{
$City= $row['city'];
$Year=$row['mgf_year'];
$Model=$row['model'];
}

// getting image

$records = mysqli_query($conn,"select * from image where user_id=$id"); // fetch data from database
while($data = mysqli_fetch_array($records))
{
?>
 
    
   <img src="<?php echo $data['filename']; ?>" width="100" height="100 " >
   <p><?php echo" City : ".$City ?></p>
   <p><?php echo "Year : ".$Year ?></p> 
   <p><?php echo "Model : ".$Model ?></p>
   
   

   
<?php

}
?>
   </div>
</div>

</body>
</html>