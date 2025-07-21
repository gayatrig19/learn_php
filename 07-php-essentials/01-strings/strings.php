<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
    <pre><?php 

    echo "I'm a string!";
    echo '<br />';
    echo 'I\'m a string!';

    $greetings = 'Hello PHP!';
    echo $greetings;
    echo '<br />';

    // Combine(append) strings with Dot('.') Operator
    $greet = 'Hello, I am a string';
    echo $greet . '!!!';
    echo '<br />';

    // String Concatenation
    $name = 'Jane Doe';
    $subject = 'PHP';

    $text = 'I\'m ' . $name . ' and I want to learn the language ' . $subject;
    echo $text . '!';
    
    ?></pre>
    
</body>
</html>