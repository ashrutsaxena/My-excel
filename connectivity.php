<?php
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect("localhost","root","","ayud") or die(mysqli_error($con));
if(!$con){
    echo "server not connected";
}
$first=$_POST['first'];
$second=$_POST['second'];
$address=$_POST['address'];
$no=$_POST['no'];
$gender=$_POST['gender'];
$sql="insert into signup(firstname,secondname,address,cno,gender) values('$first','$second','$address','$no','$gender')";
$user=mysqli_query($con,$sql) or die(mysqli_error($user));
if(!$user){
    echo "not inserted";
}
?>