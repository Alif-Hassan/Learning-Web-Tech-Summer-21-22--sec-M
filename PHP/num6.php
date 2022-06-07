<?php
$array=[10,20,30,40,50,60,70,80];
$num = 40;
echo $num."<br>";

foreach ($array as $value) 

{
if($num == $value)
{
	echo "element found"."<br>";
}
else
{
	echo "element not found"."<br>";
}
}


?>

