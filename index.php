<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITOLO PAGE -->
    <title>Template</title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONT GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- CSS -->
    
    <link rel="stylesheet" href="css/style.css">

    
</head>
<body id="debug">


    <div class="container">
    
    <!-- ------------------------------------------------------------PHP -->
    <?php 
    require_once __DIR__ . '/partials/function.php';
        // var_dump($_GET);

        if (isset($_GET['pass-length'])){//pass-length passato dall'html
            $passLength = intval($_GET['pass-length']);
            // var_dump($passLength);
            $password = generateRandomPass($passLength);
        };
    ?>


    <!-- ------------------------------------------------------------END PHP -->  

            <h1 class="text-center">PASSWORD GENERATOR</h1>

            <div class="row ">

                <div class="col">

                    <form action="" method="GET">

                        <div class="d-flex justify-content-center flex-column">
                            <label for="pass-length" class="form-label">insierisci la lunghezza della password da generare</label> 
                            <input type="number" name="pass-length" min="5" max="100" class="forn-control w-25" id="pass-length" placeholder="Minimo 5,Massimo 100" required><!-- name= "pass-length"-->
                        </div>
                        <button type="submit"> Generate password</button>
                    </form>
                </div>
            </div>
            <div>
                <!-- ------------------------------------------------------------PHP -->
                <?php 
                    if (isset($_GET['pass-length'])){ // SE SI VERIFICA QUESTA CONDIZIONE ALLORA SI GENERERà L'HTML DENTRO QUESTA FUNZIONE PHP SMEZZATA IN 2 SCRITTURE PHP, SENNO SE NO NMETTIAMO QUESTO IF CI DA ERRORE SE SVUOTIAMO I CAMPI/(URL PER PROVA.)
                ?>
                    La password generata da<strong class="fw-bolder text-danger"> <?php echo $passLength?></strong> caratteri è:<strong class="fw-bolder text-danger"> <?php echo $password?></strong>
                <?php }?>
                <!-- ------------------------------------------------------------END PHP -->

            </div>
    </div>




    <!-- JS SCRIPT.JS -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>