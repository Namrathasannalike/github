<?php
$trans = array(
array(1,2,9),
array(3,4,9),
array(5,6,9));


$trans1 = array(
array(11,12,19),
array(13,14,19),
array(15,16,19));

echo "<h2> matrix </h2>";
for($row=0;$row<3;$row++){
echo "<br>";

for($col=0;$col<3;$col++){
echo " ".$trans[$row][$col];
}
}


echo "<h2> matrix </h2>";
for($row=0;$row<3;$row++){
echo "<br>";

for($col=0;$col<3;$col++){
echo " ".$trans1[$row][$col];
}
}



for($row=0;$row<3;$row++){


for($col=0;$col<3;$col++){
$result[$row][$col]=$trans[$row][$col]+$trans1[$row][$col];
}
}


echo "<h2> addition of 2 matrices </h2>";
for($row=0;$row<3;$row++){
echo "<br>";

for($col=0;$col<3;$col++){
echo " ".$result[$row][$col];
}
}

?>


