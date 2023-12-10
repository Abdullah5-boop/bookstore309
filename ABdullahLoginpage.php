<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div>
        <?php



        if(isset($_GET['username'])){
            session_start();
         
            if($_GET['username']=='abc')
            {
                echo "this is  admin";
                $_SESSION['user']='admin';
                header("Location: abdullah.php");
                
            }
            else{
                echo "this is normal user";
                $_SESSION['user']='def';
                header("Location: abdullah.php");
            }

        }
        else{
            echo "does not match";
        }
        ?>
    <div class=" w-[100vw] h-[100vh] flex justify-center items-center">
        <div class="w-[30%]">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
            method="GET"
            >
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" placeholder="Username"
                    name="username"
                    >
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                    <p class="text-red-500 text-xs italic">Please choose a password.</p>
                </div>
                <div class="flex items-center justify-between">
                    <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
             
                    </input>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        Forgot Password?
                    </a>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy;2020 Acme Corp. All rights reserved.
            </p>
        </div>
    </div>
    </div>
</body>

</html>