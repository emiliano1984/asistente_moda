<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus Sugerencias</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Tus sugerencias de moda</h1>
    <ul>
        <?php foreach ($recomendaciones as $recomendacion): ?>
            <li><?= htmlspecialchars($recomendacion) ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php">Volver</a>
</body>
</html>
