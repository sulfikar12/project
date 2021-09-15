<?php 
session_start();
$id= $_SESSION['variable'];
var_dump($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="upload image.css">
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
        <a class="links"href="">Logout</a> </div>
    <div class="frm">
    <form action="my_used_car.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" Required>               
                    <h2>listing details</h2>
                    <label>Fuel type</label>
                    <select>
                        <option>Petrol</option>
                        <option>Diesel</option>
                        <option>Electric</option>
                    </select>
                    <br>
                    <label>Colour</label>
                    <select>
                        <option>Red</option>
                        <option>Yellow</option>
                        <option>Blue</option>
                        <option>Black</option>
                        <option>White</option>
                        <option>Grey</option>
                        <option>Silver</option>
                        <option>Purple</option>
                    </select><br>
                    <label>Registration No</label>
                    <input type="text">
                    <br>
                    <label>Insurance valid till</label>
                    <input type="text">
                    <br>
                    <label>Tell the buyer why he should buy<br>your car</label>
                    <input class="des" type="text">
                    <br>
                    <input type="submit" name="submit" value="Upload">
                </form>
             </div>
            </div>

</body>
</html>
<?php
$host="localhost";
$user_name="root";
$password="";
$database="db";
$conn=mysqli_connect($host,$user_name,$password,$database);

//Datas
if($_SERVER['REQUEST_METHOD']==='POST'){
// var_dump($_POST);
$City=$_POST['city'];
$Pin=$_POST['pin_code'];
$Mgf_year=$_POST['mgf_year'];
$Make=$_POST['make'];
$Model=$_POST['model'];
$Kms=$_POST['kms'];
$Expeted_price=$_POST['expeted_price'];
$Name=$_POST['name'];
$Model_number=$_POST['model_number'];
$Email=$_POST['email'];
//inserting
 $sql='INSERT INTO sell_your_car(user_id,city,pin_code,mgf_year,make,model,kms,expeted_price,name,model_number,email)
 VALUES("'.$id.'","'.$City.'","'.$Pin.'","'.$Mgf_year.'","'.$Make.'","'.$Model.'","'.$Kms.'","'.$Expeted_price.'","'.$Name.'","'.$Model_number.'","'.$Email.'")';
 if(mysqli_query($conn,$sql)){
     echo"connected";

 }else{
     echo"error".mysqli_error($conn);
 }
}

   ?>  
 

<!-- ..... -->
