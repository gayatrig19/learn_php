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

    // include 'vars.php';

    $serverStatus = 'maintenance';

    if ($serverStatus === 'ok') {
        echo 'Welcome to our website! Browse and enjoy our content';
    }
    else if ($serverStatus === 'error') {
        echo 'We got a serious error right now. Please contact us via email: ok@email.com';
    }
    else {
        echo 'We\'re currently undergoing maintenance. Please check back later.';
    }

    echo "\n------\n";
    $season = 'summer';

    if ($season === 'summer') echo 'Warmer months ahead!';
    if ($season === 'winter') echo 'Colder months ahead!';
    
    ?></pre>
    
</body>
</html>