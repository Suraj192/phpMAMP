<?php
/* Write PHP code here */
$cities = [
    'Helsinki' => '001 Koivonkotu Helsinki',
    'London' => '151 Oxford Street, 2021',
    'NYC' => '121 7th Street, 10232',
];
$city = $_GET['city'];
$address = $cities[$city];
?>

<?php foreach($cities as $key => $value) { ?>
    <a href="get-1.php?city=<?= $key ?>"><?= $key?>  </a> 
<?php }
?>

<h1> <?= $city?> </h1>



<?php include 'includes/header.php' ?>
<p><?= $address ?></p>

<?php include 'includes/footer.php' ?>