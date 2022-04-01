<?php

$nutrition = ["fat"=> 28, "sugar"=> 20, "salt"=>10];
/* 
  Write you php code here

   */
?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
<li><?= array_keys($nutrition)[0]," : ",$nutrition["fat"]?></li>
<li><?= array_keys($nutrition)[1]," : ",$nutrition["sugar"]?></li>
<li><?= array_keys($nutrition)[1]," : ",$nutrition["salt"]?></li>
<li><?php print_r($nutrition)?></li>
</body>

</html>