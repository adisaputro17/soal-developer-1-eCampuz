<!DOCTYPE html>
<html>
<body>

<?php

$aplikasi[1] = "gtAkademik";
$aplikasi[2] = "gtFinansi";
$aplikasi[3] = "gtPerizinan";
$aplikasi[4] = "eCampuz";
$aplikasi[5] = "eOviz";

$i = 1;

while($i<=count($aplikasi)){
	echo $aplikasi[$i];
    echo "<br>";
    $i+=1;
}

?>

</body>
</html>
