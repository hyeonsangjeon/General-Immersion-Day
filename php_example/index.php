<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to the AWS IMD</title>
    <link href="style.css" media="all" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <div id="wrapper">

      <?php include('menu.php'); ?>

      <?php include("get-index-meta-data.php"); ?>

      <hr />

      <?php include('get-cpu-load.php'); ?>

    </div>
  </body>
</html>
