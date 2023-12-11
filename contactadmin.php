<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="max-w-[70vw] m-auto mt-20">
        <h1 class="text-3xl font-bold font-mono">Suggestion box</h1>

        <div class="relative overflow-x-auto my-10">

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            contact ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Suggestion
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                        <th scope="col" class="px-6 py-3"></th>
                        <th scope="col" class="px-6 py-3"></th>
                        <!-- <th scope="col" class="px-6 py-3"></th> -->

                    </tr>
                </thead>
                <tbody>

                    <?php
                    $con = new mysqli('localhost', 'root', '', 'bookstore309');
                    $sql = "SELECT * FROM `suggestion`";
                    $result = mysqli_query($con, $sql,);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['sid'];
                            $text= $row['suggestion'];
                            echo '
                            
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               '.$id.'
                            </th>
                            <td class="px-6 py-4">
                               '.$text.'
                            </td>
    
    
                        </tr>
                            
                            ';
                        }
                    }


                    ?>



                </tbody>
            </table>
        </div>

    </div>
</body>

</html>