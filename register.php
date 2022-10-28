<?php
        $name=$_POST['name'];
        $uname=$_POST['uname'];
        $date = $_POST['dob'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];

if(!empty($name)||!empty($uname)||!empty($date)||!empty($email)||!empty($phone)||!empty($password)){
    $host="localhost";
    $dbusername="root";
    $dbpassward="";
    $dbname="bot";
    $con=new mysqli($host,$dbusername,$dbpassward,$dbname);
    if(mysqli_connect_errno()){
        die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT="SELECT Email From registertable Where Email=? Limit 1 ";
        $INSERT="INSERT Into registertable (uname,name,date,email,phone,password) values(?,?,?,?,?,?)";

        //Prepare statement
     $stmt = $con->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("ssssss",$uname,$name,$date,$email,$phone,$password);
      $stmt->execute();
      echo 'Register succesfully;';
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $con->close();
    }
}else { 
 echo "All field are required";
 die();
}
    




?>