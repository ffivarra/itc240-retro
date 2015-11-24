<?php

function randomize ($arr)
{
	if(is_array($arr))
	{
		return $arr[mt_rand(0, count($arr) - 1)];
	}else{
		return $arr;
	}
}

?>

<html>
<head>
</head>
<body>
<h3>Random Superhero</h3>
<p>
<?php
$heros[] = '<img src="images/coulson.png" />';
$heros[] = '<img src="images/fury.png" />';
$heros[] = '<img src="images/hulk.png" />';
$heros[] = '<img src="images/thor.png" />';
$heros[] = '<img src="images/black-widow.png" />';
$heros[] = '<img src="images/captain-america.png" />';
$heros[] = '<img src="images/machine.png" />';
$heros[] = '<img src="images/iron-man.png" />';
$heros[] = '<img src="images/loki.png" />';
$heros[] = '<img src="images/giant.png" />';
$heros[] = '<img src="images/hawkeye.png" />';
echo randomize($heros);
?>
</p>
</body>
</html>