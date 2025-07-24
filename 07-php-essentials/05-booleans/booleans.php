<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../01-strings/simple.css" />
    <title>Document</title>
</head>
<body>
    <pre><?php 

    // Boolean Operators
    var_dump(true);
    var_dump(false);

    $value = true;
    var_dump($value);

    echo "----\n";

    // Comparison Operators
    $meaning = 42;
    var_dump($meaning > 40); // true
    var_dump(40 > 20); // true
    var_dump((40 + 2) > 20); // true
    var_dump((40 + 2) < 20); // false
    var_dump((40 + 2) >= 20); // true
    var_dump((40 + 2) <= 20); // false

    var_dump(10 < 10); // false
    var_dump(10 <= 10); // true

    echo "----\n";

    $name = 'Gayatri';
    var_dump($name === 'Gayatri'); // true
    var_dump($name !== 'Gayatri'); // false

    $age = 30;
    var_dump($age === 30); // true
    var_dump($age === '30'); // false

    var_dump($age == '30'); // true
    var_dump($age != '30'); // false
    var_dump($age !== '30'); // true

    echo "----\n";

    $unitsSold = 10;

    $maxLimit = "5";

    echo $unitsSold + $maxLimit . "\n"; // Output: 15
    echo $unitsSold * $maxLimit . "\n"; // Output: 50
    echo $unitsSold > $maxLimit; // Output: 1
    echo $unitsSold . $maxLimit; // Output: 105
    
    ?></pre>
    
</body>
</html>