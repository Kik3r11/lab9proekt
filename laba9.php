<?php
if(isset($_POST['IP']))
{
	$fp = fopen("file.txt", "r");
	$a = fgets($fp);
	$regexp = '/\b((([1-9])|([1-9][0-9])|(1[0-9][0-9])|(2[0-5][0-5]))\.(\d|([1-9][0-9])|(1[0-9][0-9])|(2[0-5][0-5]))\.(\d|([1-9][0-9])|(1[0-9][0-9])|(2[0-5][0-5]))\.((2[0-5][0-5])|(1[0-9][0-9])|([1-9][0-9])|\d))\b/';
	preg_match($regexp, $a);
	preg_match_all($regexp, $a, $arr);
	foreach( $arr[0] as $symbol ) 
	{
		echo $symbol;
	}
	fclose($fp);
}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
    <input type="submit" value="Получить" name="IP">
</form>
</body>
</html>