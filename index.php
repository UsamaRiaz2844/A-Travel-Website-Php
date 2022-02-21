<?php

$insert = false; 
if(isset($_POST['name'])){


$_SERVER = "localhost"; 
$user_name = "root"; 
$password = ""; 
$dbname = "travel";
$con = mysqli_connect($_SERVER , $user_name , $password, $dbname); 



if(!$con){
    // echo "Connection failed"; 
    die("connection failed" . mysqli_connect_error()) ; 
}

// echo "connection secured"; 




// Posting Vales in the database 

$name = $_POST['name'];
$age =  $_POST['age'];
$gender =  $_POST['gender'];
$email =  $_POST['email'];
$phone =  $_POST['phone'];
$other =  $_POST['other'];

$sql = " INSERT INTO travel (name, age, gender, phone, email, other, date) VALUES ( '$name', '$age', '$gender', '$phone', '$email', '$other ', current_timestamp());"; 


// echo $sql ; 

if ($con->query($sql) === TRUE) {
// echo "successfully connected"

//Using flag for showing error
$insert = true; 
}else{
    echo "ERROR:  $sql  <br> $con->error"; 
};
$con -> close(); 
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Php From </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200&family=Poppins:ital,wght@0,300;0,400;1,300;1,400&display=swap"
        rel="stylesheet">


</head>

<body>
    <img src="1.jpg" alt="gcuni">

    <div class="container">

        <h1>Welcome To GC China Travel Trip</h1>
        <p>Welcome To Our Website. Kindly fill this form to enroll you for the chine trip organized by GC univresty
            Faisalabad</p>

  <?php
  if ($insert == true) {
      
           echo   " <p class='alert'>***Thanks For Submitting Your Form. We'll Update You Soon</p>" ; 
    
  }


        ?>
        <form action="index.php" method="post">
            <label for="name">Full Name </label>
            <input type="text" name="name" id="name" placeholder="Full Name">

            <label for="name">Age </label>
            <input type="number" name="age" id="age" placeholder="Age">

            <label for="name">Gender </label>
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">

            <label for="name">Phone Number </label>
            <input type="tel" name="phone" id="phone" placeholder="Enter Phone Number">

            <label for="name">Email </label>
            <input type="email" name="email" id="email" placeholder="Enter Your Email Here">

            <label for="name">Other Information
            </label>
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Type Other Information Here"></textarea>


            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>


