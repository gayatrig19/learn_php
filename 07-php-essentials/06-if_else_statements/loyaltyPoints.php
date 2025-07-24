<!-- Background Scenario:
Imagine you've been tasked with creating a loyalty rewards system for an e-commerce website. 
Customers earn loyalty points based on their purchase history, redeemable for discounts on future purchases. 💳🛍️

- Accumulating 3000 or more Loyalty Points qualifies for a 5% discount.
- Accumulating 6000 or more Loyalty Points qualifies for a 15% discount.
- Less than 3000 Loyalty Points results in no discount.  -->

<!-- Solution 1: -->
<?php

$loyaltyPoints = 1000;
 
// Check if the loyalty points balance is less than 3000
if ($loyaltyPoints < 3000) {
    // If true, inform the customer that no discount is available due to insufficient points
    echo 'You have fewer than 3000 Loyalty Points. No discount is available.';
}
// Check if the loyalty points balance is less than 6000 but more than or equal to 3000
else if ($loyaltyPoints < 6000) {
    // If true, offer the option to spend 3000 points for a 5% discount
    echo 'You can spend 3000 Loyalty Points for a discount of 5%.';
}
// For loyalty points balance of 6000 or more
else {
    // Offer the option to spend 6000 points for a 15% discount
    echo 'You can spend 6000 Loyalty Points for a discount of 15%.';
}

?>


<!-- Solution 2: -->

<?php

$loyaltyPoints = 6000;
 
// First, check for the minimum amount of points for any discount.
if ($loyaltyPoints >= 3000) {
    // If points are between 3000 (inclusive) and 6000, offer a 5% discount.
    if ($loyaltyPoints < 6000) {
        echo 'You can spend 3000 Loyalty Points for a discount of 5%.';
    } 
    // If points are 6000 or more, offer a 15% discount.
    else {
        echo 'You can spend 6000 Loyalty Points for a discount of 15%.';
    }
} 
// If points are less than 3000, no discount is offered.
else {
    echo 'You have fewer than 3000 Loyalty Points. No discount is available.';
}

?>


<!-- My Solution: -->

<?php

// The variable $loyaltyPoints will be available to you

// Write your code here

$loyaltyPoints = 6000;

if ($loyaltyPoints < 3000) {
    echo 'You have fewer than 3000 Loyalty Points. No discount is available.';
}
else if ($loyaltyPoints >= 3000 && $loyaltyPoints < 6000) {
    echo 'You can spend 3000 Loyalty Points for a discount of 5%.';
}
else {
    echo 'You can spend 6000 Loyalty Points for a discount of 15%.';
}

?>
