<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Shop home page for Balag-Threads</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/shop-homepage.css" rel="stylesheet">

        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">



    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#home">BalagThreads</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#about">Spring Sells</a></li>
                        <li><a href="#contact"></a></li>
                        <li><a href="#contact">Pasmina</a></li>
                        <li><a href="#contact">Accessories</a></li>

                    </ul>
                    <div class="social_icons">
                        <ul class="nav navbar-nav">
                            <li> <a href="https://twitter.com/YOUR_USER_NAME"><i class="fa fa-twitter"></i></a> </li>
                            <li> <a href="http://www.linkedin.com/in/YOUR_DISPLAY_NAME"><i class="fa fa-linkedin"></i></a> </li>
                            <li><a href="http://www.facebook.com/YOUR_FB_IDENTIFIER"><i class="fa fa-facebook"></i></a> </li>
                            <li><a><form action="/search" method="GET" name="search">
                                        <input type="text" name="search"  maxlength="40" id="search" placeholder="search">
                                        <button type="submit">
                                            <i class="glyphicon glyphicon-search" title="Search"></i>
                                        </button>
                                    </form>
                                </a></li>

                            <li class="dropdown">
                                <a data-toggle="dropdwon" class="dropdown-toggle" href="#contact">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                    <b class="caret"></b>
                                </a>
                                <div class="dropdown-menu">
                                    <form class="form" id="token">
                                        
                                    </form>
                                </div>

                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <b class="caret"></b>
                                </a>

                                <div class="dropdown-menu" style="padding:17px;">
                                    <form id="formLogin" class="form">
                                        <label><a href="#">Invite friends </a></label>
                                        <label> <a href="logIn.php">Login</a> </label><br>
                                        <label><a href="#">Sign Up </a></label>

                                    </form>
                                </div>
                            </li>                              


                            </li>


                        </ul>
                    </div>
                </div>
            </div>

            <!-- /.navbar-collapse -->

        </nav>

