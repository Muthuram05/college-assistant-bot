<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pdf.php" method="post" enctype="multipart/form-data">
        <input type="file" name="pdf" value="" required>
        <input type="submit" name="submit" value="upload">
        <?php
         include 'db.php';
         if(isset($_POST['submit'])){
             $pdf=$_FILES['pdf']['name'];
             $pdf_type=$_FILES['pdf']['type'];
             $pdf_size=$_FILES['pdf']['size'];
             $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
             $pdf_store="pdf/".$pdf;
             move_uploaded_file($pdf_tem_loc,$pdf_store);
             $sql="INSERT INTO chatbot(replies) value('$pdf')";
             $query=mysqli_query($conn,$sql);
         } 
        ?>
    </form>
</body>
</html>