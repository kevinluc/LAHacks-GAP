<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Employee Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="cali.php">California</a>
                    </li>
                    <li>
                        <a href="ariz.php">Arizona</a>
                    </li>
                    <li>
                        <a href="oreg.php">Oregon</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Gap_logo.svg/140px-Gap_logo.svg.png"> California Monthly
                    
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                 <style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
	    <?php 
	       $db_connection = mysql_connect("localhost", "root", "password");
	       if(!$db_connection) { echo " Could not connect \n";}
	       mysql_select_db("contest", $db_connection);
	       $results = mysql_query("SELECT url FROM leaderboard order by likes desc", $db_connection);
	       if ($results) {

				 $row = mysql_fetch_row($results);

				 echo "<iframe src='"."$row[0]"."embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe>";
				 }
				 mysql_close($db_connection); 
				 //echo "http://instagram.com/p/dnQi4EGuZx/embed/";
				 ?>
</div><a class="btn btn-primary" href="#">Select <span class="glyphicon glyphicon-chevron-right"></span></a>       <!--this is the id^^^ needs php to echo-->
            </div>
            <div class="col-md-3 portfolio-item">
                <style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
<?php 
	       $db_connection = mysql_connect("localhost", "root", "password");
	       if(!$db_connection) { echo " Could not connect \n";}
	       mysql_select_db("contest", $db_connection);
	       $results = mysql_query("SELECT url FROM leaderboard order by likes desc", $db_connection);
	       if ($results) {
               for ($x = 0; $x < 2; $x++)
				 $row = mysql_fetch_row($results);

				 echo "<iframe src='"."$row[0]"."embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe>";
				 }
				 mysql_close($db_connection); 
				 //echo "http://instagram.com/p/dnQi4EGuZx/embed/";
				 ?></div><a class="btn btn-primary" href="#">Select <span class="glyphicon glyphicon-chevron-right"></span></a>        <!--this is the id^^^ needs php to echo-->
            </div>
            <div class="col-md-3 portfolio-item">
                <style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
<?php 
	       $db_connection = mysql_connect("localhost", "root", "password");
	       if(!$db_connection) { echo " Could not connect \n";}
	       mysql_select_db("contest", $db_connection);
	       $results = mysql_query("SELECT url FROM leaderboard order by likes desc", $db_connection);
	       if ($results) {
               for ($x = 0; $x < 3; $x++)
				 $row = mysql_fetch_row($results);

				 echo "<iframe src='"."$row[0]"."embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe>";
				 }
				 mysql_close($db_connection); 
				 //echo "http://instagram.com/p/dnQi4EGuZx/embed/";
				 ?></div><a class="btn btn-primary" href="#">Select <span class="glyphicon glyphicon-chevron-right"></span></a>        <!--this is the id^^^ needs php to echo-->
            </div>
            <div class="col-md-3 portfolio-item">
                <style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
<?php 
	       $db_connection = mysql_connect("localhost", "root", "password");
	       if(!$db_connection) { echo " Could not connect \n";}
	       mysql_select_db("contest", $db_connection);
	       $results = mysql_query("SELECT url FROM leaderboard order by likes desc", $db_connection);
	       if ($results) {
               for ($x = 0; $x < 4; $x++)
				 $row = mysql_fetch_row($results);

				 echo "<iframe src='"."$row[0]"."embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe>";
				 }
				 mysql_close($db_connection); 
				 //echo "http://instagram.com/p/dnQi4EGuZx/embed/";
				 ?></div><a class="btn btn-primary" href="#">Select <span class="glyphicon glyphicon-chevron-right"></span></a>       <!--this is the id^^^ needs php to echo-->
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
<?php 
	       $db_connection = mysql_connect("localhost", "root", "password");
	       if(!$db_connection) { echo " Could not connect \n";}
	       mysql_select_db("contest", $db_connection);
	       $results = mysql_query("SELECT url FROM leaderboard order by likes desc", $db_connection);
	       if ($results) {
               for ($x = 0; $x < 5; $x++)
				 $row = mysql_fetch_row($results);

				 echo "<iframe src='"."$row[0]"."embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe>";
				 }
				 mysql_close($db_connection); 
				 //echo "http://instagram.com/p/dnQi4EGuZx/embed/";
				 ?></div><a class="btn btn-primary" href="#">Select <span class="glyphicon glyphicon-chevron-right"></span></a>      <!--this is the id^^^ needs php to echo-->
            </div>
            <div class="col-md-3 portfolio-item">
                <style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><?php 
	       $db_connection = mysql_connect("localhost", "root", "password");
	       if(!$db_connection) { echo " Could not connect \n";}
	       mysql_select_db("contest", $db_connection);
	       $results = mysql_query("SELECT url FROM leaderboard order by likes desc", $db_connection);
	       if ($results) {
               for ($x = 0; $x < 6; $x++)
				 $row = mysql_fetch_row($results);

				 echo "<iframe src='"."$row[0]"."embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe>";
				 }
				 mysql_close($db_connection); 
				 //echo "http://instagram.com/p/dnQi4EGuZx/embed/";
				 ?></div><a class="btn btn-primary" href="#">Select <span class="glyphicon glyphicon-chevron-right"></span></a>        <!--this is the id^^^ needs php to echo-->
            </div>
            <div class="col-md-3 portfolio-item">
                <style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
