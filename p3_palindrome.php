<?php   
$msg = '';
$reverse = '';
$num = '';
$sum = 0;
$m = 0;
$temp = '';
    if($_POST)  
    {  
        $num = $_POST['num']; 
        $temp = $num;
        $reverse = strrev($num);  
        if($num == $reverse){  
            $msg =  'The number <b>' . $num . '</b> is Palindrome';     
        }else{  
            $msg =  'The number <b>' . $num . '</b> is not a Palindrome';   
        }  
        while($num > 0)
        {
            $m = $num % 10;
            $sum  = $sum + $m;
            $num = $num / 10;  
        }
       
}     
?>  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Palindrome</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <h1>Palindrome</h1>
    <form method="post" class="w3-container">        
        <input class="w3-input" type="text" name="num" placeholder="Enter the number" /><br>  
        <button class="w3-button w3-red" type="submit">Check</button>  
    </form>  

      <center><h1><?php echo $msg; ?></h1></center>
      <center><h1>Reverse of <?php echo '<b>' . $temp . '</b>' ?> is <?php echo '<b>' . $reverse . '</b>' ?></h1></center>
      <center><h1>Sum of <?php echo '<b>' . $temp . '</b>' ?> is <?php echo '<b>' . $sum . '</b>' ?></h1></center>

</body>
</html>