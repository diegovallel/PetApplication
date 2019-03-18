<?php
session_start();
$connection = mysql_connect("localhost", "sibxeco_PetFun", "gundam2343038"); // Establishing Connection with Server..
$db = mysql_select_db("sibxeco_Usuarios", $connection); // Selecting Database

function verificar_login($user,$password,&$result) {
    $sql = "SELECT * FROM Registro WHERE email = '$user' and password = '$password'";
    $rec = mysql_query($sql);
    $count = 0;

    while($row = mysql_fetch_object($rec))
    {
        $count++;
        $result = $row;
    }

    if($count == 1)
    {
        return 1;
    }

    else
    {
        return 0;
    }
}

if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
        {
        $user=$_POST['user'];
        //session_register("user");
         $_SESSION['user'] = $user;
         header("location:user.php");
        }
        else
        {
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
        }
    }
?>




<html>
<head lang="en"><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pet Fun | Mascota Feliz</title>

    <link href="iconos/144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="iconos/114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="iconos/72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="iconos/57.png" rel="apple-touch-icon" type="image/png">
    <link href="iconos/144.png" rel="icon" type="image/png">
    <link href="favicon.ico" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for < IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Vendors Styles -->
    <!-- v1.0.0 -->
    <link rel="stylesheet" type="text/css" href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/jscrollpane/style/jquery.jscrollpane.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/cleanhtmlaudioplayer/src/player.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/cleanhtmlvideoplayer/src/player.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/bootstrap-sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/summernote/dist/summernote.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/ionrangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/datatables/media/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/c3/c3.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/chartist/dist/chartist.min.css">
    <!-- v.1.4.0 -->
    <link rel="stylesheet" type="text/css" href="../assets/vendors/nprogress/nprogress.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/jquery-steps/demo/css/jquery.steps.css">

    <!-- Clean UI Styles -->
    <link rel="stylesheet" type="text/css" href="../assets/common/css/source/main.css">

    <!-- Vendors Scripts -->
    <!-- v1.0.0 -->
    <script src="../assets/vendors/jquery/jquery.min.js"></script>
    <script src="../assets/vendors/tether/dist/js/tether.min.js"></script>
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/vendors/jquery-mousewheel/jquery.mousewheel.min.js"></script>
    <script src="../assets/vendors/jscrollpane/script/jquery.jscrollpane.min.js"></script>
    <script src="../assets/vendors/spin.js/spin.js"></script>
    <script src="../assets/vendors/ladda/dist/ladda.min.js"></script>
    <script src="../assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
    <script src="../assets/vendors/jquery-typeahead/dist/jquery.typeahead.min.js"></script>
    <script src="../assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="../assets/vendors/autosize/dist/autosize.min.js"></script>
    <script src="../assets/vendors/bootstrap-show-password/bootstrap-show-password.min.js"></script>
    <script src="../assets/vendors/moment/min/moment.min.js"></script>
    <script src="../assets/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../assets/vendors/cleanhtmlaudioplayer/src/jquery.cleanaudioplayer.js"></script>
    <script src="../assets/vendors/cleanhtmlvideoplayer/src/jquery.cleanvideoplayer.js"></script>
    <script src="../assets/vendors/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script src="../assets/vendors/summernote/dist/summernote.min.js"></script>
    <script src="../assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../assets/vendors/ionrangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="../assets/vendors/nestable/jquery.nestable.js"></script>
    <script src="../assets/vendors/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendors/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js"></script>
    <script src="../assets/vendors/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="../assets/vendors/editable-table/mindmup-editabletable.js"></script>
    <script src="../assets/vendors/d3/d3.min.js"></script>
    <script src="../assets/vendors/c3/c3.min.js"></script>
    <script src="../assets/vendors/chartist/dist/chartist.min.js"></script>
    <script src="../assets/vendors/peity/jquery.peity.min.js"></script>
    <!-- v1.0.1 -->
    <script src="../assets/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- v1.1.1 -->
    <script src="../assets/vendors/gsap/src/minified/TweenMax.min.js"></script>
    <script src="../assets/vendors/hackertyper/hackertyper.js"></script>
    <script src="../assets/vendors/jquery-countTo/jquery.countTo.js"></script>
    <!-- v1.4.0 -->
    <script src="../assets/vendors/nprogress/nprogress.js"></script>
    <script src="../assets/vendors/jquery-steps/build/jquery.steps.min.js"></script>

    <!-- Clean UI Scripts -->
    <script src="../assets/common/js/common.js"></script>
    <script src="../assets/common/js/demo.temp.js"></script>
