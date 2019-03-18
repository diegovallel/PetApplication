<?php
 session_start();
if (!isset($_SESSION['user'])) {
header('Location: login1.php');
}
 $user=$_SESSION['user'];
 //echo $user;
 $connection = mysql_connect("localhost", "sibxeco_PetFun", "gundam2343038"); // Establishing Connection with Server..
$db = mysql_select_db("sibxeco_Usuarios", $connection); // Selecting Database

$result = mysql_query("SELECT * FROM Registro WHERE email='$user'");

$row = mysql_fetch_array($result);

$imagenh= $row['photo'];
$imagen= $row['foto'];
$username= $row['username'];
$nombre= $row['Nombre'];
$mname= $row['mascota'];
$texto= $row['text'];

mysql_close($connection);
?>


<html>
<head lang="en"><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<script src="mqttws31.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pet FUN  Mascotas Felices</title>

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
        <a href="index.html" class="logo">
            <img src="iconos/logo.png" alt="Clean UI Admin Template" />
            <img class="logo-inverse" src="iconos/logo.png" alt="Clean UI Admin Template" />
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

            <li>
           
                <a class="left-menu-link" href="ajustes.php">
                    <i class="left-menu-link-icon icmn-cog"><!-- --></i>
                    <span class="menu-top-hidden">Ajustes de perfil</span> 
                </a>
            </li>
            <li>
             <li class="left-menu-list-active">
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

    <!-- Dashboard -->
    <div class="dashboard-container">
        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="widget widget-one">
                    <div class="widget-header height-300" style="background-image: url(imagenes_mascota/<?php echo $imagen; ?>)">
                        <h2 class="color-blue">
                            <?php echo $mname; ?><br />
                        </h2>
                    </div>
                    <div class="widget-body clearfix">
                        <div class="s1">
                            <a class="avatar" href="javascript:void(0);">
                                <img src="imagenes_humano/<?php echo $imagenh; ?>" alt="Alternative text to the image">
                            </a>
                            <br />
                            <strong><?php echo $nombre; ?></strong>
                            <br />
                            @<?php echo $username; ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12">
                <div class="widget widget-three">
                    <div class="example-calendar-block"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="widget">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center width-50">Posici&oacute;n</th>
                                        <th>Mascota</th>
                                        <th>Nombre de usuario</th>
                                        <th>Puntaje</th>
                                        <th width="200">Niveles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-center">
                                            1
                                        </th>
                                        <td><a href="javascript: void(0);" class="link-underlined link-blue" data-toggle="tooltip" data-placement="right" title="" data-original-title="User #1">Killer</a></td>
                                        <td>@mdo</td>
                                        <td>1,564</td>
                                        <td>
                                            <div class="steps-inline display-block">
                                                <a href="javascript: void(0);" class="step-block step-success">1</a>
                                                <a href="javascript: void(0);" class="step-block step-success">2</a>
                                                <a href="javascript: void(0);" class="step-block step-success">3</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">
                                            2
                                        </th>
                                        <td><a href="javascript: void(0);" class="link-underlined link-blue" data-toggle="tooltip" data-placement="right" title="" data-original-title="User #2">Firulais</a></td>
                                        <td>@fat</td>
                                        <td>1,256</td>
                                        <td>
                                            <div class="steps-inline display-block">
                                                <a href="javascript: void(0);" class="step-block step-success">1</a>
                                                <a href="javascript: void(0);" class="step-block step-success">2</a>
                                                <a href="javascript: void(0);" class="step-block">3</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">
                                            3
                                        </th>
                                        <td><a href="javascript: void(0);" class="link-underlined link-blue" data-toggle="tooltip" data-placement="right" title="" data-original-title="User #3">Jake</a></td>
                                        <td>@manson</td>
                                        <td>956</td>
                                        <td>
                                            <div class="steps-inline display-block">
                                                <a href="javascript: void(0);" class="step-block step-primary">1</a>
                                                <a href="javascript: void(0);" class="step-block step-primary">2</a>
                                                <a href="javascript: void(0);" class="step-block">3</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">
                                            4
                                        </th>
                                        <td><a href="javascript: void(0);" class="link-underlined link-blue" data-toggle="tooltip" data-placement="right" title="" data-original-title="User #4">Big Dog</a></td>
                                        <td>@jabber</td>
                                        <td>502</td>
                                        <td>
                                            <div class="steps-inline display-block">
                                                <a href="javascript: void(0);" class="step-block step-warning">1</a>
                                                <a href="javascript: void(0);" class="step-block">2</a>
                                                <a href="javascript: void(0);" class="step-block">3</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">
                                            5
                                        </th>
                                        <td><a href="javascript: void(0);" class="link-underlined link-blue" data-toggle="tooltip" data-placement="right" title="" data-original-title="User #5">Simona</a></td>
                                        <td>@Prize_fighter</td>
                                        <td>256</td>
                                        <td>
                                            <div class="steps-inline display-block">
                                                <a href="javascript: void(0);" class="step-block">1</a>
                                                <a href="javascript: void(0);" class="step-block">2</a>
                                                <a href="javascript: void(0);" class="step-block">3</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <th scope="row" class="text-center">
                                            6
                                        </th>
                                        <td><a href="javascript: void(0);" class="link-underlined link-blue" data-toggle="tooltip" data-placement="right" title="" data-original-title="User #5">Simona</a></td>
                                        <td>@Prize_fighter</td>
                                        <td>256</td>
                                        <td>
                                            <div class="steps-inline display-block">
                                                <a href="javascript: void(0);" class="step-block">1</a>
                                                <a href="javascript: void(0);" class="step-block">2</a>
                                                <a href="javascript: void(0);" class="step-block">3</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <th scope="row" class="text-center">
                                            7
                                        </th>
                                        <td><a href="javascript: void(0);" class="link-underlined link-blue" data-toggle="tooltip" data-placement="right" title="" data-original-title="User #5">Simona</a></td>
                                        <td>@Prize_fighter</td>
                                        <td>256</td>
                                        <td>
                                            <div class="steps-inline display-block">
                                                <a href="javascript: void(0);" class="step-block">1</a>
                                                <a href="javascript: void(0);" class="step-block">2</a>
                                                <a href="javascript: void(0);" class="step-block">3</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="widget widget-two">
                            <div class="widget-header">
                                
                                <span class="text-truncate text-nowrap"><strong>Todo sobe ti y tu mascota!</strong></span>
                            </div>
                            <div class="widget-body clearfix">
                                <div class="conversation-block min-height-250 max-height-250 custom-scroll">
				<strong><?php echo $texto; ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget widget-four background-transparent">
            <div class="row">
   
                            
                        


            </div>
        </div>
    </div>
    <!-- End Dashboard -->

