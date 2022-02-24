<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>
    <link rel="icon" href="assets/Untitled (800 × 800 px).svg">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="lgbody">

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-lg-center align-content-start" style="width: 100%;">

            <div class="col-12">
                <div class="row">

                    <!-- logo -->

                    <div class="col-12 col-lg-6 lgd d-block d-lg-block mt-6 mt-lg-0 text-center" id="lgd">
                        <img src="resources/v2.jpeg" width="500" class="mx-auto d-none d-lg-block lgimg ">
                        <img src="resources/v2.jpeg" width="200" class="mx-auto d-block d-lg-none lgimg ">                     
                        <h4 class="text-center text-white">Traveling Places</h4>
                        <button class="aboutBtn">About Us</button>
                    </div>

                    <!-- logo -->

                    <hr class="d-block d-lg-none mt-4 rounded bg-secondary" style="height: 4px;">

                    <div class="col-lg-6 justify-content-center d-flex col-12">
                        <div class="row align-content-center g-4 rounded-3 mt-4 streg" style="padding-bottom: 20px;">

                            <!-- Register -->

                            <div class="col-12" id="register" style="display: none;">
                                <div class="row">
                                    <h1 class="text-center">Register</h1>
                                    <div class="col-12 g-2">
                                        <label class="form-label"><span class="text-danger">*</span>First Name</label>
                                        <input type="text" class="form-control" id="fname">
                                    </div>
                                    <div class="col-12 g-2">
                                        <label class="form-label"><span class="text-danger">*</span> User Name</label>
                                        <input type="text" class="form-control" id="uname1">
                                    </div>
                                    <div class="col-lg-6 col-12 g-2 ">
                                        <label class="form-label"><span class="text-danger">*</span>Password</label>
                                        <input type="text" class="form-control" id="ps1">
                                    </div>
                                    <div class="col-lg-6 col-12 g-2 ">
                                        <label class="form-label"><span class="text-danger">*</span>confirm Password</label>
                                        <input type="text" class="form-control" id="ps2">
                                    </div>
                                    <div class="col-12 d-grid my-4 ">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 d-grid g-2 mt-lg-0">
                                                <button class="btn btn-primary fs-4 " onclick="register();">Register now</button>
                                            </div>
                                            <div class="col-12 col-lg-6 d-grid g-2 mt-4 mt-lg-0">
                                                <button class="btn btn-success fs-4" onclick="changeToLogin();">I'm already User</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Register -->

                            <!-- Login -->

                            <div class="col-12 " style="display: block;" id="login">
                                <div class="row">
                                    <h1 class="text-center">Login</h1>
                                    <div class="col-12 g-2">
                                        <label class="form-label"><span class="text-danger">*</span>User Name</label>
                                        <input type="text" class="form-control" id="uname">
                                    </div>
                                    <div class="col-12 g-2">
                                        <label class="form-label"><span class="text-danger">*</span>Password</label>
                                        <input type="text" class="form-control" id="pswrd">
                                    </div>
                                    <div class="col-12 my-4 ps-4">
                                        <div class="row">
                                            <div class="col-6 col-lg-6 form-check">
                                                <input type="checkbox" id="rm" class="form-check-input">
                                                <label for="rm" class="form-label">Remember Me</label>
                                            </div>
                                            <div class="col-6 col-lg-6  ">
                                                <a href="#" class="link-primary text-decoration-none fw-bold float-end" onclick="fogotpassword();">Forgot Password</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-grid my-4">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 d-grid g-2">
                                                <button class="btn btn-primary fs-4" onclick="login();">Log In</button>
                                            </div>
                                            <div class="col-12 col-lg-6 d-grid g-2">
                                                <button class="btn btn-danger fs-4" onclick="changeToRegister();">I'm not a User</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Login -->

                        </div>
                    </div>
                </div>

            </div>


            <!-- model -->

            <div class="modal" tabindex="-1" id="forgotPasswordModel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Password Reset</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label">New Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="np">
                                        <button class="btn btn-outline-secondary" type="button" onclick="showPassword1();" id="npb">Show</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Retype Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="rnp">
                                        <button class="btn btn-outline-secondary" type="button" onclick="showPassword2();" id="rnpb">Show</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Verification Code</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="vc">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- model -->

        </div>

    </div>


    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>
