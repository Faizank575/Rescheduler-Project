<?php

require './includes/header.php';

?>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registration Form</title>

<!-- CSS -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="./css/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/assets/css/form-elements.css">
<link rel="stylesheet" href="./css/assets/css/style.css">

</head>

<body>
<div class="container">
<div class="row justify-content-center">
    <div class="col col-sm-3"></div>
        <div class="col col-sm-6">
                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Sign up now</h3>
                                <p>Fill in the form below to get instant access:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="./includes/signup.inc.php" method="post" class="registration-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">First name</label>
                                    <input id="username" type="text" name="form-username" placeholder="Username" class="form-username form-control">
                                    <p id="username-error"></p>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Email</label>
                                    <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="email">
                                    <p id="email-error"></p>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="password">
                                    <p id="password-error" ></p>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password-repeat">Repeat Password</label>
                                    <input type="password" name="form-password-repeat" placeholder="Repeat Password" class="form-repeat-password form-control" id="password-repeat">
                                    <p id="repeat-password-error" ></p>
                                </div>
                                <button type="submit" class="btn" id="submitButton" name='signup-btn'>Sign up!</button>
                            </form>
                        </div>
                </div>
        </div>
    </div>
    <script src="./includes/jquery-3.3.1.js"></script>
    <script src="./js/form_validation.js"></script>
</div>