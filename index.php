<!DOCTYPE html>
<html>
  <head>
    
    <!-- Metadata for this site -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of Right Triangular Pyramid">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Joseph Kwon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <!-- Favicon for this site -->
    <link rel="apple-touch-icon.png" sizes="180x180" href="./fav_index/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <title>Volume of Right Triangular Pyramid</title>
    
  </head>
  <body>
    
    <link rel="stylesheet" href="./css/style.css">
   <script src="./js/script.js"></script>

    <?php echo "<h1>Volume of Right Triangular Pyramid</h1>" ?>

    <!-- Text fields for user input, collects data -->
  <form action="./welcome.php" method="post" target="result">
      <label for="side-a">Side a (m):</label>
      <input type="text" id="side-a" placeholder="Enter side a (m)" name="side-a"><br><br>
    <!-- having "text" as type works for decimals but numbers do not -->
     <label for="side-b">Side b (m):</label>
      <input type="text" id="side-b" placeholder="Enter side b (m)" name="side-b"><br><br>

     <label for="height">Height (m):</label>
      <input type="text" id="height" placeholder="Enter height (m)" name="height"><br><br>
      <input type="submit" value="Calculate Volume">
			<br><br>	
    </form>
    
<div id="result"></div>
    <center>
      <iframe id="result" name="result">
      </iframe>
    </center>
    
  </body>
</html>