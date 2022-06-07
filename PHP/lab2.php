<?php

$amount = 50000;
$tax = 0.5;
$totalTax = $amount * $tax;
$totalAmount = $amount + $totalTax;
echo "Amount: ".$amount;
echo "\nTotal tax: ".$totalTax; 
echo "\nTotal amount: ".$totalAmount;

?>