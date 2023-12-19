<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div>
        <h1>hello world </h1>
        <?php 
        
        //   header("Location: AbdullahAdminPanal.php");
          $newid= $_GET['inputdata'];
          echo"new id is  =  $newid";
          $con = new mysqli('localhost', 'root', '', 'bookstore309');
           $sql = "DELETE FROM `book` WHERE bookid=$newid ";
           $result = mysqli_query($con, $sql);
           header("Location: AbdullahAdminPanal.php");
          
        ?>
    </div>
</body>
</html>