<?php 

    $conn=mysqli_connect('localhost','root','','bot');
        $name=$_POST['name'];
        $uname=$_POST['uname'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="INSERT INTO registertable(name,username,dob,email,passward) VALUES('$name',' $uname',' $dob','$email','$password')";
        $res=mysqli_query($conn,$sql);
        if($res){
            echo 'send';  
        }
        else{
            echo "not";
        }

?>