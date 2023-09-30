<?php
sleep(1);
include 'config.php';
$name= stripslashes($_POST['name']);    
$name = mysqli_real_escape_string($link, $name);

$email= stripslashes($_POST['email']);    
$email = mysqli_real_escape_string($link, $email);


$sql = "INSERT INTO u888028791_universe(name,email,phone) VALUES('".$name."','".$email."','".$_POST['phone']."')";
if ($link->query($sql) === TRUE)
{
echo '<script type="text/javascript">'; 
echo 'alert("Thank you for showing interest");'; 
echo '</script>';
}
else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
?>