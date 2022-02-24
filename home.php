<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="homebg">

    <div class="container-fluid ">
        <div class="row ">

            <?php

            require "header.php";

            ?>

            <div class="col-12  mt-4 ">     

                    <div id="carouselExampleFade" class="carousel slide carousel-fade bg-success" data-bs-ride="carousel" style="  box-shadow:  0 0 80px 4px black;">
                        <div class="carousel-inner">
                            <div class="carousel-item active courimg1">
                                <!-- <img src="resources/regimg.jpg" class="d-block w-100" alt="..." style="object-fit: cover; width: 400px; height: 400px; top: 50%;"> -->                              
                            </div>
                            <div class="carousel-item courimg2">
                                <!-- <img src="resources/sdg15.7.jpg" class="d-block w-100" alt="..." style="object-fit: cover; width: 400px; height: 400px;"> -->
                            </div>
                            <div class="carousel-item courimg3">
                                <!-- <img src="resources/v2.jpeg" class="d-block w-100" alt="..." style="object-fit: cover; width: 400px; height: 400px;"> -->
                            </div>
                        </div>                

                </div>

            </div>

            <div class="col-12  shadow-lg section" style="margin-top: 60px;">
                <div class="row">
                    <div class="col-lg-4  col-12">
                        <img src="images/hhhh.jpg" style="object-fit: cover; width: 400px; height: 400px;">
                    </div>
                    <div class="col-lg-8 col-12">
                        <span class="marg ">Travel is the movement of people between distant geographical locations. Travel can be done by foot, bicycle, automobile, train, boat, bus, aeroplane, ship or other means, with or without luggage, and can be one way or round trip.</span>
                    </div>
                </div>
            </div>            

            <div class="col-12  shadow-lg section" style="margin-top: 60px; height: 200px;">
                <div class="row">
                    <div class="col-lg-3 bg-danger col-12"></div>
                    <div class="col-lg-3 bg-dark col-12"></div>
                    <div class="col-lg-3 bg-primary col-12"></div>
                    <div class="col-lg-3 bg-success col-12"></div>
                </div>
            </div>


        </div>
    </div>

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>