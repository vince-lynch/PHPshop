<?php
require('access.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<span>You are currently logged in, to logout <a href="/Admin/logout.php"> click here </a></span>
<?php
$basedir = realpath(__DIR__);
print $_GET["id"];

include('../includes/resources/cats-controller.php');
$catArray = ShowCat($_GET["id"]);
?>

<h1>Cats Name: <?php print $catArray[1]; ?></h1>
<img src="http://kittenwars.s3.amazonaws.com/<?php print $catArray[2]; ?>" width="400px" />
<p>
<strong>Cat Id: </strong><?php print $catArray[0]; ?><br/>
<strong>Score: </strong><?php print $catArray[3]; ?>
</p>


</body>
</html> 