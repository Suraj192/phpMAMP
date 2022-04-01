<?php
// Write your code here
//Write PHP Code to create array of items being ordered, add an item to start of array, remove the last item from array, convert to string and loop through keys and values of the associative array.
$ordered_items = ["notebook", "pencil", "eraser"];
array_unshift($ordered_items, "stapler");
array_pop($ordered_items);
$string_arr = implode(" ", $ordered_items);

?>
<?php include 'includes/header.php'; ?>

<h1>Order</h1>

// Write your code here
<?php print_r($ordered_items)."<br>";?>
<?= "<br>".$string_arr?>

<?php include 'includes/footer.php'; ?>