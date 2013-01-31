<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Exercise</title>
</head>
<body>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
?>

<?php
	function age($birthdate) {
		return (strtotime('now') - strtotime($birthdate))/(60*60*24*365);
	}

	$age = age($_POST['birthdate']);

	if($age > 21) {
?>
    	<h2 style="color: green">You're <?php echo intval($age) ?>. Yay! You can drink.</h2>
        <img src="" width="100" height="100" />
<?php
	} else {
?>
    	<h2 style="color: red">Too young. You're <?php echo intval($age) ?>, you can't drink</h2>
        <img src="" width="100" height="100" />
<?php
	}
	} else {
?>
		<h3>Please Enter Your Birthdate:</h3>
        <form action="" method="post">
        <input name="birthdate" type="text">
        <input name="" type="submit">
        </form>
<?php
	}
?>

</body>
</html>