<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIL Contadora</title>
    <link rel="stylesheet" href="/build/css/app.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="/build/img/favicon.ico" type="image/x-icon">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="MIL Contadora Pública">
    <meta property="og:description" content="Servicios de asesoramiento empresarial en sus más amplios términos, con el objetivo de cubrir todas las necesidades de su empresa, maximizar sus recursos y cumplir con todas las obligaciones fiscales.">
    <meta property="og:image" content="/build/img/logo.png">
    <meta property="og:url" content="https://www.contadoramariaisabel.com">
    <meta property="og:type" content="website">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta name="twitter:image" content="/build/img/logo.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MIL Contadora Pública">
    <meta name="twitter:url" content="https://www.contadoramariaisabel.com">
    <meta name="twitter:description" content="Servicios de asesoramiento empresarial en sus más amplios términos, con el objetivo de cubrir todas las necesidades de su empresa, maximizar sus recursos y cumplir con todas las obligaciones fiscales.">

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
    <?php echo $scriptnavigation ?? '' ?>
    <script src="/build/js/app.min.js"></script>
    <script src="/build/js/boostrap/boostrap.min.js"></script>
</body>
</html>