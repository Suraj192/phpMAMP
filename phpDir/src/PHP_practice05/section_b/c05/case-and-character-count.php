<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>

  <?php
  $varss = "The World is Full of beauty. ";

  echo strtoupper($varss)."<br>";
  echo strtolower($varss)."<br>";
  echo strrpos($varss, "F")."<br>";
  echo strlen($varss)."<br>";
  print_r(str_split($varss, 6));
  ?>
</p>

<?php include 'includes/footer.php'; ?>