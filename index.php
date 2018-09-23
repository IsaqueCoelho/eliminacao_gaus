<!DOCTYPE html>
  <html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <!--<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>

        <div class="headBackgroud"></div>

        <div class="container-fluid positionBox">
            <!-- Page Content goes here -->
            <div class="row">
                <div class="col m1 l2"></div>
                <div class="col s12 m10 l8">
                    <div class="box">
                        <div class="row">
                            <nav>
                                <div class="nav-wrapper">
                                    <a href="#!" class="brand-logo">Programação Linear</a>
                                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                                    <ul class="right hide-on-med-and-down">
                                        <li><a href="index.php?pag=2x2" <?php if(@$_GET['pag'] == "2x2"){}?>>2x2</a></li>
                                        <li><a href="index.php?pag=3x3" <?php if(@$_GET['pag'] == "3x3"){}?>>3x3</a></li>
                                        <li><a href="index.php?pag=4x4" <?php if(@$_GET['pag'] == "4x4"){}?>>4x4</a></li>
                                        <li><a href="index.php?pag=5x5" <?php if(@$_GET['pag'] == "5x5"){}?>>5x5</a></li>
                                        <li><a href="index.php?pag=6x6" <?php if(@$_GET['pag'] == "6x6"){}?>>6x6</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <ul class="sidenav" id="mobile-demo">
                                <li><a href="index.php?pag=2x2" <?php if(@$_GET['pag'] == "2x2"){}?>>2x2</a></li>
                                <li><a href="index.php?pag=3x3" <?php if(@$_GET['pag'] == "3x3"){}?>>3x3</a></li>
                                <li><a href="index.php?pag=4x4" <?php if(@$_GET['pag'] == "4x4"){}?>>4x4</a></li>
                                <li><a href="index.php?pag=5x5" <?php if(@$_GET['pag'] == "5x5"){}?>>5x5</a></li>
                                <li><a href="index.php?pag=6x6" <?php if(@$_GET['pag'] == "6x6"){}?>>6x6</a></li>
                            </ul>                            
                        </div>
                        <div class="row contentBox">
                            <div class="container-fluid center">
                                <?php
                                    if(!isset($_GET['pag'])){

                                        include("pages/2x2.php");
                                    } 
                                    else{
                                        
                                        include("pages/".$_GET['pag'].".php");
                                    }
                                ?>
                            </div>
                        </div>                      
                    </div>
                </div>
                <div class="col m1 l2"></div>                
            </div>            
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/style.js"></script>
    </body>
  </html>