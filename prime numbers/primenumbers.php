

<?php
function pnum($num)
 {
  $n = 0;

    for($i = 2; $i < ($num/3); $i++) {
        if($num % $i == 0){
        $n++;
        break;
        }
    }

    if ($n == 0){
        echo $num." ";
    } 
}

$a= 0;
$N = 500;
echo "Prime numbers between ".$a." and ".$N." are: \n";
for($i = $a; $i < $N + 1; $i++) {
    pnum($i);
}
?>

