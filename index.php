<?php include(realpath(dirname(__FILE__) . "/./php/login.php")); ?>

<!DOCTYPE html>
<html style="height: 100% !important;" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sales Team</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="css/style2.css" rel="stylesheet">

</head>

<body style="height: 100% !important; background-image: url('./images/background.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%;" >
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg" style="height: 100% !important;">
        <div class="mr-0 ml-0" style="height: 100% !important;">
            <div class="row justify-content-center" style="height: 100% !important;">
                <div class="col-lg-8">
                </div>
                <div class="col-lg-3">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <div>
                                <center>
                                    <img src="../images/login-png.png" style="height: 120px"></img>
                                </center>
                                </div>
                                </br>
                                <div>
                                    <?php
                                    if (!empty($erros)) :
                                        foreach ($erros as $erro) :
                                            echo $erro;
                                        endforeach;
                                    endif;
                                    ?>
                                    <?php
                                    if (isset($_SESSION['msg'])) {
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                    }
                                    ?>
                                </div>
                                <form class="mt-5 mb-5 login-input" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Usuário" name="login" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Senha" name="senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>">
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100" name="btn-entrar">Entrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1">
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <style>
    </style>

</body>

</html>