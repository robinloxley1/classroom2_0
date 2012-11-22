<?php
    //debug.php
    ini_set('display_errors', 1);
    error_reporting(E_ALL|E_STRICT);

    require_once("dbconnection.php");

    //read database and get all users;
    $users_list = find_all_users();
    while($row = mysql_fetch_array($users_list))
    {
        echo $row['display_name'] . "||" . $row['photo_url'] . "||" . $row['seat_id'];
        echo "<br />";
    }

//get a user display name, photoURL, profileURL, and SEAT!!

//Draw these things



?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Classroom 2.0</title>
    <meta name="description" content="Who's Who in this Classroom 2.0">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/classroom.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/zocial.css" />
    <link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<div class="container">
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
        your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a>
        to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="hero-unit">
        <h1>Who's Who in this Classroom 2.0</h1>
        <hr>

        <p class="lead">Identify yourself and let people know you in the classroom!</p>
    </div>

    <div class="row">
        <div id="class-box" class="span10 offset1">
            <div id="class-front">
                <div class="row">
                    <div id="class-platform" class="span4 offset3 btn-danger"></div>
                </div>
            </div>
            <div id="class-area">
                <div class="class-row class-hcenter">
                    <div class="row">
                        <div class="span1">
                            <div id="s0" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s1" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s2" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span2">
                            <div class="class-gap">
                                <img class="svg-stair" src="img/stair.svg"/>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s3" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s4" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s5" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class-row class-hcenter">
                    <div class="row">
                        <div class="span1">
                            <div id="s6" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s7" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s8" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span2">
                            <div class="class-gap">
                                <img class="svg-stair" src="img/stair.svg"/>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s9" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s10" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s11" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class-row class-hcenter">
                    <div class="row">
                        <div class="span1">
                            <div id="s12" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s13" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s14" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span2">
                            <div class="class-gap">
                                <img class="svg-stair" src="img/stair.svg"/>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s15" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s16" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="span1">
                            <div id="s17" class="class-seat">
                                <a href="#myModal-form" data-toggle="modal">
                                    <img class="svg-seat" src="img/seat.svg"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="myModal-form" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 id="myModalLabel">Taking this Seat?</h3>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="span 2">
                <a data-provider="facebook" href="login.php?provider=facebook" class="zocial facebook">Take it with Facebook</a>
            </div>
            <div class="span 2">
                <a data-provider="twitter" href="login.php?provider=twitter" class="zocial twitter">Take it with Twitter</a>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Maybe Later</button>
    </div>
</div>


<script src="js/vendor/jquery-1.8.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!--&lt;!&ndash;Google Analytics: change UA-XXXXX-X to be your site's ID. &ndash;&gt;-->
<!--<script>-->
<!--var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];-->
<!--(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];-->
<!--g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';-->
<!--s.parentNode.insertBefore(g,s)}(document,'script'));-->
<!--</script>-->

</body>
</html>
