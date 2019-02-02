<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Login</title>
    <?php include_once('settings/head.php');?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap" style="padding: 0px;">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/itae.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="validation.php" method="post">
                                <div class="form-group">
                                    <label for="usuario">Usuario:</label>
                                    <input type="text" id="usuario" class="au-input au-input--full" name="usuario" placeholder="Usuario" autofocus="on" autocomplete="off" required tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" id="password" class="au-input au-input--full" name="password" placeholder="Contraseña" autocomplete="off" required tabindex="2">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" tabindex="3">Recordarme
                                    </label>
                                    <label>
                                        <a href="#" tabindex="4">Olvidé mi contraseña</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" tabindex="5">Ingresar</button>
                                <!--div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div-->
                            </form>
                            <div class="register-link">
                                <p>
                                    Corporación Educativa ITAE<br>
                                    <span>VIGILADA MINEDUCACIÓN</span><br>
                                    Todos los derechos reservados<br>
                                    2019
                                    <!--Don't you have account?
                                    <a href="#">Sign Up Here</a-->
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->