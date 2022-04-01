<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
if(1>3){
	echo "There it is";
} elseif (2>4) {echo "I hate php";}
 else { echo "I love php <br>";};

 for($i=0; $i<=10; $i++) {
	 echo "$i <br>";
 }

 $colorss = "Blue";
 switch ($colorss) {
	case "red":
		echo "This is red";
		break;
	case "lightblue";
		echo "this is light blue";
		break;
	case "Blue";
		echo "This is blue";
		break;
	case "yellow";
		echo "This is yellow";
		break;
 }


	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>