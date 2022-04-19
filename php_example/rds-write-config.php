<!DOCTYPE html>
<html>
  <head>
    <title>AWS Tech Fundamentals Bootcamp</title>
    <link href="style.css" media="all" rel="stylesheet" type="text/css" />
    <meta http-equiv="refresh" content="10,URL=/rds.php" />
  </head>

  <body>
    <div id="wrapper">

      <?php include('menu.php'); ?>

      <?php 
        include 'rds.conf.php';

	$ep = $RDS_URL;
	$ep = str_replace(":3306", "", $ep);
	$db = $RDS_DB;
	$un = $RDS_user;
	$pw = $RDS_pwd;

        $mysql_command = "mysql -u $un -p$pw -h $ep $db < sql/addressbook.sql";

        $connect = mysqli_connect($ep, $un, $pw);
        if(!$connect) {

          echo "<br /><p>Unable to Establish Connection:<i>" . mysqli_connect_error() .  "</i></p>";

        } else {

          $dbconnect = mysqli_select_db($connect, $db);
          if(!$dbconnect) {

            echo "<br /><p>Unable to Connect to DB:<i>" . mysqli_error($connect) .  "</i></p>";

          } else {

	    echo "<br /><p>Executing sql/addressbook.sql for database called ".$db;
            echo exec($mysql_command);
          }

        }
        mysqli_close($connect);

        echo "<br /><br /><p><i>Redirecting to rds.php in 10 seconds (or click <a href=rds.php>here</a>)</i></p>";


      ?>

    </div>
  </body>
</html>
