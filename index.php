<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>THSST-1 SURVEY</title>

        <!-- Bootstrap -->
        <link href="assets/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!--Custom-->
        <link href="assets/css/main.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="active" id="login-form-link">Personal Information</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="user-info" method="post" role="form" style="display: block;">
                                        <div class="form-group text-center">
                                            <label for="username">Name:</label>
                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group text-center">
                                            <label for="birthday">Birthday:</label>
                                            <input type="date" name="birthday" id="birthday" tabindex="2" class="form-control" required="required">
                                        </div>
                                        <div class="form-group text-center">
                                            <label for="gender">Gender:</label>
                                            <center>
                                                <label class="radio-inline radio-custom">
                                                    <input name="gender" id="gender" type="radio" value="M">Male
                                                </label>
                                                <label class="radio-inline radio-custom">
                                                    <input name="gender" id="gender" type="radio" value="F">Female
                                                </label>
                                                <label class="radio-inline radio-custom">
                                                    <input name="gender" id="gender" type="radio" value="O">Other
                                                </label>
                                            </center>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <hr class="hr-custom">
                                                <div class="col-lg-6 col-lg-offset-3">
                                                    <input type="submit" name="userinfo_submit" id="userinfo_submit" tabindex="4" class="form-control btn btn-userinfo" value="Proceed">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <!--Custom-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
