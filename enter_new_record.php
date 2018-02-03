<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title> Submit your travel recommendations </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/added_styles.css">
</head>

<div class="container" id="container">
<div class="row">
  <div class="col-md-12">
<body>
<h1>Submit your travel recommendations</h1>

<div id="travel" class="form-group">

<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="travelform" method="post" autocomplete="off">

 <div class="form-check">
  <label class="form-check-label" for="country">Country </label>
	<input class="form-check-input" type="text" name="country" id="country" maxlength="25" required>
</div>

 <div class="form-check">
  <label class="form-check-label" for="city">City </label>
	<input class="form-check-input" type="text" name="city" id="city" maxlength="25" required>
</div>

 <div class="form-check">
  <label class="form-check-label" for="stay">Room </label>
	<input class="form-check-input" type="text" name="stay" id="stay" maxlength="140" required>
</div>

 <div class="form-check">
  <label class="form-check-label" for="eat">Board </label>
	<input class="form-check-input" type="text" name="eat" id="eat" maxlength="140" required>
</div>

 <div class="form-check">
  <label class="form-check-label" for="do">Activites </label>
  <input class="form-check-input" type="text" name="do" id="do" maxlength="140" required>
</div>

	<input type="submit" id="submit" value="Submit">
</form>
<!-- close the form -->
  <p class="middle"><a href="travel_update.php">Back to recommendations</a></p>
</div>

<div id="response">
    <p class="announce">Thanks for submitting the form!</p>
    <p class="middle"><a href="travel_update.php">Back to recommendations</a></p>
</div>
</div>
</div>
</div> <!-- close container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
<script src="js/enter.js"></script>
</body>
</html>
