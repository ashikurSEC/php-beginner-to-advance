<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>
<style>
    body {
        height: 100vh;
        display: grid;
        place-items: center;
        margin: 0;
        color: #000;
    }

    h1 {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        color: white; 
        border-radius: 8px;
        background-color: black; 
        padding: 20px; 
        font-family: Arial, sans-serif; 
    }
</style>
<body>

    
    <?php
    //& Conditionals and Boolean  
    $name = "Ashikur Rahman";

    $read = true;

    if ( $read ) {
        $message  = " You have read $name ";
    }

    ?>
    <h1>
        <?= $message;?>
    </h1>
</body>
</html>