<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    session_start();

    // $_SESSION['clickindex'] =  $new;
    ?>
    <div>
        <?php
        $con = new mysqli('localhost', 'root', '', 'bookstore309');



        $new = $_GET['inputdata'];
        echo "<div class='text-center text-2xl text-bold'> the bookid is   = $new  </div>";



        if (isset($_GET['bookname'])) {

            $bookname = $_GET['bookname'];
            $bookid = $_GET['bookid'];
            $price = $_GET['price'];
            $totalsell = $_GET['totalsell'];
            $purl = $_GET['purl'];
            $author = $_GET['author'];


            echo " $bookname -> $price -> $totalsell ->  $bookid";
            $sql = "  UPDATE `book` SET `Name`='$bookname',`price`=' $price',`author`=' $author',`totalsell`='   $totalsell',`photourl`='$purl' WHERE bookid = $bookid ";

            $result = mysqli_query($con, $sql);
            header("Location: AbdullahAdminPanal.php");

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
            echo " ";
        }
        ?>

        </br>

        <div class='w-[97vw] h-[100vh]  '>
            <h1 class='text-3xl text-center '>Update book </h1>

            <form method='GET' class='w-[50vw] m-auto '>

                <div class='flex flex-wrap -mx-3 mb-6'>

                    <div class='w-full px-3'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-password'>
                            Book id
                        </label>
                        <input require class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='' type='' placeholder='' name='bookid'>

                    </div>
                    <div class='w-full px-3'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-password'>
                            Book Name
                        </label>
                        <input require class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='' type='' placeholder='' name='bookname'>

                    </div>
                    <div class='w-full px-3'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-password'>
                            Author
                        </label>
                        <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id=' type=' placeholder='' name='author'>

                    </div>
                    <div class='w-full px-3'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-password'>
                            price
                        </label>
                        <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='' type='' placeholder='' name='price'>

                    </div>
                    <div class='w-full px-3'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-password'>
                            total sell
                        </label>
                        <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='' type='' placeholder='' name='  totalsell'>

                    </div>
                    <div class='w-full px-3'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-password'>
                            Photo URL
                        </label>
                        <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='' type='' placeholder='' name='purl'>

                    </div>
                </div>
                <div class='text-end'>
                    <input class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' type='submit'>
                </div>
            </form>
        </div>



    </div>

</body>

</html>