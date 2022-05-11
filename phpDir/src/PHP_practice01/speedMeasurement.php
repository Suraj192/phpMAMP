<?php include 'db.php'; 
$query = "SELECT * FROM Users";
$result = mysqli_query($connection, $query);

if(!$result) {
    die('Query selection failed');
}?>
<style>
    <?php include 'style.css'?>
</style>

<html>
<body>
<div id='main'>   
    <h2>Speed Conversion</h1>
    <form action="speedmeasuremet.php" method="post">
        <div>
            <label for="kmhr">Km/hr</label>
            <input type="number" id="kmhr" name="kmhr" placeholder="Input Value here" step="any" min=0>
        </div>
        <div>
            <label for="ms">m/s</label>
            <input type="number" id="ms" name="ms" placeholder="Input Value here" step="any" min=0>
        </div>
        <div>
        <label for="knots">knots</label>
        <input type="number" id="knots" name="knots" placeholder="Input Value here" step="any" min=0> 
        </div>
        <div>
            <input type="submit" name="submit" id="submit" value="Calculate">
        </div>

    </form>

    <?php
    error_reporting(0);
    $kmhr = $_POST['kmhr'];
    $ms = $_POST['ms'];
    $knots = $_POST['knots'];

    if(isset($kmhr)) { ?>
        <p> <?php echo round($kmhr*(10/36),2)." m/s<br>";
        echo round($kmhr[0]/1.852, 2)." knots<br>";?>
    </p> <?php
    } elseif (isset($ms)) { ?>
        <p> <?php echo round($ms*(36/10),2)." Km/hr<br>";
        echo round($ms*1.94384, 2)." knots<br>"?></p> <?php
    } elseif(isset($knots)) { ?>
        <p> <?php echo round($knots*1.852,2)." Km/hr<br>";
        echo round($knots/1.94384, 2)." m/s<br>"?></p> <?php
    }
    else { ?>
       <p> <?= 'Please input the value';?> </p>
   <?php } 
   
   ?>
   
</div> 
</body>

</html>