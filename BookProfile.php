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
        <?php

        $con = new mysqli('localhost', 'root', '', 'bookstore309');

        $value=$_GET['inputdata'];
       
        $sql = "SELECT * FROM book WHERE bookid= '$value' ";
        $result= mysqli_query($con,$sql);
        $newresult=mysqli_fetch_assoc($result);
        if($newresult){
         
            $price=$newresult['price'];
            $Name=$newresult['Name'];
            $author=$newresult['author'];
            $totalsell=$newresult['totalsell'];
            $photourl=$newresult['photourl'];
            echo'
            
            <div class="w-[50vw] h-[90vh] m-auto  grid grid-cols-2 justify-items-center content-center ">
            <div class="addmin-profile-imgcontainer">
                <img src='. $photourl.' alt="">
            </div>
            <div class="text-2xl m-auto font-bold font-mono">
                <h1>Name : '.$Name.'</h1>
                <h1>price: '.$price.'</h1>
                <h1>Totalsell:  '.$totalsell.'</h1>
                <h1>social: link</h1>
                <h1>Store: 10</h1>
            </div>
        </div>
            ';
        }

        ?>
    

<?php
include './anindita.php';

?>


    </div>
</body>

</html>