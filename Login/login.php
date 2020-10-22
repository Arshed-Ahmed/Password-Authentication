<!DOCTYPE html>
<html lang="en">
	<head>
        <!-- Required meta tags-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="UTF-8">
	
		<?php $root = "http://localhost/Projects/tms/" ?>
		<?php $vendor = "http://localhost/Projects/tms/vendor/" ?>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>1st Level</title>

        <!-- Fontfaces CSS-->
        <link href="<?php echo $root ?>css/font-face.css" rel="stylesheet" media="all">
        <link href="<?php echo $vendor ?>font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="<?php echo $vendor ?>font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="<?php echo $vendor ?>mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="<?php echo $vendor ?>bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="<?php echo $vendor ?>/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="<?php echo $vendor ?>/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="<?php echo $vendor ?>/wow/animate.css" rel="stylesheet" media="all">
        <link href="<?php echo $vendor ?>/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="<?php echo $vendor ?>/slick/slick.css" rel="stylesheet" media="all">
        <link href="<?php echo $vendor ?>/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="<?php echo $vendor ?>/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
        <link href="<?php echo $vendor ?>/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="<?php echo $root ?>css/theme.css" rel="stylesheet" media="all">

	</head>
    <body class="animsition">
        <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <h1>Admin</h1>
                            </div>
                            <div class="login-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label for="name">User Name</label>
                                        <input type="text" id="name" class="au-input au-input--full" placeholder="User name">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password"  class="au-input au-input--full" placeholder="Password">
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <input type="checkbox" name="remember">Remember Me
                                        </label>
                                        <label>
                                            <a href="#">Forgotten Password?</a>
                                        </label>
                                    </div>
                                    <input type="button" id="btnlogin" class="au-btn au-btn--block au-btn--green m-b-20" value="Login">
                                </form>
                                <div class="register-link">
                                    <p>
                                        Don't you have account? :
                                        <a href="#">Contact the Admin</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- login script -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#btnlogin').click(function(){
                    var name=$('#name').val();
                    var pwd=$('#password').val();


                    $.post("controllers/controller_login.php",{pwd:pwd,name:name},function(data,status){
                                if(data==1){
                                    alert("Invalid Username or Password");
                                }else if (data==2){
                                    alert("Your account has been disable, please contact administrator");
                                }else if(data==3){
                                    window.location.href="pattern.php";
                                }
                    });

                });
            });
        </script>
        <!-- Jquery JS-->
        <script src="<?php echo $vendor ?>jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="<?php echo $vendor ?>bootstrap-4.1/popper.min.js"></script>
        <script src="<?php echo $vendor ?>bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="<?php echo $vendor ?>slick/slick.min.js">
        </script>
        <script src="<?php echo $vendor ?>wow/wow.min.js"></script>
        <script src="<?php echo $vendor ?>animsition/animsition.min.js"></script>
        <script src="<?php echo $vendor ?>bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="<?php echo $vendor ?>counter-up/jquery.waypoints.min.js"></script>
        <script src="<?php echo $vendor ?>counter-up/jquery.counterup.min.js">
        </script>
        <script src="<?php echo $vendor ?>circle-progress/circle-progress.min.js"></script>
        <script src="<?php echo $vendor ?>perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="<?php echo $vendor ?>chartjs/Chart.bundle.min.js"></script>
        <script src="<?php echo $vendor ?>select2/select2.min.js">
        </script>
        <script src="<?php echo $vendor ?>vector-map/jquery.vmap.js"></script>
        <script src="<?php echo $vendor ?>vector-map/jquery.vmap.min.js"></script>
        <script src="<?php echo $vendor ?>vector-map/jquery.vmap.sampledata.js"></script>
        <script src="<?php echo $vendor ?>vector-map/jquery.vmap.world.js"></script>

        <!-- Main JS-->
        <script src="<?php echo $root ?>js/main.js"></script>

        <!-- <script type="text/javascript">
            $(document).ready(function(){

            });
        </script> -->
    </body>

</html>
<!-- end document-->