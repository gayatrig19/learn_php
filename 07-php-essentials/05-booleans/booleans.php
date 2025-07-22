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
    var_dump($meaning > 40);
    var_dump(40 > 20);
    var_dump((40 + 2) > 20);
    var_dump((40 + 2) < 20);
    var_dump((40 + 2) >= 20);
    var_dump((40 + 2) <= 20);

    var_dump(10 < 10);
    var_dump(10 <= 10);

    $name = 'Gayatri';
    var_dump($name === 'Gayatri');
    var_dump($name !== 'Gayatri');

    $age = 30;
    var_dump($age === 30);
    var_dump($age === '30');

    var_dump($age == '30');
    var_dump($age != '30');
    
    ?></pre>
    
</body>
</html>