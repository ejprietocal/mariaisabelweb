<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="/build/css/app.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body>

    <?php include_once __DIR__ . '/templates/header.php' ?>

    <div class="contenedor">
        <div class="app">
            <?php echo $contenido; ?>
        </div>
    </div>

    <?php include_once __DIR__ . '/templates/footer.php'?>
    <?php echo $scriptseccion2 ?? '' ?>
    <script src="/build/js/app.min.js"></script>
    <script src="/build/js/boostrap/boostrap.min.js"></script>
</body>
</html>