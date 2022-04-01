<?php
$path = 'img/logo.png';
//Write PHP Code to show file informations of “logo.png” e.g. file name, size, MIME type and path

?>
<?php include 'includes/header.php'; ?>

// Write you PHP code here <br>
<?php if (file_exists($path)) { ?><b>Name:</b> <?= pathinfo($path, PATHINFO_BASENAME)?><br><b>Size:</b> <?=filesize($path) ?> bytes <br><b>MIME type:</b> <?=mime_content_type($path) ?><br><b>Folder: </b> <?=pathinfo($path, PATHINFO_DIRNAME) ?> <br><?php } else { ?><p>There is no such file.</p><?php } ?>

<?php include 'includes/footer.php'; ?>