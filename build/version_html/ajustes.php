<?php
 session_start();
if (!isset($_SESSION['user'])) {
header('Location: login1.php');
}
 $user=$_SESSION['user'];
 echo $user;
$connection = mysql_connect("localhost", "sibxeco_PetFun", "gundam2343038"); // Establishing Connection with Server..
$db = mysql_select_db("sibxeco_Usuarios", $connection); // Selecting Database

if ((($_FILES["imagen"]["type"] == "image/gif")
|| ($_FILES["imagen"]["type"] == "image/jpeg")
|| ($_FILES["imagen"]["type"] == "image/jpg")
|| ($_FILES["imagen"]["type"] == "image/JPG")
|| ($_FILES["imagen"]["type"] == "image/pjpeg"))
) { 

	$rutaEnServidor='imagenes_mascota';
	$rutaTemporal=$_FILES['imagen']['tmp_name'];
	$nombreImagen=$_FILES['imagen']['name'];
	$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
	move_uploaded_file($rutaTemporal,$rutaDestino);
	if(isset($nombreImagen)){
	$query = mysql_query("UPDATE Registro set foto='$nombreImagen' WHERE email='$user'");
	}
	
}

if ((($_FILES["imagenh"]["type"] == "image/gif")
|| ($_FILES["imagenh"]["type"] == "image/jpeg")
|| ($_FILES["imagenh"]["type"] == "image/jpg")
|| ($_FILES["imagenh"]["type"] == "image/JPG")
|| ($_FILES["imagenh"]["type"] == "image/pjpeg"))
) { 

	$rutaEnServidor1='imagenes_humano';
	$rutaTemporal1=$_FILES['imagenh']['tmp_name'];
	$nombreImagen1=$_FILES['imagenh']['name'];
	$rutaDestino1=$rutaEnServidor1.'/'.$nombreImagen1;
	move_uploaded_file($rutaTemporal1,$rutaDestino1);
	if(isset($nombreImagen1)){
		$query = mysql_query("UPDATE Registro set photo='$nombreImagen1' WHERE email='$user'");
	}
}
if(isset($_POST["username"]) && (!empty($_POST["username"]))){
  $nombre=$_POST["username"];
  $query = mysql_query("UPDATE Registro set username='$nombre' WHERE email='$user'");
  $query1 = mysql_query("UPDATE Puntajes set username='$nombre' WHERE correo='$user'");
}
if(isset($_POST["nombre"]) && (!empty($_POST["nombre"]))){
  $nombrep=$_POST["nombre"];
  $query = mysql_query("UPDATE Registro set Nombre='$nombrep' WHERE email='$user'");
}
if(isset($_POST["mname"]) && (!empty($_POST["mname"]))){
  $nombrem=$_POST["mname"];
  $query = mysql_query("UPDATE Registro set mascota='$nombrem' WHERE email='$user'");
  $query1 = mysql_query("UPDATE Puntajes set Mascota='$nombrem' WHERE correo='$user'");
  }
if(isset($_POST["texto"]) && (!empty($_POST["texto"]))){
  $about=$_POST["texto"];
  $query = mysql_query("UPDATE Registro set text='$about' WHERE email='$user'");
}
if(isset($_POST["pais"]) && (!empty($_POST["pais"]))){
  $pais=$_POST["pais"];
  $query = mysql_query("UPDATE Registro set pais='$pais' WHERE email='$user'");
}
if(isset($_POST["datem"]) && (!empty($_POST["datem"]))){
  $datem=$_POST["datem"];
  $query = mysql_query("UPDATE Registro set edad='$datem' WHERE email='$user'");
}
if(isset($_POST["sexo"]) && (!empty($_POST["sexo"]))){
  $sexo=$_POST["sexo"];
  $query = mysql_query("UPDATE Registro set sexo='$sexo' WHERE email='$user'");
}
if(isset($_POST["tipo"]) && (!empty($_POST["tipo"]))){
  $tipo=$_POST["tipo"];
  $query = mysql_query("UPDATE Registro set tipo='$tipo' WHERE email='$user'");
}
if(isset($_POST["dateh"]) && (!empty($_POST["dateh"]))){
  $dateh=$_POST["dateh"];
  $query = mysql_query("UPDATE Registro set date='$dateh' WHERE email='$user'");
}
if(isset($_POST["genre"]) && (!empty($_POST["genre"]))){
  $genre=$_POST["genre"];
  $query = mysql_query("UPDATE Registro set genre='$genre' WHERE email='$user'");
}
$result = mysql_query("SELECT * FROM Registro WHERE email='$user'");

