<!DOCTYPE HTML>

<?php
  $instagram_url = 'https://'.
    'api.instagram.com/v1/tags/lovegap/media/recent' .    
    '?client_id=5dc735ae46ca4947a3fa9a411ef54066'; //replace "CLIENT-ID"
  
  echo $instagram_url;
  $instagram_json = file_get_contents($instagram_url);
  $instagram_array = json_decode($instagram_json, true);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>InstaCrawler</title>
  </head>
  <body>
  <form action="/testscraper.php" method="get">
    <input type="text" name="location"/>
    <button type="submit">Submit</button>
  </form>
    <br/>
    <?php
	$db_connection = mysql_connect("localhost", "root", "password");
	   if(!$db_connection) { echo " Could not connect \n";}
  		        mysql_select_db("contest", $db_connection);
    if(!empty($instagram_array)){
      foreach($instagram_array['data'] as $key=>$image){
      $link = $image['link'];
      $likes = $image['likes']['count'];
      echo "$link has $likes likes\n";
      $query = "INSERT INTO leaderboard (url, likes) VALUES (\"$link\", $likes);";
      echo "QUERY: $query\n";
        mysql_query($query, $db_connection);
        echo '<img src="'.$image['images']['low_resolution']['url'].'" alt=""/><br/>';
      }
    }
    mysql_close($db_connection)
    ?>
  </body>
</html>
