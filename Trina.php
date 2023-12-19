<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-sclae=">
    <title>About us</title>
    <link rel="stylesheet" href="./trina.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body c>
    <div class="w-[100vw] bg-gray-300">
        <div class="about-us font-mono p-0 ">
            <h1 class="text-4xl font-bold ">About Us</h1>
            <p>Welcome to our page! Here's a little bit about us...</p>
        </div>


        <div class="timeline">
            <div class="container left-container w-[100%] lg:w-[60%]">
                <div class="text-box ">
                    <h2 class="text-4xl font-mono font-bold my-5">Welcome to our bookshop</h2>
                    <p class="text-xl">Bookshop.org is an online bookshop with a mission to financially support local, independent bookshops.
                        <br> We believe that bookshops are essential to a healthy culture. They are where authors can connect with readers, where we discover new writers, where children get hooked on the thrill of reading that can last a lifetime. They are also anchors for our high streets and communities -- owned, staffed, run and full of real people who have a genuine love of books and reading.
                        <span class="left-container-arrow"></span>


                </div>
            </div>


            <div class="container right-container w-[100%] lg:w-[60%] ">
                <div class="text-box">

                    <h2 class="text-4xl font-mono font-bold my-5">Our Philosophy</h2>
                    <p class="text-xl">Some people like to read on a screen. Other people need the variety and artistry, the sight, smell, and feel of actual books.They love seeing them on their shelves; they love having shelves for them.

                        <br> They love taking them along when they leave the house, and stacking them by their bedsides. They love finding old letters and bookmarks in them. They like remembering where they bought them or who they received them from
                    </p>
                    <span class="right-container-arrow"></span>

                </div>
            </div>

            <?php
            $con = new mysqli('localhost', 'root', '', 'bookstore309');


            if (isset($_GET['complaint'])) {
                $value = $_GET['complaint'];

                $sql = "INSERT INTO `commntbox`(`comments`) VALUES ('.$value.')	";
                $result = mysqli_query($con, $sql);
            }



            if (isset($_GET['suggetion'])) {
                $value = $_GET['suggetion'];
                $sql = "INSERT INTO  `suggestion`(`suggestion`) VALUES ('.$value.')	";
                $result = mysqli_query($con, $sql);
            }

            ?>

            <form>

                <div class="container left-container w-[100%] lg:w-[60%]" method="GET">
                    <div class="text-box">
                        <h2 class="text-4xl font-mono font-bold my-5">Suggestion Box</h2>
                        <p class="text-xl">Let us know if you have any suggestions about our shop</p>
                        <textarea name="complaint" rows="5" cols="35" placeholder="Type your suggestions here"></textarea>
                        <span class="left-container-arrow"></span>
                        <input type="submit" class="submit-button"></input>
                    </div>
                </div>
            </form>

            <form method="GET">
                <div class="container right-container w-[100%] lg:w-[60%]">
                    <div class="text-box">
                        <h2 class="text-4xl font-mono font-bold my-5">Complaint Box</h2>
                        <p>Let us know your issues. We're here to help!</p>
                        <textarea name="suggetion" rows="5" cols="35" placeholder="Type your complaint here...">

                    </textarea>
                        <span class="right-container-arrow"></span>
                        <input type="submit" class="submit-button"></input>
                    </div>
                </div>
            </form>


        </div>
    </div>
</body>

</html>