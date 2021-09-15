<!-- getting data from previous page using session -->
<?php 
session_start();
$id= $_SESSION['variable'];
var_dump($id);
?>
<!-- datas of client stored to variables -->
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
  $sql="SELECT * FROM registor WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
           $Name=$row['name'];
           $Email=$row['email'];
           $Password=$row['password'];
           $Phone_number=$row['phone_number'];
           $State=$row['state'];
           $City=$row['city'];
           $Address=$row['street_address'];
           $Postal_code=$row['postal_Code'];
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
    <link rel="stylesheet" href="registor.css">
    <script src="registor.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="heading" >USED   CARS</h1>
        <div class="my_form">
        <p class="text">Register Now?</p>
        <form action="blank.php" method="POST" name="myform1">
            <label class="text" for="">Name</label><span>&#42</span>
                <input class="one"  type="text" name="name" value="<?php echo($Name)?>" placeholder="Enter your name" required pattern="[A-Za-z]{1,32}" title="Invalid Name"> 
                  <br><br>
            <label class="text" for="">Phone number</label><span>&#42</span>
                <input id="phone" type="text" name="phone_number" value="<?php echo($Phone_number)?>" placeholder="Enter your Phone number"required pattern="[789][0-9]{9}">
                    <br><br>
            <label class="text" >State</label><span>&#42</span>
                <select name="state"  id="st"required>
                    <option value="Andhra Pradesh" <?php echo ($State== 'Andhra Pradesh') ? 'selected' : '' ?>>Andhra Pradesh</option>
                    <option value="Karnataka" <?php echo ($State == 'Karnataka') ? 'selected' : '' ?>>Karnataka</option>
                    <option value="Tamil Nadu" <?php echo ($State == 'Tamil Nadu') ? 'selected' : '' ?>>Tamil Nadu</option>
                    <option value="Telangana" <?php echo ($State == 'Telangana') ? 'selected' : '' ?>>Telangana</option>
                    <option value="Kerala" <?php echo ($State== 'Kerala') ? 'selected' : '' ?>>Kerala</option>
                    <option value="Puducherry" <?php echo ($State == 'Puducherry') ? 'selected' : '' ?>>Puducherryr</option>
               
                </select>
                    <br><br>
            <label class="text" for="">City</label><span>&#42</span>
               <select name="city" id="city" value="<?php echo($City)?>"required>
                <option value="	Alappuzha" <?php echo ($City == 'Alappuzha') ? 'selected' : '' ?>>Alappuzha</option>
                <option value="Ernakulam" <?php echo ($City == 'Ernakulam') ? 'selected' : '' ?>>Ernakulam</option>
                <option value="	Idukki" <?php echo ($City == 'Idukki') ? 'selected' : '' ?> >Idukki</option>
                <option value="	Kannur" <?php echo ($City== 'Kannure') ? 'selected' : '' ?>>Kannur</option>
                <option value="	Kasaragod" <?php echo ($City== 'Kasaragod') ? 'selected' : '' ?>>Kasaragod</option>
                <option value="Kottayam" <?php echo ($City == 'Kottayam') ? 'selected' : '' ?>>Kottayam</option>
                <option value="Kollam" <?php echo ($City == 'Kollam') ? 'selected' : '' ?>>>Kollam</option>
                <option value="	Kozhikode" <?php echo ($City== 'Kozhikode') ? 'selected' : '' ?>>Kozhikode</option>
                <option value="Palakkad" <?php echo($City=='Palakkad') ? 'selected' : '' ?>>Palakkad</option>
               
               </select>
                   <br><br>
            <label class="text" for="">Street/Address</label><span>&#42</span>
            <textarea name="address" id="text_area"  cols="20" rows="2"required><?php echo($Address)?></textarea>
            <br><br>
            <label  class="text"for="">Postal Code</label><span>&#42</span>
            <input id="post" type="text" name="postal_code" value="<?php echo($Postal_code)?>"required pattern="[0-9]{6}">
            <br><br>
            <h1>Your Login Information</h1>
            <!-- Hide and showih of password and email  -->
<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('password').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}
function emailcheck() {
    if (document.getElementById('email').checked) {
        document.getElementById('em').style.display = 'block';
    }
    else document.getElementById('em').style.display = 'none';

}

</script>
Password <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="password"><br> 
    <div id="ifYes" style="display:none">
        <input type='text' id='yes' name='password' value="<?php echo($Password)?>"><br>
    </div>
    Email  <input type="radio" onclick="javascript:emailcheck();" name="yesno" id="email"><br>   
    <div id="em" style="display:none">
        <input type='text' id='yes' name='email' value="<?php echo($Email)?>"><br>
    </div>        
            <button type="submit" onclick="send()">Submit</button>
        </form>
    </div>
    </div>
    
    </div>
</body>
</html>

