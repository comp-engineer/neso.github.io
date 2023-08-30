<?php
$con= mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}
else{
    echo "connection failed";
    }

mysqli_select_db($con,"applications");

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$age=$_POST['age'];
$gender= $_POST['gender'];
$date= $_POST['date'];
$service= $_POST['service'];
$time= $_POST['time'];

$query= "INSERT INTO applications(fname,lname,email,age,gender,date,service,time) values('$fname','$lname','$email','$age','$gender','$date','$service','$time')";


mysqli_select_db($con,$query);
header('location: index.php#apply');

?>