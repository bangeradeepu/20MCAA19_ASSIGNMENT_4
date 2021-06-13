<?php
$rand = '';
    $random = rand(1, 100);
    $rand = $random;
?>
<html>
<head><title>Random</title></head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
    <center>
<h2>Random Number Generated</h2>
<span style="font-size: 100px;"><?php echo $rand; ?></span>
<br>
<h2>And <b><?php echo $rand; ?><sup>2</sup></b> is
 <?php
    echo '<b>' . sqrt($random). '</b>';
?>
<br>
<br>
<button class="w3-button w3-red" onClick="window.location.reload();">Generate New Number</button>
</center>
</body>
</html>