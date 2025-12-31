<!-- Background Scenario:
Imagine you are developing a feature for an online shop that dynamically adjusts item prices based on discounts and taxes,
and also calculates loyalty points based on the final price. 

- Instructions:
1. Apply a 30% percentage discount to the value in the given variable $price first
2. Apply a flat discount of $10 to the price after the percentage discount
3. Unlike a percentage discount, a flat discount is a fixed amount subtracted from the price.
4. Add a 20% tax to the price after applying both discounts
5. Calculate the loyalty points earned for the final price
6. Every cent spent earns 1 loyalty point; $1 is then equivalent to 100 loyalty points
Format your output as follows:
"After applying discounts and taxes, the item's price is reduced from $150 to $114, and you've earned 11400 loyalty points." -->

<!-- Solution 1: -->
<?php               

$price = 150;   
$percentageDiscount = 0.30;
$flatDiscount = 10;
$taxRate = 0.20;
$loyaltyPointsPerDollar = 100;
// Step 1: Apply percentage discount
$priceAfterPercentageDiscount = $price * (1 - $percentageDiscount);
// Step 2: Apply flat discount
$priceAfterFlatDiscount = $priceAfterPercentageDiscount - $flatDiscount;

// Step 3: Apply tax
$finalPrice = $priceAfterFlatDiscount * (1 + $taxRate);
// Step 4: Calculate loyalty points
$loyaltyPoints = round($finalPrice * $loyaltyPointsPerDollar);
// Step 5: Output the result
echo "After applying discounts and taxes, the item's price is reduced from $$price to $" . round($finalPrice, 2) . ", and you've earned $loyaltyPoints loyalty points.";

?>

<!-- Solution 2: -->
<?php

// $newPrice = $price - ($price * 0.30);

$newPrice = $price * 0.70;

$newPrice = $newPrice - 10;

// $newPrice = $newPrice + ($newPrice * 0.20);
$newPrice = $newPrice * 1.20;

$loyaltyPoints = round($newPrice * 100);

echo "After applying discounts and taxes, the item's price is reduced from \${$price} to \${$newPrice}, and you've earned {$loyaltyPoints} loyalty points.";