<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GAP Year End Fashion Vote</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/1-col-portfolio.css" rel="stylesheet">


  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Home</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
        </div>

      </div>

    </nav>

<br>
<br>
    <div class="container">


      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Gap_logo.svg/140px-Gap_logo.svg.png"> Year End Vote
            
          </h1>
        </div>
      </div>



      <div class="row">
        <div class="col-md-7">
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
	       ?>
	  </div>    
	</div>
	<div class="col-md-5">
	  <h3>Project One</h3>
          <h4>Subheading</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <a class="btn btn-primary" href="#">Vote <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
<br>

      <hr>


      <div class="row">
        <div class="col-md-7">
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
				 ?>
               </div>
        </div>
        <div class="col-md-5">
          <h3>Project Two</h3>
          <h4>Subheading</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
          <a class="btn btn-primary" href="#">Vote <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Three -->
      <div class="row">
        <div class="col-md-7">
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
				 ?>
	       </div>
        </div>
        <div class="col-md-5">
          <h3>Project Three</h3>
          <h4>Subheading</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
          <a class="btn btn-primary" href="#">Vote <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Four -->
      <div class="row">

        <div class="col-md-7">
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
				 ?>
               </div>
	</div>
        <div class="col-md-5">
          <h3>Project Four</h3>
          <h4>Subheading</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
          <a class="btn btn-primary" href="#">Vote <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Five -->
      <div class="row">
        <div class="col-md-7">
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
				 ?>
               </div>
	</div>
	<div class="col-md-5">
          <h3>Project Five</h3>
          <h4>Subheading</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident ex quisquam hic odio repellendus atque porro distinctio quae id laboriosam facilis dolorum.</p>
          <a class="btn btn-primary" href="#">Vote <span class="glyphicon glyphicon-chevron-right"></span></a>
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
            <p>Copyright &copy; Your Website 2014</p>
          </div>
	</div>
	<!-- /.row -->
      </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- <\!-- Bootstrap Core JavaScript -\-> -->
    <script src="js/bootstrap.min.js"></script>

  </body>

</html>
