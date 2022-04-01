<?php
/* Write your code here */

?>
<!DOCTYPE html>
<html>

<head>
  <title>if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<h1>The Candy Store</h1>
<form method="get" action="">
<input type="text" name="value">
<button type="submit">Write you name</button>
</form>
<?php
/* Write your code here */
$names = $_GET['value'];
if($names) {
  echo "Welcome To our candy store $names. <br>";
} else {
  echo "Welcome";
};

function writeMsg() {
  echo "Hello php";
}

writeMsg();

?>
</body>

</html>