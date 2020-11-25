<html>
<head>
<title>States</title>
</head>
<body>
<?php 
function end($string, $endString) 
{ 
	$len = strlen($endString); 
	if ($len == 0) { 
		return true; 
	} 
	return (substr($string, -$len) === $endString); 
} 
$states="Mississippi Alabama Texas Massachusetts Kansa";
$states=explode(" ",$states);
$statesArray=array();
  foreach($states as $s)
  {
if(end("$s","xas")) 
	array_push($statesArray,$s); 
  }
echo $statesArray[0];
?> 
</body>
</html>