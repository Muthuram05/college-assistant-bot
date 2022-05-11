<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'db.php';
        $sql="SELECT replies from chatbot";
        $query=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_assoc($query)){
            ?>
            <embed type="application/pdf" src="pdf/<?php echo $info['replies'];?>" width="900" height="500">
            <?php 
        }

    ?>
</body>
</html>