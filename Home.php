<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Home.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="home.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="heading" >USED   CARS</h1>
        <div>
        <form action="blank.php" method="POST">
            <label for="">Email ID</label>
            <input type="text " name="email" placeholder="Enter your email ">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password ">
            <input type="submit"  name="login" value="Login">
            <input type="button"  value="Register Now">
        </form>
        </div>
        <div  class="second_form">
        <p class="search">Search?</p>
        <form  class="fom" action="">
            <label for="">Model</label>
             <select class="drop_down" name="" id="">
                 <option value="suzuki">suzuki</option>
                 <option value="Toyota">Toyotai</option>
                 <option value="Ford Motor">Ford Motor</option>
                 <option value="Volkswagen">Volkswagen</option>
                 <option value="Ford Motor">Ford Motor</option>
             </select>
             <br><br>
             <label for="">Year</label>
             <input class="year" type="text">
             <br><br>
             <button class="bt">GO</button>
             <br><br>
             <label for="">City</label>
             <input class="year" type="text">
             <br><br>
             <input class="bt" type="submit" value="search">
        </form>
        </div>
    </div>
    
</body>
</html>
<?php
//Datas
 if($_SERVER['REQUEST_METHOD']==='POST'){
$Name=$_POST['name'];
$Email=$_POST['email'];
$Confirm_email=$_POST['confirm_email'];
$Password=$_POST['password'];
$Confirm_password=$_POST['confirm_password'];
$Phone_number=$_POST['phone_number'];
$State=$_POST['state'];
$City=$_POST['city'];
$Address=$_POST['address'];
$Postal_code=$_POST['postal_code'];
//inserting
$host="localhost";
 $user_name="root";
 $password="";
 $database="db";
 $conn=mysqli_connect($host,$user_name,$password,$database);
 $sql='INSERT INTO registor(name,email,confirm_email,password,confirm_Password,phone_number,state,city,street_address,postal_Code)
 VALUES("'.$Name.'","'.$Email.'","'.$Confirm_email.'","'.$Password.'","'.$Confirm_password.'","'.$Phone_number.'","'.$State.'","'.$City.'","'.$Address.'","'.$Postal_code.'")';
 if(mysqli_query($conn,$sql)){
     echo"connected";
 }else{
     echo"error".mysqli_error();
 }
 }
     
?>

