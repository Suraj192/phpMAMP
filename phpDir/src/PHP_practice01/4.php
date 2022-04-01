<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

function add() {
	return 4+6;
};

echo add()."<br>";

 function calculation(float $a, float $b): float {
	 return $a + $b;
 }
echo calculation(1.4,3.9);


	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>