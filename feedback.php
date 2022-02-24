<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body >

    <div class="container-fluid ">
        <div class="row ">

            <?php

            require "header.php";

            ?>

            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="row">

                <div class="col-12 mt-4">
                        <h1 class="text-center">Feedback</h1>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Feed Back</label>
                        <textarea class="form-control" cols="30" rows="10" id="desc"></textarea>
                    </div>

                    <div class="col-12 d-grid mt-2">
                        <button class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </div>

            

            <script src="script.js"></script>
            <script src="bootstrap.js"></script>
</body>

</html>
