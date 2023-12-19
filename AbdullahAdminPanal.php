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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .addmin-profile-imgcontainer {
            width: 300px;
            height: 300px;
        }

        .addmin-profile-imgcontainer img {
            width: 100%;
            height: 100%;

        }

        .profile-card-img-container {
            width: 150px;
            height: 120px;
            object-fit: cover;
        }

        .profile-card-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div>
        <div class="w-100 lg:w-[50vw] lg:h-[50vh] m-auto grid-cols-1  lg:grid grid-cols-2 justify-items-center content-center">
            <div class="addmin-profile-imgcontainer">
                <img src="https://i.ibb.co/zPYcrFL/avatar-icon-human-a-person-s-badge-social-media-profile-symbol-the-symbol-of-a-person-vector.jpg" alt="">
            </div>
            <div class="text-2xl m-auto font-bold font-mono">
                <h1>Name : abc</h1>
                <h1>Total Book: 1</h1>
                <h1>contibution: 10</h1>
                <h1>social: link</h1>
                <h1>Total Book: 10</h1>
            </div>
            <section class="flex justify-center w-[100%]">
                <div>
                    <form class="" action="./suggetionbox.php">
                        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" value="suggestion">

                    </form>
                </div>
                <div>
                    <form class="" action="./complain.php">
                        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" value="complain">
                    </form>
                </div>
                <div>
                    <form class="" action="contactadmin.php">
                        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" value="contact">
                    </form>
                </div>

            </section>
        </div>
        <div class="flex justify-center">

            <?php
            if (isset($_GET['bookname'])) {
                $bookname = $_GET['bookname'];
                $price = $_GET['price'];
                $totalsell = $_GET['totalsell'];
                $purl = $_GET['purl'];
                $author = $_GET['author'];
                // echo "$purl -  $bookname -  $price-   $totalsell";
                $sql = "INSERT INTO `book`(`Name`, `price`, `author`, `totalsell`, `photourl`, `demo`)
                 VALUES ('$bookname','$price','$author','$totalsell','$purl','-')";
                $result = mysqli_query($con, $sql);
         
                if ($result) {
                    echo '
                    <div class="bg-indigo-700 text-center py-4 lg:px-4 absolute top-0 ">
          <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
            <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
            <span class="font-semibold mr-2 text-left flex-auto">New Data is inserted</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
          </div>
        </div>';
                } else {
                    echo '

                    <div class="bg-red-900 text-center py-4 lg:px-4 absolute top-0 ">
          <div class="p-2 bg-red-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
            <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
            <span class="font-semibold mr-2 text-left flex-auto">New Data is not inserted</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
          </div>
          
        </div>';
                }
            } else {

                echo  '';
            }




            ?>
            <form method="GET" class="w-[50vw] ">

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Book Name
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="" placeholder="" name="bookname">

                    </div>
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Author
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="" placeholder="" name="author">

                    </div>
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            price
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="" placeholder="" name="price">

                    </div>
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            total sell
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="" placeholder="" name="  totalsell">

                    </div>
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Photo URL
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="" placeholder="" name="purl">

                    </div>
                </div>
                <div class="text-end">
                    <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                </div>
            </form>
        </div>







        <div class="">
            <!-- <div class="m-auto">
            <div class="w-[50vw] h-[15vh] m-auto border  flex my-5 ">
                <div class="profile-card-img-container">
                    <img src="https://i.ibb.co/zPYcrFL/avatar-icon-human-a-person-s-badge-social-media-profile-symbol-the-symbol-of-a-person-vector.jpg" alt="">
                </div>
                <div class="adminprofile-content pl-10 pt-6 text-xl font-mono font-bold">
                    <h1>name : </h1>
                    <h1>price</h1>
                    <h1>total sell</h1>
                </div>
                <div class="ml-auto flex items-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">delete</button>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">update</button>
                </div>
            </div>

        </div> -->
            <?php
            // $con = new mysqli('localhost', 'root', '', 'bookstore309');
            $sql = "SELECT `bookid`,`Name`, `price`, `author`, `totalsell`, `photourl`, `demo` FROM `book`";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $price = $row['price'];
                    $Name = $row['Name'];
                    $author = $row['author'];
                    $totalsell = $row['totalsell'];
                    $photourl = $row['photourl'];
                    $bookid    = $row['bookid'];
                    // echo "$price - $Name- $author -   $totalsell -  $photourl </br>";
                    echo '
                
                <div class="m-auto">
                <div class="w-100 lg:w-[50vw] h-[15vh] m-auto border  flex my-5 ">
                    <div class="profile-card-img-container">
                        <img src=' . $photourl . ' alt="">
                    </div>
                    <div class="adminprofile-content pl-10 pt-6 text-xl font-mono font-bold">
                        <h1>name : ' . $Name . ' </h1>
                        <h1>price : ' . $price . ' </h1>
                        <h1>total sell : ' . $totalsell . '</h1>
                    </div>
                    <div class="ml-auto flex items-center">
                      
                    </div>
                    <div class="flex items-center">
             
                    <form action="./cardupdate.php">
                    <input type="hidden" name="inputdata" value=' . $bookid . '>
                    <input type="submit" value="update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    </form>


                    <form action="./deletecard.php">
                    <input type="hidden" name="inputdata" value=' . $bookid . '>
                    <input type="submit" value="Delete" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    </form>
                    
                    
                    
                 
                    
                </div>
                </div>
    
            </div>
            </
                
                ';
                }
            } else {
                echo "not done";
            }
            ?>
        </div>
    </div>
</body>
<!-- <script src="./AbdullahAdminPanal.js"></script> -->

<!-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">delete</button>
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">update</button> -->


</html>