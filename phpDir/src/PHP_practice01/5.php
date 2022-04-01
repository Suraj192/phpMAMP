<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
echo abs(-4.5). "<br>";
echo exp(3). "<br>";
echo floor(4.9). "<br>";
echo max([3,7,9,10]). "<br>";
echo sqrt(5.5). "<br>";
echo round(4.5). "<br>";
echo srand(8). "<br>";






	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>