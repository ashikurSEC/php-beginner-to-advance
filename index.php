<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>
<body>
    <h1>Recommended Book</h1>

    <?php 
    $books = [
        'Jane Eyre',
        'Wuthering Heights',
        'The Lord of the Rings'
    ];
    ?>
    <ul>
        <?php 
            foreach ( $books as $book ) {
                echo "<li>". $book ."</li>";
            }
        ?>
    </ul>
</body>
</html>