</head>
<body class="theme-default">

<section class="page-content">
<div class="page-content-inner" style="background-image: url(iconos/pets.jpg)">

    <!-- Login Omega Page -->
    <div class="single-page-block-header">
        <div class="row">
            <div class="col-lg-4">
                <div class="logo">
                    <a href="javascript: history.back();">
                        <img src="iconos/logo.png" alt="Pet FUN" />
                    </a>
                </div>
            </div>
 
        </div>
    </div>
    <div class="single-page-block">
        <div class="single-page-block-inner effect-3d-element">
            <div class="blur-placeholder"><!-- --></div>
            <div class="single-page-block-form">
                <h3 class="text-center">
                    <i class="icmn-enter margin-right-10"></i>
                    Iniciar Sesion
                </h3>
                <br />
                <form action="" method="post" class="login">
	<div><label>Correo Electronico</label><input id="validation-email"
                               class="form-control"
                               placeholder="Correo Electronico" name="user" type="text"                                data-validation="[EMAIL]"
                               data-validation-message="$ no valido"
                               data-validation-regex="/(([a-zA-Z0-9\-?\.?]+)@(([a-zA-Z0-9\-_]+\.)+)([a-z]{2,3}))+$/"
                               data-validation-regex-message="$ no valido"></div>
	<div><label>Contrase&ntilde;a</label><input id="validation-password"
                               class="form-control password" name="password" type="password" data-validation="[L>=6]"
                               data-validation-message="$ must be at least 6 characters"
                               placeholder="Contrase&ntilde;a"
                               data-validation-regex="/^[a-zA-Z0-9]*$/"
                               data-validation-regex-message="Contrase&ntilde;a no valida. Solo numeros y letras"></div>
	
	            <div class="form-actions">
                        <button type="submit" class="btn btn-primary width-150" name="login" value="login">Entrar</button>
                        <button type="button" class="btn btn-primary width-150" onclick=" location.href='pages-register.html' ">Registrarse</button>
                    </div>

	</form>

            </div>
        </div>
    </div>

    <!-- End Login Omega Page -->

</div>

<!-- Page Scripts -->
<script>
    $(function() {

        // Add class to body for change layout settings
        $('body').addClass('single-page single-page-inverse');

        // Form Validation
        $('#form-validation').validate({
            submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger'
                }
            }
        });

        // Show/Hide Password
        $('.password').password({
            eyeClass: '',
            eyeOpenClass: 'icmn-eye',
            eyeCloseClass: 'icmn-eye-blocked'
        });

        // Set Background Image for Form Block
        function setImage() {
            var imgUrl = $('.page-content-inner').css('background-image');

            $('.blur-placeholder').css('background-image', imgUrl);
        };

        function changeImgPositon() {
            var width = $(window).width(),
                    height = $(window).height(),
                    left = - (width - $('.single-page-block-inner').outerWidth()) / 2,
                    top = - (height - $('.single-page-block-inner').outerHeight()) / 2;


            $('.blur-placeholder').css({
                width: width,
                height: height,
                left: left,
                top: top
            });
        };

        setImage();
        changeImgPositon();

        $(window).on('resize', function(){
            changeImgPositon();
        });

        // Mouse Move 3d Effect
        var rotation = function(e){
            var perX = (e.clientX/$(window).width())-0.5;
            var perY = (e.clientY/$(window).height())-0.5;
            TweenMax.to(".effect-3d-element", 0.4, { rotationY:15*perX, rotationX:15*perY,  ease:Linear.easeNone, transformPerspective:1000, transformOrigin:"center" })
        };

        if (!cleanUI.hasTouch) {
            $('body').mousemove(rotation);
        }

    });
</script>
<!-- End Page Scripts -->
</section>

<div class="main-backdrop"><!-- --></div>

</body>
</html>
<?php
} else {
	echo 'Su usuario ingreso correctamente.';
	echo '<a href="logout.php">Logout</a>';
}
?>