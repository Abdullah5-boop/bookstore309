<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
     
        .store {
            /* border: 2px solid; */
        }

        .card {
            width: 310px;
            height: 395px;

            border-radius: 20px;
            object-fit: cover;
        }

        .card-img-container {
            width: 100%;
            height: 60%;

            object-fit: cover;
        }

        .card-img-container img {
            width: 100%;
            height: 100%;
            border-radius: 20px;
            object-fit: cover;
        }

        .btn-holder {
            border-radius: 30px;
        }

        .banner {
            display: flex;
            justify-content: center;
            align-items: center;
            object-fit: cover;
            width: 100%;
            height: 65vh;
            
            font-size: clamp(50px, 10vw, 110px);
            color: whitesmoke;
            background: linear-gradient(225deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 0.7679446778711485) 32%, rgba(9, 9, 120, 0.7091211484593838) 48%, rgba(118, 7, 201, 0.21612394957983194) 100%), url('https://source.unsplash.com/woman-finding-some-book-to-read-mbKApJz6RSU');
            background-size: cover;
        }
        nav{
            overflow: auto;
        }
    </style>
</head>

<body>
    <section class=" font-mono">
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
        <div>

            <nav class="flex p-0 lg:pl-24  lg:pr-10  text-2xl bg-black text-white h-[80px] border py-5   ">

                <div>Logo</div>
                <div class="flex justify-between ml-auto w-[30%]">

           
                    <div><a href="./asif.php">contact</a></div>
                    <div><a href="./Trina.php">suggestion</a></div>
                    <div><a href="./ABdullahLoginpage.php">login</a></div>

                    <?php
                    session_start();
                    if ($_SESSION['user'] == 'admin') {
                        echo '<div>  <a href="./AbdullahAdminPanal.php">admin</a></div>';
                    } else {

                        echo '
                        <div ><a href="./userprofile.php">profile</a></div>
                        ';
                    }

                    ?>
                </div>

            </nav>
        </div>
        <div class="w-[100%] h-[80vh] bg-blue-700  banner">
            <div class="">
                <h1 class="text-15xl font-mono">Hello this is for banner</h1>
                <h1>welcome to our shop</h1>
            </div>
        </div>

        <div class="mb-10">
            <h1 class="pl-24 text-3xl font-bold text-center my-14 underline">Book store</h1>
            <div class="w-[70vw] h-[100vh] m-auto  store   ">
                <div class=" grid grid-cols-1 lg:grid-cols-3 gap-3  ">
                    <!-- <div class="border card flex flex-col pb-5    ">
                        <div class="card-img-container">
                            <img src="https://source.unsplash.com/pile-of-assorted-title-books-xY55bL5mZAM" alt="">
                        </div>
                        <div class="card-content px-2 py-3 ">
                            <h1 class="font-bold text-xl">IUB</h1>
                            <h1 class="small text-gray-400">Author Name</h1>
                            <div class="flex justify-around  py-5 text-xl text-center 
                            w-[100%]
                            border-t-2 border-b-2 ">
                                <div class="border-r-1">
                                    <h1>total sell </h1>
                                    <h1>10</h1>
                                </div>
                                <div>
                                    <h1>total sell </h1>
                                    <h1>10</h1>
                                </div>


                            </div>

                        </div>

                        <div class="p-2 bg-blue-300 text-center font-bold btn-holder">
                            <button>add card</button>

                        </div>

                    </div> -->

                    <!-- <div class="border card flex flex-col pb-5    ">
                        <div class="card-img-container">
                            <img src="https://source.unsplash.com/pile-of-assorted-title-books-xY55bL5mZAM" alt="">
                        </div>
                        <div class="card-content px-2 py-3 ">
                            <h1 class="font-bold text-xl">IUB</h1>
                            <h1 class="small text-gray-400">Author Name</h1>
                            <div class="flex justify-around  py-5 text-xl text-center w-[100%] border-t-2 border-b-2 ">
                                <div class="border-r-1">
                                    <h1>total sell </h1>
                                    <h1>10</h1>

                                </div>
                                <div>
                                    <h1>total sell </h1>
                                    <h1>10</h1>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 bg-blue-300 text-center font-bold btn-holder">
                            <button type="submit" onclick="fetchMyData()"> click </button>
                        </div>
                    </div> -->


                    <?php
                    function cart($value)
                    {
                        echo " <h2 class='text-6xl'> you clicked = $value</h2> ";
                    }

                    $sql = "SELECT * FROM book";
                    $result = mysqli_query($con, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['Name'];
                            $price = $row['price'];
                            $author = $row['author'];
                            $totalsell = $row['totalsell'];
                            $url = $row['photourl'];
                            $bookid = $row['bookid'];
                            // echo "$name----   $price----- $author-------- $totalsell </br>";

                            echo '
                            <form method="GET" action="BookProfile.php">
                            <div class="border card flex flex-col pb-5   mt-10 ">
                            <div class="card-img-container">
                                <img src=' . $url . ' alt="">
                            </div>
                            <div class="card-content px-2 py-3 ">
                                <h1 class="font-bold text-xl">' . $name . '</h1>
                                <h1 class="small text-gray-400">' . $author . '</h1>
                                <div class="flex justify-around  py-5 text-xl text-center w-[100%] border-t-2 border-b-2 ">
                                    <div class="border-r-1">
                                        <h1>total sell </h1>
                                        <h1>' . $totalsell . '</h1>
    
                                    </div>
                                    <div>
                                        <h1>price</h1>
                                        <h1>' . $price . '</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 bg-blue-300 text-center font-bold btn-holder">
                            <input type="submit" name="1">
                            
                            </div>
                        </div>
                        <input type="hidden" name="inputdata" value=' . $bookid . '> <br>
                        </form>
                            
                            ';
                        }
                    } else {
                        cart('none');
                    }
                    echo '
                 
                    
                    '
                    ?>
                </div>
            </div>
        </div>
        <div class=" h-[15vh]">

        </div>
        <div >
            <?php

    
            include './Footer.php'
            ?>
        </div>
    </section>


</body>

</html>