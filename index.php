<?php 

require_once('DB.php');

$db = new DB();
$data = $db->viewData();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="style.css">
<title> User details </title>
</head>
<body>
<h1> USER DETAILS</h1>

<form action="search.php" method="POST">
      <input type="text" name="firstname" placeholder="Enter First Name" id="searchBox" oninput= search(this.value) ><br>
      
	  </form>
	  <ul id="dataViewer">
	    <?php foreach($data as $i) { ?>
		
		<li><?php echo $i["FirstName"]; ?> </li>
		
		<?php } ?>
		</ul>
		
		<script src="main.js"></script>
		
</body>
</html>