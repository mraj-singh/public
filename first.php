<?php
include("connection.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goverment of India</title>
</head>
<link rel="stylesheet" href="gov.css">
<body>
    <h2>Welcome to the <i>Modi Goverment</i> official page</h2>
    <P>hello evereryone!!<br> On the completion of 6 years of Modi Goverment, we are taking feedback and your suggestion about our Goverment.<br> Kindly Give your Review & Ratings to our Cabinet Ministers & Prime Minister. </P>
    <h4>Please submit your details:</h4>
    <form>
        <p>Name:    </p><input type="text" placeholder="your Name!!" name="name" required><br>
        <p>Phone No:    </p><input type="number" placeholder="Phone Number" name="phoneno" required><br>
        <p>Email:   </p><input type="email" placeholder=".......@email.com" name="email" required><br>
        <p>Password:</p><input type="password" placeholder="password" name="password" required><br><br>
        <input type="submit" class="submit" name="submit" >

    </form>
    <p class="jump">After Submiting this you wil<br>jump to Review page.  </p>
</body>
</html>

<?php
    $name= $_GET['name'];
    $phn= $_GET['phoneno'];
    $email= $_GET['email'];
    $pwd= $_GET['password'];
    
   $query = "INSERT into data values('$name','$phn','$email','$pwd')";
   $data = mysqli_query($conn, $query);

   if($data)
   {
       echo "data inserted";
   }
   else{
       echo "data not inserted";
   }

?>