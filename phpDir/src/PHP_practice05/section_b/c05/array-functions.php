<?php
// Write PHP code here
//Write PHP Code to create array of greetings then get random value, find array of best sellers, count items and list top items, create an array holding customer details. Finally, show the top 3 best sellers items in website. 

$greetings = ["Welcome", "Hello", "Hei", "Namaste", "Moi", "Nihau"];
$greeting_rand = array_rand($greetings);
$greeting = $greetings[$greeting_rand];

$best_seller = ["Luhta", "K-city Market", "Lidl", "S-Market", "R-kioski", "London-dreams"];

$best_seller_count = count($best_seller);
$best_seller_text = implode(", ", $best_seller);

$customer = ["firstname" => 'James', "lastname" => "Bond", 'email' => 'jamesbond@007.com'];

if(array_key_exists('firstname', $customer)) {
    $greeting .= " ".$customer['firstname'];
}



?>
<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>

<?php 
//Write code here
echo $greeting; ?>
<p>Out Top</p>
<?php
echo $best_seller_count. "<br>". "Items for today are:". "<br>";
echo $best_seller_text
?>
<?php include 'includes/footer.php'; ?>