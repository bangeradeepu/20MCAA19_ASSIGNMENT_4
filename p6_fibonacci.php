<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <div class="w3-container w3-half w3-margin-top">
        <form method="post" class="w3-container w3-card-4">
                        <center><h2>Find Fibonacci and Prime Numbers</h2></center>

            <input class="w3-input" type="text" name="n" placeholder="Enter Number" required/>
            <br>
            <br>
            <input class="w3-button w3-red w3-right" type="submit" value="Print Fibonacci Series" name="check"/>
            <br>
            <br>
        </form>

    </div>

<?php   
    if($_POST)  
    {   
        $num = $_POST['n'];
        $i = 3;
        $n1 = 0;  
        $n2 = 1;  
        $last = $n2;
        echo '<br><p><h3>Fibbonaci numbers of <b>'. $num . ' </b>is <b><br> 0 1 </b>';   
        while ($i <= $num )  
        {  
            $n3 = $n2 + $n1;  
            echo '<b>' . $n3 . ' </b>';    
            $n1 = $n2;  
            $n2 = $n3;  
            $i = $i + 1;  
            $last = $n2;

        } 

        //prime
        $count = 0; 
        $num1 = $_POST['n']; 
        $num = 2;   
        $n1 = 1;
        $n2 = 1;  
        $n3 = 2;    
        echo '<br><h3>Prime numbers in given Fibbonaci number is <br>';
while ($count < $last )  
{  
$div_count=0;  
while($num == $n3)
{
    if($last > 2){
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$div_count++;  
}  
} 
if ($div_count<3)  
{  
echo '<b>' .$num . ' </b>';
} 
}
$n1=$n2;
$n2=$n3;
$n3 = $n1 + $n2;
} 
$num=$num+1;
$count =$count+1;
}  
    }    
?> 

    </body>
</html>
</html>