$row = mysql_fetch_array($result);

$imagenh= $row['photo'];
mysql_close($connection);	
?>

<html>
<head lang="en">
<script src="mqttws31.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pet FUN | Mascota Feliz</title>

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

 
       <script src="../assets/common/js/common.js"></script>
    <script src="../assets/common/js/demo.temp.js"></script>
</head>
<body class="theme-default">
<nav class="left-menu" left-menu>
    <div class="logo-container">
        <a href="user.html" class="logo">
            <img src="iconos/logo.png" alt="Pet FUN | Mascotas Felices" />
            <img class="logo-inverse" src="iconos/logo.png" alt="Pet FUN | Macotas Felices" />
        </a>
    </div>
    <div class="left-menu-inner scroll-pane">
        <ul class="left-menu-list left-menu-list-root list-unstyled">
  <li>
                <a class="left-menu-link" href="">
                    <i class="left-menu-link-icon icmn-books"><!-- --></i>
                    Información
                </a>
            </li>
            <li class="left-menu-list-active">
                <a class="left-menu-link" href="ajustes.php">
                    <i class="left-menu-link-icon icmn-cog util-spin-delayed-pseudo"><!-- --></i>
                    <span class="menu-top-hidden">Ajustes de perfil</span> 
                </a>
            </li>
            <li>
                <a class="left-menu-link" href='user.php' />
                    <i class="left-menu-link-icon icmn-home2"><!-- --></i>
                    <span class="menu-top-hidden">Perfil</span> 
                </a>
            </li>
                        <li>
                <a class="left-menu-link" href='' />
                    <i class="left-menu-link-icon icmn-pie-chart2"><!-- --></i>
                    <span class="menu-top-hidden">Rankings</span> 
                </a>
            </li>
          </ul>
    </div>
</nav>
<nav class="top-menu">
    <div class="menu-icon-container hidden-md-up">
        <div class="animate-menu-button left-menu-toggle">
            <div><!-- --></div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-user-block">
            <div class="dropdown dropdown-avatar">
                <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="avatar" href="javascript:void(0);">
                        <img src="imagenes_humano/<?php echo $imagenh; ?>" alt="Alternative text to the image">
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">
                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-user"></i> Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"><i class="dropdown-icon icmn-exit"></i> Salir</a>
                </ul>
            </div>
        </div>
        <div class="menu-info-block">
            <div class="left">
                <div class="header-buttons">
                    <div class="dropdown">
                                                <a onclick="Fuente();" class="btn btn-squared btn-primary margin-inline swal-btn-text" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-tint" ></i>
                            <span class="hidden-lg-down">Tengo sed!</span>
                            <span class="caret"></span>
                        </a>

                    </div>
                    <div class="dropdown">
                       
                        <a class="btn btn-squared btn-danger margin-inline swal-btn-warning" data-toggle="dropdown" aria-expanded="false">
                            <i class="dropdown-inline-button-icon icmn-database"></i>
                            <span class="hidden-lg-down">Alimentame!</span>
                            <span class="caret"></span>
                        </a>
                        <strong>Numero de porciones:</strong>
                        <input type="number" max="12" min="1" step="1" name="raciones" size="2" id="raciones" value="1">                              
                        

                    </div>
                    <div class="dropdown">
                       
                        <a onclick="Video();" class="btn btn-squared btn-success margin-inline swal-btn-custom-img" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-paw"></i>
                            <span class="hidden-lg-down">Quieres verme?</span>
                            <span class="caret"></span>
                        </a>

                    </div>                   
                </div>
            </div>

        </div>
    </div>
