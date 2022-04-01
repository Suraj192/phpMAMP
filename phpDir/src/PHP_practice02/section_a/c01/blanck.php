<?php
$times = date('H');
if ($times < 10) {
    echo "Have a good morning";
} elseif($times < 20) {
    echo "Have a good day";
} 
else {
    echo "Have a good night";
}
?>

<?php
$result = (3>5) ? "Hello" : "bye";
echo "<br> $result <br/>";

?>

<?php
$num = 1;
while($num<5){ 
    echo "The number is: $num <br>";
    $num++;
}

for($num = 0; $num <=10; $num++) {
    echo "The number is : $num <br>";
}
?>