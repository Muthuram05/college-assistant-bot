<?php 

$host="localhost";
$dbusername="root";
$dbpassward="";
$dbname="bot";
$con=new mysqli($host,$dbusername,$dbpassward,$dbname);

$email=$_POST['email'];
$passward=$_POST['password'];


$s = "select * from registertable where email = '$email' && passward='$passward' ";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
    $_SESSION["email"] =$email ;
    header('location:index.php');
}
else{
header('location:login.html');

}

?>