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

    $greetings = "I'm learning PHP!";
    echo $greetings;

    $greeting = "I'm learning PHP!";
    echo "{$greeting}_!!";
    echo '<br />';

    $name = 'Jane Doe';
    $subject = 'PHP';

    echo "I'm {$name} and I'm learning {$subject}";
    // echo 'I"m {$name} and I"m learning {$subject}';

    // new line special character
    echo "\n";
    echo "----";
    // tab special character
    echo "\t----";
    
    ?></pre>

    <p>A first line of text. <?php echo '<br />'; ?>A second Line of text.</p>
    <p>A first line of text. <?php echo "\n"; ?>A second Line of text.</p>

    <p><?php echo 'My last echo, $abcd'; ?></p>
    
    <p><?php 
    
    $abcd = 'It is a variable';
    echo "My last echo, {$abcd}"; ?></p>
    
</body>
</html>