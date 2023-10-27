 
<?php include('header.php'); ?>
<?php
include "dbconnect.php";
 if (isset($_POST['submit'])) {
 $first_name = $_POST['firstname'];
 $last_name = $_POST['lastname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $gender = $_POST['gender'];
 $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, 
`gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";
 $result = $conn->query($sql);
 if ($result == TRUE) {
 echo "New record created successfully.";
 }else{
 echo "Error:". $sql . "<br>". $conn->error;
 }
 $conn->close();
 }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
    <div class="cont"> 
<div class="sinup"><h2>Signup Form</h2></div> 
<form action="" method="POST">
 <fieldset>
 <legend>Personal information:</legend>
 First name:<br>
 <input type="text" name="firstname">
 <br>
 Last name:<br>
 <input type="text" name="lastname">
 <br>
 Email:<br>
 <input type="email" name="email">
 <br>
 Password:<br>
 <input type="password" name="password">
 <br>
 Gender:<br>
 <input type="radio" name="gender" value="Male">Male
 <input type="radio" name="gender" value="Female">Female
 <br><br>
 <input type="submit" name="submit" value="submit">
 <button type="button"><a href = "display.php">go back to list</a></button>
 </fieldset>
</form>
</div>
</body>
</html>
<?php include('footer.php'); ?>