</div>


<!-- Page Scripts -->
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
    $(function() {
            $('.swal-btn-warning').click(function(e){
            e.preventDefault();
            swal({
                title: "¿Estás seguro?",
                text: "¿Suficientes porciones para tu mascota?",
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
	  message = new Paho.MQTT.Message("c");
	  message.destinationName = "mqtt/petfun";
	  client.send(message);
	  
            });
        });
                $('.swal-btn-text').click(function(e){
            e.preventDefault();
            swal({
                title: "Activaste la fuente!",
                text: "¡Ahora se puede refrescar y jugar!",
                imageUrl: 'iconos/agua.png'
            });
        });
        $('.swal-btn-custom-img').click(function(e){
            e.preventDefault();
            swal({
                title: "¿Quieres ver a tu mascota?",
                text: "¡Mira como se encuentra hoy!",
                confirmButtonClass: "btn-success",
                imageUrl: 'iconos/Video.png'
            });
        });
        ///////////////////////////////////////////////////////////
        // ADJUSTABLE TEXTAREA
        autosize($('#textarea'));

        ///////////////////////////////////////////////////////////
        // CUSTOM SCROLL
        if (!cleanUI.hasTouch) {
            $('.custom-scroll').each(function() {
                $(this).jScrollPane({
                    autoReinitialise: true,
                    autoReinitialiseDelay: 100
                });
                var api = $(this).data('jsp'),
                        throttleTimeout;
                $(window).bind('resize', function() {
                    if (!throttleTimeout) {
                        throttleTimeout = setTimeout(function() {
                            api.reinitialise();
                            throttleTimeout = null;
                        }, 50);
                    }
                });
            });
        }

        ///////////////////////////////////////////////////////////
        // CALENDAR
        $('.example-calendar-block').fullCalendar({
            //aspectRatio: 2,
            height: 403,
            header: {
                left: 'prev, next',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            buttonIcons: {
                prev: 'none fa fa-arrow-left',
                next: 'none fa fa-arrow-right',
                prevYear: 'none fa fa-arrow-left',
                nextYear: 'none fa fa-arrow-right'
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            viewRender: function(view, element) {
                if (!cleanUI.hasTouch) {
                    $('.fc-scroller').jScrollPane({
                        autoReinitialise: true,
                        autoReinitialiseDelay: 100
                    });
                }
            },
            defaultDate: '2016-09-22',
            events: [
                {
                    title: 'All Day Event',
                    start: '2016-09-14',
                    className: 'fc-event-success'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-09-22T16:00:00',
                    className: 'fc-event-default'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-09-16T16:00:00',
                    className: 'fc-event-success'
                },
                {
                    title: 'Alimentar',
                    start: '2016-09-11',
                    end: '2016-05-14',
                    className: 'fc-event-danger'
                }
            ],
            eventClick: function(calEvent, jsEvent, view) {
                if (!$(this).hasClass('event-clicked')) {
                    $('.fc-event').removeClass('event-clicked');
                    $(this).addClass('event-clicked');
                }
            }
        });

        ///////////////////////////////////////////////////////////
        // GRAPH
        var cssAnimationData = {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    series: [
                        [1, 2, 2.7, 0, 3, 5, 3, 4, 8, 10, 12, 7],
                        [0, 1.2, 2, 7, 2.5, 9, 5, 8, 9, 11, 14, 4],
                        [10, 9, 8, 6.5, 6.8, 6, 5.4, 5.3, 4.5, 4.4, 3, 2.8]
                    ]
                },
                cssAnimationResponsiveOptions = [
                    [{
                        axisX: {
                            labelInterpolationFnc: function(value, index) {
                                return index % 2 !== 0 ? !1 : value
                            }
                        }
                    }]
                ];

        new Chartist.Line(".chartist-one", cssAnimationData, {
                plugins: [
            Chartist.plugins.tooltip()
        ]}, cssAnimationResponsiveOptions);

        ///////////////////////////////////////////////////////////
        // CAROUSEL WIDGET
        $('.carousel-widget').carousel({
            interval: 4000
        });

        $('.carousel-widget-2').carousel({
            interval: 6000
        });

        ///////////////////////////////////////////////////////////
        // TOOLTIPS
        $("[data-toggle=tooltip]").tooltip();

    });
</script>
<!-- End Page Scripts -->
</section>

<div class="main-backdrop"><!-- --></div>

</body>
</html>