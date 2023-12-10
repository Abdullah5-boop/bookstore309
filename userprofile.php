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
        if (!$con) {
            echo '
    <div role="alert">
  <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
  db is not  connected
  </div>
  <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
    <p>Something not ideal might be happening.</p>
  </div>
</div>
    
    
    ';
        }
        ?>
        <div class="w-[50vw] h-[90vh] m-auto  grid grid-cols-2 justify-items-center content-center ">
            <div class="addmin-profile-imgcontainer">
                <img src="https://i.ibb.co/zPYcrFL/avatar-icon-human-a-person-s-badge-social-media-profile-symbol-the-symbol-of-a-person-vector.jpg" alt="">
            </div>
            <div class="text-2xl m-auto font-bold font-mono">
                <?php

                echo "hello world";

                $sql = "SELECT * FROM person WHERE name ='def'  ";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    $newresult = mysqli_fetch_assoc($result);
                    $name = $newresult['name'];
                
                    $totalbuy = $newresult['totalbuy'];
                    $personemail = $newresult['personemail'];

                    echo " 
                    <h1>Name : $name</h1>
                    <h1>Total Book:$totalbuy</h1>
                    <h1>social: link</h1>
                    <h1>email: $personemail</h1>
                    
                    ";
                } else {

                    echo "   <h1>tmi paroni</h1>";
                }

                ?>
                <!-- <h1>Name : abc</h1>
                <h1>Total Book: 10</h1>
                <h1>contibution: 10</h1>
                <h1>social: link</h1>
                <h1>Total Book: 10</h1> -->
            </div>
        </div>




    </div>
</body>

</html>