<?php 
	       $db_connection = mysql_connect("localhost", "root", "password");
	       if(!$db_connection) { echo " Could not connect \n";}
	       mysql_select_db("contest", $db_connection);
	       $results = mysql_query("SELECT url FROM leaderboard order by likes desc", $db_connection);
	       if ($results) {
               for ($x = 0; $x < 7; $x++)
				 $row = mysql_fetch_row($results);

				 echo "<iframe src='"."$row[0]"."embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe>";
				 }
				 mysql_close($db_connection); 
				 //echo "http://instagram.com/p/dnQi4EGuZx/embed/";
				 ?></div><a class="btn btn-primary" href="#">Select <span class="glyphicon glyphicon-chevron-right"></span></a>        <!--this is the id^^^ needs php to echo-->
            </div>
            <div class="col-md-3 portfolio-item">
                <style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
<?php 
	       $db_connection = mysql_connect("localhost", "root", "password");
	       if(!$db_connection) { echo " Could not connect \n";}
	       mysql_select_db("contest", $db_connection);
	       $results = mysql_query("SELECT url FROM leaderboard order by likes desc", $db_connection);
	       if ($results) {
               for ($x = 0; $x < 8; $x++)
				 $row = mysql_fetch_row($results);

				 echo "<iframe src='"."$row[0]"."embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe>";
				 }
				 mysql_close($db_connection); 
				 //echo "http://instagram.com/p/dnQi4EGuZx/embed/";
				 ?></div><a class="btn btn-primary" href="#">Select <span class="glyphicon glyphicon-chevron-right"></span></a>        <!--this is the id^^^ needs php to echo-->
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
<?php 
	       $db_connection = mysql_connect("localhost", "root", "password");
	       if(!$db_connection) { echo " Could not connect \n";}
	       mysql_select_db("contest", $db_connection);
	       $results = mysql_query("SELECT url FROM leaderboard order by likes desc", $db_connection);
	       if ($results) {
               for ($x = 0; $x < 9; $x++)
				 $row = mysql_fetch_row($results);

				 echo "<iframe src='"."$row[0]"."embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe>";
				 }
				 mysql_close($db_connection); 
				 //echo "http://instagram.com/p/dnQi4EGuZx/embed/";
				 ?></div><a class="btn btn-primary" href="#">Select <span class="glyphicon glyphicon-chevron-right"></span></a>        <!--this is the id^^^ needs php to echo-->
            </div>
            <div class="col-md-3 portfolio-item">
                <style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
<?php 
	       $db_connection = mysql_connect("localhost", "root", "password");
	       if(!$db_connection) { echo " Could not connect \n";}
	       mysql_select_db("contest", $db_connection);
	       $results = mysql_query("SELECT url FROM leaderboard order by likes desc", $db_connection);
	       if ($results) {
               for ($x = 0; $x < 10; $x++)
				 $row = mysql_fetch_row($results);

				 echo "<iframe src='"."$row[0]"."embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe>";
				 }
				 mysql_close($db_connection); 
				 //echo "http://instagram.com/p/dnQi4EGuZx/embed/";
				 ?></div><a class="btn btn-primary" href="#">Select <span class="glyphicon glyphicon-chevron-right"></span></a>        <!--this is the id^^^ needs php to echo-->
            </div>
            <div class="col-md-3 portfolio-item">
                <style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
<?php 
	       $db_connection = mysql_connect("localhost", "root", "password");
	       if(!$db_connection) { echo " Could not connect \n";}
	       mysql_select_db("contest", $db_connection);
	       $results = mysql_query("SELECT url FROM leaderboard order by likes desc", $db_connection);
	       if ($results) {
               for ($x = 0; $x < 11; $x++)
				 $row = mysql_fetch_row($results);

				 echo "<iframe src='"."$row[0]"."embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe>";
				 }
				 mysql_close($db_connection); 
				 //echo "http://instagram.com/p/dnQi4EGuZx/embed/";
				 ?></div><a class="btn btn-primary" href="#">Select <span class="glyphicon glyphicon-chevron-right"></span></a>        <!--this is the id^^^ needs php to echo-->
            </div>
            <div class="col-md-3 portfolio-item">
                <style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
<iframe src='http://instagram.com/p/dnQi4EGuZx/embed/' frameborder='0' scrolling='yes' allowtransparency='true'></div><a class="btn btn-primary" href="#">Select <span class="glyphicon glyphicon-chevron-right"></span></a>        <!--this is the id^^^ needs php to echo-->
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p> Copyright GAP &copy; 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
