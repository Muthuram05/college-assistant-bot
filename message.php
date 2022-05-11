<?php 
$conn=mysqli_connect('localhost','root','','bot') or die("connect error");
$getMsg=mysqli_real_escape_string($conn,$_POST['text']);
$check_data="SELECT replies FROM chatbot WHERE queries LIKE '%$getMsg%'";
$query=mysqli_query($conn,$check_data) or die("Error");
if(mysqli_num_rows($query )>0){

    $fetch_data =mysqli_fetch_assoc($query);
  
    $replay = $fetch_data['replies'];
    echo $replay;
}
else{
 echo "Sorry can't be able to understand you ";
}
?>