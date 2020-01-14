<?php
//*************************************************
$arr=array(2,4,2,4,5,2,1,3,1);
$arr_count=count($arr);
for ($i=0; $i <$arr_count ; $i++) { 
	for ($j=$i+1; $j <$arr_count ; $j++) { 
		if ($arr[$i]==$arr[$j]) {
			echo $arr[$i]." ";
			break;
		}		

	}
}
echo "<br>";

//*******************************************************************

$num=1;
$fac=10;
for ($i=1; $i <=$fac ; $i++) { 
	$num=$i*$num;
}
echo $num."<br>";

//**************************************************

$star="*";
for ($i=0; $i <5 ; $i++) { 
	for ($j=0; $j <= $i ; $j++) { 
		echo $star." ";
	}
	echo "<br>";
}
echo "<br>";

$arr = array( 'o','z','m', 'a', 'o', 'a', 'm','z','o' ); 
$n = count($arr);

  $flag = 0; 
    for ($i = 0; $i <= $n / 2 &&  
                 $n != 0; $i++) 
    { 
  
        if ($arr[$i] != $arr[$n - $i - 1])  
        { 
            $flag = 1; 
            break; 
        } 
    } 

    if ($flag == 1) 
        echo "Not Palindrome"; 
    else
        echo "Palindrome"; 
 



?>
