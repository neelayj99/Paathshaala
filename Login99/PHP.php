<?PHP
$password = "@Password99";
$hash_password = escapeshellcmd("PY.py $password");
$hashed_output = shell_exec($hash_password);
if('2aa20ed268015dbfcbabc3a6b75b0778'=='$hashed_output'){
	echo "Hello";
}
echo gettype($hashed_output);
echo gettype('2aa20ed268015dbfcbabc3a6b75b0778');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Try Script</title>
</head>
<body>
	<h1><?php echo $hashed_output; ?></h1>
</body>
</html>