</nav>

<section class="page-content">
<div class="page-content-inner">

    <!-- Basic Form Elements -->
    <section class="panel">
        <div class="panel-heading">
            <h3>Ajustes</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="margin-bottom-50">
                        <h4>Todo sobre ti y tu mascota</h4>
                        <br />
                        <!-- Horizontal Form -->
                        <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l0">Tu nombre</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Nombre" id="l0" name="nombre">
                                </div>
                            </div>      
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l0">Tu nombre de usuario</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="username" id="l0" name="username">
                                </div>
                            </div>    
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l14">Pais</label>
                                </div>
				<div class="col-md-9">
                            <select class="select2" name="pais">
			<option value="AF">Afganistán</option> 
                      <option value="AL">Albania</option> 
                      <option value="DE">Alemania</option> 
                      <option value="AD">Andorra</option> 
                      <option value="AO">Angola</option> 
                      <option value="AI">Anguilla</option> 
                      <option value="AQ">Antártida</option> 
                      <option value="AG">Antigua y Barbuda</option> 
                      <option value="AN">Antillas Holandesas</option> 
                      <option value="SA">Arabia Saudí</option> 
                      <option value="DZ">Argelia</option> 
                      <option value="AR">Argentina</option> 
                      <option value="AM">Armenia</option> 
                      <option value="AW">Aruba</option> 
                      <option value="AU">Australia</option> 
                      <option value="AT">Austria</option>  
                      <option value="AZ">Azerbaiyán</option>  
                      <option value="BS">Bahamas</option>  
                      <option value="BH">Bahrein</option>  
                      <option value="BD">Bangladesh</option>  
                      <option value="BB">Barbados</option>  
                      <option value="BE">Bélgica</option>  
                      <option value="BZ">Belice</option>  
                      <option value="BJ">Benin</option>  
                      <option value="BM">Bermudas</option>  
                      <option value="BY">Bielorrusia</option>  
                      <option value="MM">Birmania</option>  
                      <option value="BO">Bolivia</option>  
                      <option value="BA">Bosnia y Herzegovina</option>  
                      <option value="BW">Botswana</option>  
                      <option value="BR">Brasil</option>  
                      <option value="BN">Brunei</option>  
                      <option value="BG">Bulgaria</option>  
                      <option value="BF">Burkina Faso</option>  
                      <option value="BI">Burundi</option>  
                      <option value="BT">Bután</option>  
                      <option value="CV">Cabo Verde</option>  
                      <option value="KH">Camboya</option>  
                      <option value="CM">Camerún</option>  
                      <option value="CA">Canadá</option>  
                      <option value="TD">Chad</option>  
                      <option value="CL">Chile</option>  
                      <option value="CN">China</option>  
                      <option value="CY">Chipre</option>  
                      <option value="VA">Ciudad del Vaticano (Santa Sede)</option>  
                      <option value="CO" selected>Colombia</option>  
                      <option value="KM">Comores</option>  
                      <option value="CG">Congo</option>  
                      <option value="CD">Congo, República Democrática del</option>  
                      <option value="KR">Corea</option>  
                      <option value="KP">Corea del Norte</option>  
                      <option value="CI">Costa de Marfíl</option>  
                      <option value="CR">Costa Rica</option>  
                      <option value="HR">Croacia (Hrvatska)</option>  
                      <option value="CU">Cuba</option>  
                      <option value="DK">Dinamarca</option>  
                      <option value="DJ">Djibouti</option>  
                      <option value="DM">Dominica</option>  
                      <option value="EC">Ecuador</option>  
                      <option value="EG">Egipto</option>  
                      <option value="SV">El Salvador</option>  
                      <option value="AE">Emiratos Árabes Unidos</option>  
                      <option value="ER">Eritrea</option>  
                      <option value="SI">Eslovenia</option>  
                      <option value="ES">España</option>  
                      <option value="US">Estados Unidos</option>  
                      <option value="EE">Estonia</option>  
                      <option value="ET">Etiopía</option>  
                      <option value="FJ">Fiji</option>  
                      <option value="PH">Filipinas</option>  
                      <option value="FI">Finlandia</option>  
                      <option value="FR">Francia</option>  
                      <option value="GA">Gabón</option>  
                      <option value="GM">Gambia</option>  
                      <option value="GE">Georgia</option>  
                      <option value="GH">Ghana</option>  
                      <option value="GI">Gibraltar</option>  
                      <option value="GD">Granada</option>  
                      <option value="GR">Grecia</option>  
                      <option value="GL">Groenlandia</option>  
                      <option value="GP">Guadalupe</option>  
                      <option value="GU">Guam</option>  
                      <option value="GT">Guatemala</option>  
                      <option value="GY">Guayana</option>  
                      <option value="GF">Guayana Francesa</option>  
                      <option value="GN">Guinea</option>  
                      <option value="GQ">Guinea Ecuatorial</option>  
                      <option value="GW">Guinea-Bissau</option>  
                      <option value="HT">Haití</option>  
                      <option value="HN">Honduras</option>  
                      <option value="HU">Hungría</option>  
                      <option value="IN">India</option>  
                      <option value="ID">Indonesia</option>  
                      <option value="IQ">Irak</option>  
                      <option value="IR">Irán</option>  
                      <option value="IE">Irlanda</option>  
                      <option value="BV">Isla Bouvet</option>  
                      <option value="CX">Isla de Christmas</option>  
                      <option value="IS">Islandia</option>  
                      <option value="KY">Islas Caimán</option>  
                      <option value="CK">Islas Cook</option>  
                      <option value="CC">Islas de Cocos o Keeling</option>  
                      <option value="FO">Islas Faroe</option>  
                      <option value="HM">Islas Heard y McDonald</option>  
                      <option value="FK">Islas Malvinas</option>  
                      <option value="MP">Islas Marianas del Norte</option>  
                      <option value="MH">Islas Marshall</option>  
                      <option value="UM">Islas menores de Estados Unidos</option>  
                      <option value="PW">Islas Palau</option>  
                      <option value="SB">Islas Salomón</option>  
                      <option value="SJ">Islas Svalbard y Jan Mayen</option>  
                      <option value="TK">Islas Tokelau</option>  
                      <option value="TC">Islas Turks y Caicos</option>  
                      <option value="VI">Islas Vírgenes (EE.UU.)</option>  
                      <option value="VG">Islas Vírgenes (Reino Unido)</option>  
                      <option value="WF">Islas Wallis y Futuna</option>  
                      <option value="IL">Israel</option>  
                      <option value="IT">Italia</option>  
                      <option value="JM">Jamaica</option>  
                      <option value="JP">Japón</option>  
                      <option value="JO">Jordania</option>  
                      <option value="KZ">Kazajistán</option>  
                      <option value="KE">Kenia</option>  
                      <option value="KG">Kirguizistán</option>  
                      <option value="KI">Kiribati</option>  
                      <option value="KW">Kuwait</option>  
                      <option value="LA">Laos</option>  
                      <option value="LS">Lesotho</option>  
                      <option value="LV">Letonia</option>  
                      <option value="LB">Líbano</option>  
                      <option value="LR">Liberia</option>  
                      <option value="LY">Libia</option>  
                      <option value="LI">Liechtenstein</option>  
                      <option value="LT">Lituania</option>  
                      <option value="LU">Luxemburgo</option>  
                      <option value="MK">Macedonia, Ex-República Yugoslava de</option>  
                      <option value="MG">Madagascar</option>  
                      <option value="MY">Malasia</option>  
                      <option value="MW">Malawi</option>  
                      <option value="MV">Maldivas</option>  
                      <option value="ML">Malí</option>  
                      <option value="MT">Malta</option>  
                      <option value="MA">Marruecos</option>  
                      <option value="MQ">Martinica</option>  
                      <option value="MU">Mauricio</option>  
                      <option value="MR">Mauritania</option>  
                      <option value="YT">Mayotte</option>  
                      <option value="MX">México</option>  
                      <option value="FM">Micronesia</option>  
                      <option value="MD">Moldavia</option>  
                      <option value="MC">Mónaco</option>  
                      <option value="MN">Mongolia</option>  
                      <option value="MS">Montserrat</option>  
                      <option value="MZ">Mozambique</option>  
                      <option value="NA">Namibia</option>  
                      <option value="NR">Nauru</option>  
                      <option value="NP">Nepal</option>  
                      <option value="NI">Nicaragua</option>  
                      <option value="NE">Níger</option>  
                      <option value="NG">Nigeria</option>  
                      <option value="NU">Niue</option>  
                      <option value="NF">Norfolk</option>  
                      <option value="NO">Noruega</option>  
                      <option value="NC">Nueva Caledonia</option>  
                      <option value="NZ">Nueva Zelanda</option>  
                      <option value="OM">Omán</option>  
                      <option value="NL">Países Bajos</option>  
                      <option value="PA">Panamá</option>  
                      <option value="PG">Papúa Nueva Guinea</option>  
                      <option value="PK">Paquistán</option>  
                      <option value="PY">Paraguay</option>  
                      <option value="PE">Perú</option>  
                      <option value="PN">Pitcairn</option>  
                      <option value="PF">Polinesia Francesa</option>  
                      <option value="PL">Polonia</option>  
                      <option value="PT">Portugal</option>  
                      <option value="PR">Puerto Rico</option>  
                      <option value="QA">Qatar</option>  
                      <option value="UK">Reino Unido</option>  
                      <option value="CF">República Centroafricana</option>  
                      <option value="CZ">República Checa</option>  
                      <option value="ZA">República de Sudáfrica</option>  
                      <option value="DO">República Dominicana</option>  
                      <option value="SK">República Eslovaca</option>  
                      <option value="RE">Reunión</option>  
                      <option value="RW">Ruanda</option>  
                      <option value="RO">Rumania</option>  
                      <option value="RU">Rusia</option>  
                      <option value="EH">Sahara Occidental</option>  
                      <option value="KN">Saint Kitts y Nevis</option>  
                      <option value="WS">Samoa</option>  
                      <option value="AS">Samoa Americana</option>  
                      <option value="SM">San Marino</option>  
                      <option value="VC">San Vicente y Granadinas</option>  
                      <option value="SH">Santa Helena</option>  
                      <option value="LC">Santa Lucía</option>  
                      <option value="ST">Santo Tomé y Príncipe</option>  
                      <option value="SN">Senegal</option>  
                      <option value="SC">Seychelles</option>  
                      <option value="SL">Sierra Leona</option>  
                      <option value="SG">Singapur</option>  
                      <option value="SY">Siria</option>  
                      <option value="SO">Somalia</option>  
                      <option value="LK">Sri Lanka</option>  
                      <option value="PM">St. Pierre y Miquelon</option>  
                      <option value="SZ">Suazilandia</option>  
                      <option value="SD">Sudán</option>  
                      <option value="SE">Suecia</option>  
                      <option value="CH">Suiza</option>  
                      <option value="SR">Surinam</option>  
                      <option value="TH">Tailandia</option>  
                      <option value="TW">Taiwán</option>  
                      <option value="TZ">Tanzania</option>  
                      <option value="TJ">Tayikistán</option>  
                      <option value="TF">Territorios franceses del Sur</option>  
                      <option value="TP">Timor Oriental</option>  
                      <option value="TG">Togo</option>  
                      <option value="TO">Tonga</option>  
                      <option value="TT">Trinidad y Tobago</option>  
                      <option value="TN">Túnez</option>  
                      <option value="TM">Turkmenistán</option>  
                      <option value="TR">Turquía</option>  
                      <option value="TV">Tuvalu</option>  
                      <option value="UA">Ucrania</option>  
                      <option value="UG">Uganda</option>  
                      <option value="UY">Uruguay</option>  
                      <option value="UZ">Uzbekistán</option>  
                      <option value="VU">Vanuatu</option>  
                      <option value="VE">Venezuela</option>  
                      <option value="VN">Vietnam</option>  
                      <option value="YE">Yemen</option>  
                      <option value="YU">Yugoslavia</option>  
                      <option value="ZM">Zambia</option>  
                      <option value="ZW">Zimbabue</option> 
                            </select>
                     </div>
                        </div>                                 
                                  <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l14">Sexo</label>
                                </div>
				<div class="col-md-9">
                            <select class="select2" name="genre">
                      <option value="M">Masculino</option> 
                      <option value="F">Femenino</option> 
                      <option value="NN">Sin definir</option> 
                            </select>
                     </div>
                        </div>                            
                             <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l14">Fecha de nacimiento</label>
                                </div>
                                <div class="col-md-9">
                            <label class="input-group datepicker-only-init">
                                <input type="text" class="form-control" placeholder="Select Date" name="dateh" />
                                <span class="input-group-addon">
                                    <i class="icmn-calendar"></i>
                                </span>
                    </div>
                </div>                   
                <div>                                                                     
                                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l16">Tu foto</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" id="l16" name="imagenh">
                                    <br />
                                    <small>Dejenaos verte!</small>
                                    
                                       
                                </div>
                                <div class="col-md-9"><button type="submit" class="btn btn-squared btn-danger margin-inline" name="Aceptar" id="Aceptar" value="Aceptar">Subir foto</button></div>
                                
                            </div>   
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l0">Nombre de tu mascota</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Username" id="l0" name="mname">
                                </div>
                            </div>            
                                                                <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l14">Tu mascota es</label>
                                </div>
				<div class="col-md-9">
                            <select class="select2" name="tipo">
                      <option value="C">Gato</option> 
                      <option value="D">Perro</option> 
                      <option value="NN">Otro</option> 
                            </select>
                     </div>
                        </div>    
                                  <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l14">Sexo</label>
                                </div>
				<div class="col-md-9">
                            <select class="select2" name="sexo">
                      <option value="M">Masculino</option> 
                      <option value="F">Femenino</option> 
                      <option value="NN">Sin definir</option> 
                            </select>
                     </div>
                        </div>      
      <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l14">Fecha de nacimiento</label>
                                </div>
                                <div class="col-md-9">
                            <label class="input-group datepicker-only-init">
                                <input type="text" class="form-control" placeholder="Select Date" name="datem" />
                                <span class="input-group-addon">
                                    <i class="icmn-calendar"></i>
                                </span>
                    </div>
                </div>      
              <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l16">Foto de tu mascota</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" id="l16" name="imagen">
                                    <br />
                                    <small>Ella también quiere que la vean!</small>
                                    
                                       
                                    </div>
                                <div class="col-md-9"><button type="submit" class="btn btn-squared btn-danger margin-inline" name="Aceptar" id="Aceptar" value="Aceptar">Subir foto</button></div>
                                 <div class="col-md-3">
                                    <label class="form-control-label" for="l16">Cuentanos más de ti y tu mascota</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="3" id="l15" name="texto"></textarea>
                                </div>
                            </div>
                            <div>

                            <div class="form-actions">
                                <div class="form-group row">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn width-150 btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        <!-- End Horizontal Form -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="margin-bottom-50">
                        <h4>Cuenta</h4>
                        
                        <!-- Vertical Form -->
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="l30">Correo electronico</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="icmn-mail2"></i>
                                        </span>
                                        <input type="email" class="form-control" value="<?php echo $user ?>" id="l2">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="l31">Contraseña actual</label>
		
			                        <!-- Show / Hide Password -->
			                        <div class="form-group">
			                            <input id="password" type="password" class="form-control" value="Password">
                                   
                                </div>
                                </div>
                                </div>
                           
                               <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="l31">Nueva contraseña</label>
			
			                        <!-- Show / Hide Password -->
			                        <div class="form-group">
			                            <input id="Npassword" type="password" class="form-control" value="NPassword">
                                    
                                </div>
                            </div>
                            </div>                          
                             <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="l31">Confirmar nueva contraseña</label>
			
			                        <!-- Show / Hide Password -->
			                        <div class="form-group">
			                            <input id="NCpassword" type="password" class="form-control" value="CNPassword">
                                   
                                
                            </div>
                            </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary width-150">Submit</button>
                                <button type="reset" class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                        
                        <!-- End Vertical Form -->
                    </div>
                </div>
            </div>
            
    </section>
    <!-- End -->

