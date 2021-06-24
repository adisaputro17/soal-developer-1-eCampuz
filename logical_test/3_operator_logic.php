<!DOCTYPE html>
<html>
<body>

<?php

function pembagian(int $bil1, int $bil2) {

	$i = 0;
    
    while($bil1 >= $bil2){
    	$bil1 -= $bil2;
        $i+=1;
    }
  return $i;
}

echo '7 : 2 = ' . pembagian(7,2) . '<br>';
echo '8 : 4 = ' . pembagian(8,4) . '<br>';

?>

</body>
</html>
