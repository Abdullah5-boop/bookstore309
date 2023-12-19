<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Review</title>
    <link rel="stylesheet" href="./anindita.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />



</head>


<body>
    <section id="review">
 

        <form action="" method="GET">
            <div class="reviewinput">
                <input name='cmnttext' class="textinput" type="text">
                <input class="btn-type" type="submit">
            </div>
        </form>



        <div class="review-heading">
            <span>Reviews</span>
            <h1>Client Says</h1>
        </div>


        <div class="box-container">

            <?php
            $con = new mysqli('localhost', 'root', '', 'bookstore309');
     
            
         


                $sql = " SELECT * FROM review WHERE Bookid =   $value ";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $content = $row['reviewcontent'];
                
                    echo '
                    </br>
                    </br>
                    <div class="box">
                    <div class="box-top">
               
                        <div class="profile">
                            <div class="profile-img">
                                <img src="c-1.jpg" />
                            </div>
                    
                            <div class="name">
                                <strong>Selena Gomez</strong>
                                <span>@selenagomez</span>
                            </div>
                        </div>
                   
                        <div class="cmnt">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                   
                    <div class="client-cmnt">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                            temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                            voluptates incidunt blanditiis sed atque cumque '.$content.'.</p>
                    </div>
                </div>
                    
                    
                    ';
                }
            
            ?>



            <!---Box1-->
         




            <!---Box2-->

            <!-- <div class="box">
                <div class="box-top">
 
                    <div class="profile">
                        <div class="profile-img">
                            <img src="c-2.jpg" />
                        </div>
            
                        <div class="name">
                            <strong>Harry Potter</strong>
                            <span>@harrypotter</span>
                        </div>
                    </div>
            
                    <div class="cmnt">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            
                <div class="client-cmnt">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                        temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                        voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div> -->



            <!---Box3-->

            <!-- <div class="box">
                <div class="box-top">

                    <div class="profile">
                        <div class="profile-img">
                            <img src="c-3.jpg" />
                        </div>

                        <div class="name">
                            <strong>Emma Watson</strong>
                            <span>@emmawatson</span>
                        </div>
                    </div>

                    <div class="cmnt">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="client-cmnt">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                        temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                        voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div> -->





            <!---Box4-->


            <div class="box">
                <div class="box-top">

                    <div class="profile">
                        <div class="profile-img">
                            <img src="c-4.jpg" />
                        </div>

                        <div class="name">
                            <strong>Jefry Manan</strong>
                            <span>@jefrymanan</span>
                        </div>
                    </div>

                    <div class="cmnt">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>

                <div class="client-cmnt">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                        temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                        voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>