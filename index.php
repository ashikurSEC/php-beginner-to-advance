<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>

<body>
    <h1>Function and Filter</h1>

    <?php
    $books = [
        [
            'name'          => 'Do Androids Dream of Electric Sheep',
            'author'        => 'Philip K. Dick',
            'releaseYear'   => 1968,
            'parseUrl'      => 'http://example.com'
        ],

        [
            'name'          => 'Project Hail Mary',
            'author'        => 'Andy Weir',
            'releaseYear'   => 2021,
            'parseUrl'      => 'http://example.com'
        ],

        [
            'name'          => 'The Matian',
            'author'        => 'Andy Weir',
            'releaseYear'   => 2011,
            'parseUrl'      => 'http://example.com'
        ]
    ];
    
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <?php if ($book['author'] === 'Andy Weir') : ?>
                <li>
                    <a href="<?= $book['parseUrl'] ?>">
                        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                    </a>
                </li>
            <?php endif ?>
        <?php endforeach ?>
    </ul>
</body>

</html>