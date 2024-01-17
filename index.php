<?php require_once __DIR__ . '/data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pet store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container mb-5">
        <div class="row text-center my-5">
            <h1 class="mb-3">Prodotti</h1>
            <h3>Totale Carrello: <?= $clients[0]->getTotalToPay($cart) . ' €'; ?></h3>
        </div>
        <div class="row">

            <!-- ciclo card  -->
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col-3">

                    <!-- inizio card  -->
                    <div class="cardContainer">

                        <div class="card rounded overflow-y-auto">

                            <!-- immagine card  -->
                            <img src="<?= $prodotto->imgUrl ?>" class="card-img-top" alt="...">
                            <div class="card-body">

                                <!-- titolo  -->
                                <h5 class="card-title">
                                    <?= $prodotto->name ?>
                                </h5>

                                <!-- sottotitolo  -->
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <?= $prodotto->category->name . ", " . get_class($prodotto) ?>
                                    <?php if ($prodotto->category->name == 'Dog') {
                                        echo '<i class="fa-solid fa-dog"></i>';
                                    } ?>
                                    <?php if ($prodotto->category->name == 'Cat') {
                                        echo '<i class="fa-solid fa-cat"></i>';
                                    }; ?>
                                    <br>
                                    <?= $prodotto->category->description ?>
                                </h6>
                                Prezzo: <?= $prodotto->price . " €" ?> <br>
                                Disponibilità: <?= $prodotto->availability ? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-x"></i>' ?><br>
                                Colore: <?= (isset($prodotto->color)) ? $prodotto->color : "/" ?><br>
                                Peso: <?= $prodotto->weight . " kg" ?>

                                <!-- descrizione prodotto da aggiungere  -->
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>