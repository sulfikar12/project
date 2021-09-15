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
    <link rel="stylesheet" href="sell your car.css">
</head>
<body>
    <div class="container">
    <h1 class="heading" >USED   CARS</h1>
    <div class="tag">
        <a class="links" href="">Home</a>
        <a class="links" href="">My used car listing</a>
        <a class="links" href="">Sell your car</a>
        <a class="links" href="">Enquuiries</a>
        <a class="links" href="">Edit profile</a>
        <a class="links" href="">VIew Full LIsting</a>
        <a class="links"href="">Logout</a>
    <div>
        
        <h3 class="second-hed">Just fill your information and get started</h3>
    <div class="fist-inp">
    <form action="upload image.php" method="POST">
        <label class="label" for="">City</label><span>&#42</span>
           <input class="c-inp"type="text" name="city" required>
            <br><br>
        <label class="label" for="">Pincode</label><span>&#42</span>
           <input id="pin-inp"type="text"name="pin_code" required pattern="[0-9]{6}">
    
    <h3  >CAR INFORMATION</h3>
    
        <label class="label" for="">MGF Year</label><span>&#42</span>
           <input id="mgf-inp"type="text"name="mgf_year" required pattern="[0-9]{4}">
           <br><br>
        <label class="label" for="make">Make</label><span>&#42</span>
            <select id="make" name="make" required>
                <option value="suzuki">suzuki</option>
                <option value="Toyota">Toyotai</option>
                <option value="Ford Motor">Ford Motor</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Ford Motor">Ford Motor</option>
             
            </select>
        <br><br>
        <label class="label" for="">Model</label><span>&#42</span>
        <input id="mod-inp"type="text" name="model"required>
        <br><br>
        <label class="label" for="">KMs Driven</label>
        <input id="km-inp"type="text" name="kms">
        <br><br>
        <label class="label" for="">Expeted Price</label>
        <input id="exp-inp"type="text"name="expeted_price">
        
    
    <h3  >CONTACT INFORMATION</h3>
    
    
        <label class="label" for="">Name</label><span>&#42</span>
            <input id="name-inp"type="text"name="name" required>
               <br><br>
        <label class="label" for="">Model number</label><span>&#42</span>
            <input id="model-inp"type="text" name="model_number" required>
               <br><br>
        <label class="label" for="">Email ID</label>
            <input id="em-inp"type="email" name="email">
               <br><br>
            <input type="checkbox" required><span>I agree with the terms and conditions</span>
              <br><br>
            <input type="submit" value="POST LISTING">
    </form>
    </div>
   
</body>
</html>
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
$sql_table= "CREATE TABLE sell_your_car(id INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user_id VARCHAR(50) NOT NULL,
city VARCHAR(40) NOT NULL,
pin_code VARCHAR(30) NOT NULL,
mgf_year VARCHAR(30) NOT NULL,
make VARCHAR(30) NOT NULL,
model VARCHAR(30) NOT NULL,
kms VARCHAR(30) NOT NULL,
expeted_price VARCHAR(50) NOT NULL,
name VARCHAR(30) NOT NULL,
model_number VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL)";
if(mysqli_query($conn,$sql_table)){
    echo "done";
}else{
    echo"failed.<br>".mysqli_error($conn);
}

?>
