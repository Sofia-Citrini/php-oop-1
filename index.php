<?php 
require_once "./classes/Movie.php";

$movie1 = new Movie("Call me by your name", "Romantico, Drammatico");
$movie2 = new Movie("Amsterdam", "Commedia, Giallo");

echo "<pre>";
var_dump($movie1);
var_dump($movie2);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>php_oop_1</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <main>
        <div class="container">
            <h1>MOVIES</h1>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie1->getTitle()?></h5>
                    <div class="card-text">Genere: <?php echo $movie1->getCategory()?></div>
                </div>
            </div>
            <div class="card my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie2->getTitle()?></h5>
                    <div class="card-text">Genere: <?php echo $movie2->getCategory()?></div>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>