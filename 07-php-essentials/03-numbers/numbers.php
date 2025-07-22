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

    echo 42;
    echo "\n";
    echo (42 * 42) . "\n";

    $meaning = 42;
    echo ($meaning * 2) . "\n";
    echo ($meaning / 2) . "\n";
    echo ($meaning + 42) . "\n";
    echo ($meaning - 2) . "\n";

    echo '5' + '6' . "\n";
    echo round(3.33, 1) . "\n";

    $meaning = $meaning * 2;
    echo $meaning . "\n";

    $meaning *= 2;
    $meaning /= 2;
    $meaning += 2;
    $meaning -= 2;
    echo $meaning;
    
    ?></pre>
    
</body>
</html>