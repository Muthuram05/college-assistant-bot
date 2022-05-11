<?php
$conn=mysqli_connect('localhost','root','','bot') or die("connect error");
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $passward=$_POST['passward'];
    $course=$_POST['course'];
    $number=$_POST['mobilenumber'];
    $query="INSERT into details(email,coursename,date,) VALUES('$name','$passward','$course','$number')";
    $res=mysqli_query($conn,$query);
    
    if($res){
        echo "<h2>YOUR DATA SAVED SUCESSFULLY</h2><br><div><button class='button' onclick=location.href='index.html'>go back</a></div>";
    }
    else{
        echo "not";
    }
} 
?>