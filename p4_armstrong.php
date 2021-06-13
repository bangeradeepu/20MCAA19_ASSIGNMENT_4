<?php  
$msg = '';
 if($_POST)  
 {    
  $number = $_POST['number'];  
  
  $a = $number;  
  $sum  = 0;  
 
  while( $a != 0 )  
  {  
   $rem   = $a % 10; 
   $sum   = $sum + ( $rem * $rem * $rem ); 
   $a   = $a / 10;
  }   
  if( $number == $sum )  
  {  
        $msg = 'Yes <b>'. $number . '</b> is an Armstrong Number';  
  }else  
  {  
         $msg =  '<b>' . $number . '</b>' . ' is not an Armstrong Number';  
  }  
 }  
?>     
<html>  
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>  
 <form method="post" class="w3-container"> 
  <h1>Find Armstrong Number</h1>
  <br>
   <input class="w3-input" type="number" name="number" placeholder="Enter the number">  
   <br>
   <input class="w3-button w3-red" type="submit" value="Submit">  
  </form>  
  <center><h1><?php echo $msg; ?></h1></center>
</body>  
</html> 