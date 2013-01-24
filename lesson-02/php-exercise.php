<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Exercise</title>
</head>

<body>

<?php
echo age('1990-05-06');

function age($birthdate) {
	return (strtotime('now') - strtotime($birthdate))/(60*60*24*365);
}

$age = age('1990-05-06');

if($age > 21) {
	?>
    <h2 style="color: green">You're 21, yay!</h2>
    <?php
} else {
    ?>
    <h2 style="color: red">Nope you can't drink</h2>
    <?php
}
?>

</body>
</html>