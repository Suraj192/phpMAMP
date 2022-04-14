<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">


    <?php

		/*  Step 1: Use the Make a class called Dog
    Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color
    Step 4: Make a method named ShowAll that echos all the properties
    */ 
    class Dog {
      public $eye;
      public $colors;
      public $nose;
      public $fur_color;

      function __construct($eye)
      {
        $this -> eye =  $eye;
      }

      function set_properties($colors, $nose, $fur_color) {
        $this -> colors = $colors;
        $this -> nose = $nose;
        $this -> fur_color = $fur_color;
      }

      function showAll() {
        $arr = ["Eyes"=> $this->eye,
        "Colors"=> $this -> colors,
        "Nose"=> $this -> nose,
        "FurColor"=> $this -> fur_color,
      ];
      foreach($arr as $keys=>$value) {
        echo "{$keys}: {$value}"."<br>";
      }
      }

    }
    
    /*

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	

		
	*/


  $mydog = new Dog("blue");
  $mydog -> set_properties("Brown", "Black", "White");
  var_dump($mydog->showAll()) ;

		?>





  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>