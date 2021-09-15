<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registor.css">
    <script src="registor.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="heading" >USED   CARS</h1>
        <div class="my_form">
        <p class="text">Register Now?</p>
        <form action="Home.php" method="POST" name="myform">
            <label class="text" for="">Name</label><span>&#42</span>
                <input class="one" type="text" name="name" placeholder="Enter your name" required pattern="[A-Za-z]{1,32}" title="Invalid Name"> 
                  <br><br>
            <label   class="text" for="">Email</label><span>&#42</span>
            <input class="one" type="email"  name="email" id="email" placeholder="Enter your email"required >
                   <br><br>
            <label class="text" for="">Confirm Email</label><span>&#42</span>
             <input class="conf_e" type="email"  name="confirm_email" id="confirm_email" placeholder="Re enter your Email" required  >  
            <br><br>
            <label  class="text" for="">Password</label><span>&#42</span>
                 <input class="pass" id="password" type="password" name="password" placeholder="Enter your Password"required>
                    <br><br>
            <label  class="text" for="">Confirm Password</label><span>&#42</span>
                <input class="congi_p" id="confirm_password" type="password" name="confirm_password" placeholder="Re enter your Password"required>
                    <br><br>
            <label class="text" for="">Phone number</label><span>&#42</span>
                <input id="phone" type="text" name="phone_number" placeholder="Enter your Phone number"required pattern="[789][0-9]{9}">
                    <br><br>
            <label class="text" >State</label><span>&#42</span>
                <select name="state" id="st"required>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Tamil Naduh">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Puducherry">Puducherryr</option>
               
                </select>
                    <br><br>
            <label class="text" for="">City</label><span>&#42</span>
               <select name="city" id="city"required>
                <option value="	Alappuzha">	Alappuzha</option>
                <option value="Ernakulam">Ernakulam</option>
                <option value="	Idukki">Idukki</option>
                <option value="	Kannur">Kannur</option>
                <option value="	Kasaragod">	Kasaragod</option>
                <option value="Kottayam">Kottayam</option>
                <option value="Kollam">Kollam</option>
                <option value="	Kozhikode">Kozhikode</option>
                <option value="Palakkad">Palakkad</option>
               
               </select>
                   <br><br>
            <label class="text" for="">Street/Address</label><span>&#42</span>
            <textarea name="address" id="text_area" cols="20" rows="2"required></textarea>
            <br><br>
            <label  class="text"for="">Postal Code</label><span>&#42</span>
            <input id="post" type="text" name="postal_code"required pattern="[0-9]{6}">
            <br><br>
            
            <button type="submit" onclick="send()">Submit</button>
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
 if(!$conn){
     echo "not connected";
 }else{
     echo"connected sucessfully.<br>";
 }
 $sql_table= "CREATE TABLE Registor(id INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(30) NOT NULL,
 email VARCHAR(30) NOT NULL,
 confirm_email VARCHAR(30) NOT NULL,
 password VARCHAR(30) NOT NULL,
 confirm_Password VARCHAR(30) NOT NULL,
 phone_number VARCHAR(20) NOT NULL,
 state VARCHAR(30) NOT NULL,
 city VARCHAR(30) NOT NULL,
 street_address VARCHAR(50) NOT NULL,
 postal_Code INT(6) NOT NULL)";
 if(mysqli_query($conn,$sql_table)){
     echo "done";
 }else{
     echo"failed.<br>".mysqli_error($conn);
 }
?>
