
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
         <div class="tag"> <a class="links" href="Home.php">Home</a>
            <a class="links" href="">My used car listing</a>
            <a class="links" href="sell your car.php" method="POST">Sell your car</a>
            <a class="links" href="">Enquuiries</a> 
            <a class="links" href="edit.php" name="edit_link" method="POST">Edit profile</a>
            <a class="links" href="">VIew Full LIsting</a>
            <a class="links"href="">Logout</a> 
           
    </div>
    <div>
    <?php
 
  $host="localhost";
  $user_name="root";
  $password="";
  $database="db";
  $Email=$_POST['email'];
  $Password=$_POST['password'];
  $conn=mysqli_connect($host,$user_name,$password,$database);
  if(!$conn){
      echo "not connected";
  }else{
      echo"connected sucessfully.<br>";
  } 
  $sql="SELECT * FROM registor WHERE email='$Email'AND password='$Password'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
          echo"<h2>welcome  {$row['name']},</h2>";
          $id=$row['id'];
          
          
      }
  }else{
      echo" you must registor first";
  }

?>


    </div>
    <div>
        <h1 class="head">sell or buy used cars</h1>
    </div>
</body>
</html>

<?php 
  session_start();
  $_SESSION['variable'] = $id;
  var_dump($_SESSION);
  ?>
<!-- updating detiles -->
<?Php
$up_Name=$_POST['name'];
$up_Email=$_POST['email'];
$up_Password=$_POST['password'];
$up_Phone_number=$_POST['phone_number'];
$up_State=$_POST['state'];
$up_City=$_POST['city'];
$up_Address=$_POST['address'];
$up_Postal_code=$_POST['postal_code']; 
// .......... 

$update="UPDATE registor SET name='$up_Name',
email='$up_Email',
password='$up_Password',
phone_number='$up_Phone_number',
state='$up_State',
city='$up_City',
street_address='$up_Address',
postal_Code='$up_Postal_code'
 WHERE id='$id' ";

if(mysqli_query($conn,$update)){
    echo"updated";
}else{
    echo"update failed".mysqli_error($conn);
}

?>






