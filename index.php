<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>
<body>
    <h1>Associative Array</h1>

    <?php 
    $books = [
        [
            'name'      => 'Do Androids Dream of Electric Sheep',
            'author'    => 'Philip K. Dick',
            'parseUrl'  => 'http://example.com'
        ],

        [
            'name'      => 'Project Hail Mary',
            'author'    => 'Andy Weir',
            'parseUrl'  => 'http://example.com'
        ]
    ];
    ?>
    <ul>
        <?php foreach ( $books as $book ) : ?>
            <li>
                <a href="<?= $book['parseUrl']?>">
                    <?= $book['name'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>