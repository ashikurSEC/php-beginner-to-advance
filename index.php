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
    
    function filterByAuthor ( $books, $author ) { //* Add argument $author ... 
        $filteredBooks = [];

        foreach ( $books as $book ) {
            if ( $book ['author'] === $author ) { //* Declare $author...
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }

    $filteredBooks = filterByAuthor( $books, 'Andy Weir' ); //* Passing by Author name... 
    ?>
    <ul>
        <?php foreach ( $filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['parseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>