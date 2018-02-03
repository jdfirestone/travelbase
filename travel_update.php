<?php
	include 'database.php';
	$query = "SELECT * FROM travel ORDER BY country";
	$travel = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Travel Recommendations </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/added_styles.css">
</head>

<div class="container" id="container">
<div class="row">
	<div class="col-md-12">

<body>


<h1>Travel Recommendations</h1>

<div class="table-responsive">
<table class="table table-striped table-hover">


	<tr>
<th scope="col">Country</th>
<th scope="col">City</th>
<th scope="col">Where to stay</th>
<th scope="col">Where to eat</th>
<th scope="col">What to do</th>
</tr>


<?php while ($row = mysqli_fetch_assoc($travel)) :  ?>
<tr>
  <td scope="col"><?php echo stripslashes($row['country']); ?></td>
  <td scope="col"><?php echo $row['city']; ?></td>
  <td scope="col"><?php echo $row['stay']; ?></td>
  <td scope="col"><?php echo $row['eat']; ?></td>
  <td scope="col"><?php echo $row['do']; ?></td>
</tr>


<?php endwhile;  ?>

</table>

<p class="middle"><a href="enter_new_record.php">Submit your own travel recommendation here</a></p>
</div>
</div>
</div>
</body>
</html>
