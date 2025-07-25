<!-- Background Scenario:

Building on the loyalty rewards system you initiated for an e-commerce website, 
it's time to deepen the mechanics of your program. 
In Part 1, you categorized customers based on their loyalty points to determine their eligibility for discounts. 
Now, you will compute the actual cost savings for each customer,
reflecting the discounts they qualify for and the subsequent loyalty points balance after their purchase. 💳🛍️

- Provided Data:

$totalCost: the total purchase amount in $
$loyaltyPoints: the customer's loyalty points balance

As in the previous part, these variables are predefined in the background. 
Please do not initialize these variables on your own; 
assume they are already set and available for use in your script.

- Instructions:

Determine the Discount: Based on the customer's loyalty points balance, apply the following discounts:
1. Less than 3000 points: No discount

2. 3000 points or more: 5% discount

3. 6000 points or more: 15% discount

Calculate Discounted Total: Compute the total amount after applying the eligible discount. 
Customers with over 6000 points should be considered for both discount options!
Apply Tax: Add an 8% tax to the discounted total.
Update Loyalty Points: Calculate the customer's new loyalty points balance. 
Every cent spent (after tax) earns 1 loyalty point ($1 -> 100 loyalty points). 
Subtract the spent points for the discount and add points based on the final purchase amount.
Checkout Message: Display a tailored checkout message for the customer. Examples:

For customers with 2900 Loyalty Points and a $totalCost of $20:

"You have fewer than 3000 Loyalty Points. No discount is available. 
Your final price (after taxes) would be $21.6. Your new Loyalty Balance would be: 5060."
If the customer has 3500 Loyalty Points and a $totalCost of $20, the message should be:

"You can spend 3000 Loyalty Points for a discount of 5%. 
Your final price (after discount and taxes) would be $20.52. 
Your new Loyalty Balance would be: 2552."

If the customer has 7000 Loyalty Points and a $totalCost of $20, 
the messages should be:

"You can spend 3000 Loyalty Points for a discount of 5%. 
Your final price (after discount and taxes) would be $20.52. 
Your new Loyalty Balance would be: 6052."

"You can spend 6000 Loyalty Points for a discount of 15%. 
Your final price (after discount and taxes) would be $18.36. 
Your new Loyalty Balance would be: 2836."


The order in which these messages are displayed does not matter.

Replace the numbers with your results, but you must match every other character exactly!
Your code will be tested with different values of $totalCost 
and $loyaltyPoints to ensure it works for various scenarios.  -->

<!-- Solution 1:  -->


<?php

$loyaltyPoints = 4500;
$totalCost = 2940;
 
// Check if the customer has 6000 or more loyalty points
if ($loyaltyPoints >= 6000) {
    // Apply a 15% discount: Multiply the total cost by 85% (0.85), then add 8% tax
    $newTotalCost = $totalCost * 0.85 * 1.08;
 
    // Calculate new loyalty points earned based on the discounted and taxed cost
    $newLoyaltyPoints = $newTotalCost * 100;
 
    // Update the loyalty balance: Subtract 6000 points spent, add new points earned
    $updatedLoyaltyBalance = $loyaltyPoints + $newLoyaltyPoints - 6000;
 
    // Display a message to the customer with the final price and updated loyalty points balance
    echo "You can spend 6000 Loyalty Points for a discount of 15%. Your final price (after discount and taxes) would be \${$newTotalCost}. Your new Loyalty Balance would be: {$updatedLoyaltyBalance}.";
}
 
// Check if the customer has 3000 or more (but less than 6000) loyalty points
if ($loyaltyPoints >= 3000) {
    // Apply a 5% discount: Multiply the total cost by 95% (0.95), then add 8% tax
    $newTotalCost = $totalCost * 0.95 * 1.08;
 
    // Calculate new loyalty points earned based on the discounted and taxed cost
    $newLoyaltyPoints = $newTotalCost * 100;
 
    // Update the loyalty balance: Subtract 3000 points spent, add new points earned
    $updatedLoyaltyBalance = $loyaltyPoints + $newLoyaltyPoints - 3000;
 
    // Display a message to the customer with the final price and updated loyalty points balance
    echo "You can spend 3000 Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be \${$newTotalCost}. Your new Loyalty Balance would be: {$updatedLoyaltyBalance}.";
    
} else {
    // If the customer has fewer than 3000 loyalty points, no discount is applied
    $newTotalCost = $totalCost * 1.08; // Apply only 8% tax
 
    // Calculate new loyalty points earned based on the total cost with tax
    $newLoyaltyPoints = $newTotalCost * 100;
 
    // Update the loyalty balance by adding the new points earned
    $updatedLoyaltyBalance = $loyaltyPoints + $newLoyaltyPoints;
 
    // Display a message to the customer stating no discount and the final price
    echo "You have fewer than 3000 Loyalty Points. No discount is available. Your final price (after taxes) would be \${$newTotalCost}. Your new Loyalty Balance would be: {$updatedLoyaltyBalance}.";
}

?>


<!-- Solution 2: -->

<?php
 
 $loyaltyPoints = 6780;
 $totalCost = 6700;

// Check if the customer has fewer than 3000 loyalty points
if ($loyaltyPoints < 3000) {
    // Apply only 8% tax to the total cost
    $newTotalCost = $totalCost * 1.08;
 
    // Calculate new loyalty points based on the taxed total cost
    $newLoyaltyPoints = $newTotalCost * 100;
 
    // Update the loyalty balance by adding the new points earned
    $updatedLoyaltyBalance = $loyaltyPoints + $newLoyaltyPoints;
 
    // Display a message to the customer with the final price and updated loyalty points balance
    echo "You have fewer than 3000 Loyalty Points. No discount is available. Your final price (after taxes) would be \${$newTotalCost}. Your new Loyalty Balance would be: {$updatedLoyaltyBalance}.";
} else {
    // Check if the customer has 3000 or more loyalty points
    // Apply a 5% discount: Multiply the total cost by 95% (0.95), then add 8% tax
    $newTotalCost = $totalCost * 0.95 * 1.08;
 
    // Calculate new loyalty points earned based on the discounted and taxed cost
    $newLoyaltyPoints = $newTotalCost * 100;
 
    // Update the loyalty balance: Subtract 3000 points spent, add new points earned
    $updatedLoyaltyBalance = $loyaltyPoints - 3000 + $newLoyaltyPoints;
 
    // Display a message to the customer with the final price and updated loyalty points balance
    echo "You can spend 3000 Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be \${$newTotalCost}. Your new Loyalty Balance would be: {$updatedLoyaltyBalance}.";
}
 
// Check if the customer has 6000 or more loyalty points
if ($loyaltyPoints >= 6000) {
    // Apply a 15% discount before adding 8% tax for those with 6000 or more points
    $newPrice = $totalCost * 0.85 * 1.08;
    // Calculate new loyalty points, accounting for the 6000 points spent
    $newLoyaltyPoints = $loyaltyPoints - 6000 + $newPrice * 100;
    // Display a message with the discounted price and updated loyalty balance
    echo "You can spend 6000 Loyalty Points for a discount of 15%. Your final price (after discount and taxes) would be \${$newPrice}. Your new Loyalty Balance would be: {$newLoyaltyPoints}.";
}

?>