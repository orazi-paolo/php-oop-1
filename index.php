<?php
// includo le classi
require_once 'Book.php';
require_once 'Genre.php';

// istanzio due oggetti per la classe genre
$firstGenre = new Genre('Self-help');
$secondGenre = new Genre('Personal growth');

// istanzio due oggetti per la classe book
$firstBook = new Book('Atomic habits', 'James Clear', 2019, [$firstGenre]);
$secondBook = new Book('Il potere delle abitudini', 'Charles Duhigg', 2014, [$firstGenre, $secondGenre]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 1</title>
</head>

<body>
    <h1>
        Libri che non parlano delle abitudini
    </h1>

    <ul>
        <!-- stampo in pagina -->
        <li><?php echo $firstBook->getDescription(); ?></li>
        <li><?php echo $secondBook->getDescription(); ?></li>
    </ul>
</body>

</html>