</div>

</section>

<div class="main-backdrop"><!-- --></div>
<script>

	client = new Paho.MQTT.Client("iot.eclipse.org", Number(80), "clientId");
	 
	// set callback handlers
	client.onConnectionLost = onConnectionLost;
	client.onMessageArrived = onMessageArrived;
	 
	// connect the client
	client.connect({onSuccess:onConnect});


	function Fuente(){
		message = new Paho.MQTT.Message("a");
	  message.destinationName = "mqtt/petfun";
	  client.send(message);
	
	}

	function Video(){
	message = new Paho.MQTT.Message("v");
	  message.destinationName = "mqtt/petfun";
	  client.send(message);
	}
	// called when the client connects
	function onConnect() {
	  // Once a connection has been made, make a subscription and send a message
	  client.subscribe("mqtt/petfun");

	}
	 
	// called when the client loses its connection
	function onConnectionLost(responseObject) {
	  if (responseObject.errorCode !== 0) {
	    console.log("onConnectionLost:"+responseObject.errorMessage);
	  }
	}
	 
	// called when a message arrives
	function onMessageArrived(message) {
	  console.log("onMessageArrived:"+message.payloadString);
	}
	    $(function(){
	    
	                $('.swal-btn-warning').click(function(e){
            e.preventDefault();
            swal({
                title: "¿Estás seguro?",
                text: "¿Suficientes porciones para tu mscota?",
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: "cancelar",
                confirmButtonClass: "btn-warning",
                confirmButtonText: "Si",
                closeOnConfirm: false
            },
            function(){
                swal({
                    title: "Listo!",
                    text: "Tu mascota esta feliz!",
                    type: "success",
                    confirmButtonClass: "btn-success",
                    imageUrl: 'iconos/comida.png'
                });
                	var raciones = document.getElementById("raciones").value;
	  message = new Paho.MQTT.Message("c"+raciones);
	  message.destinationName = "mqtt/petfun";
	  client.send(message);
	  
            });
        });
                $('.swal-btn-text').click(function(e){
            e.preventDefault();
            swal({
                title: "Activaste la fuente!",
                text: "Ahora se puede refrescar y jugar!",
                imageUrl: 'iconos/agua.png'
            });
        });
        $('.swal-btn-custom-img').click(function(e){
            e.preventDefault();
            swal({
                title: "¿Quiere ver a tu mascota?",
                text: "Mira como se encuentra hoy!",
                confirmButtonClass: "btn-success",
                imageUrl: 'iconos/Video.png'
            });
        });

        $('.datepicker-init').datetimepicker({
            widgetPositioning: {
                horizontal: 'left'
            },
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });

        $('.datepicker-only-init').datetimepicker({
            widgetPositioning: {
                horizontal: 'left'
            },
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            },
            format: 'LL'
        });

        $('.timepicker-init').datetimepicker({
            widgetPositioning: {
                horizontal: 'left'
            },
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            },
            format: 'LT'
        });

        $('.datepicker-inline-init').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            },
            inline: true,
            sideBySide: false
        });

        $('.timepicker-inline-init').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            },
            format: 'LT',
            inline: true,
            sideBySide: false
        });
        
        $('#password').password({
            eyeClass: '',
            eyeOpenClass: 'icmn-eye',
            eyeCloseClass: 'icmn-eye-blocked'
        });
                $('#Npassword').password({
            eyeClass: '',
            eyeOpenClass: 'icmn-eye',
            eyeCloseClass: 'icmn-eye-blocked'
        });
                $('#NCpassword').password({
            eyeClass: '',
            eyeOpenClass: 'icmn-eye',
            eyeCloseClass: 'icmn-eye-blocked'
        });

    });
</script>
</body>
</html>>