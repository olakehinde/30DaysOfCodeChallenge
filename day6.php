<?php 
// PHP program to Count set 
// bits in an integer 

// Function to get no of set 
// bits in binary representation 
// of positive integer n 
// function countSetBits($n) { 
// 	$count = 0; 
// 	if (is_integer($n)) { 
// 		$count += $n & 1; 
// 		$n >>= 1; 
// 	    return $count;
//     } 
//     else {
//         return "0 and/or negative numbers are not allowed";
//     } 
// } 

// // Driver Code 
// $i = 1234; 
// echo countSetBits($i);

/* Function to get no of 
set bits in binary 
representation of passed 
binary no. */
// function countSetBits($n) { 
// 	$count = 0; 
// 	while ($n) { 
// 	$n &= ($n - 1); 
// 	$count++; 
// 	} 
// 	return $count; 
// } 

// // Driver Code 
// $i = -11; 
// echo countSetBits($i); 

function countSetBits($n) { 
    return $n <= 0 ? "0 and/or negative numbers are not allowed" : 1 + countSetBits($n & ($n - 1)); 
} 

// function countSetBits($n) { 
//     // base case 
//     if ($n <= 0) 
//         return "0 and/or negative numbers are not allowed"; 
//     else
//         return countSetBits($n & ($n - 1)) + true; 
// }  
  
// get value from user 
$n = -1234; 
  
// function calling 
echo @countSetBits($n);
?>