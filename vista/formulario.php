<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistente de Moda</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Asistente de Moda</h1>
    <form action="index.php?action=procesar" method="POST">
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>

        <label for="genero">Género:</label>
        <select name="genero" id="genero" required>
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
        </select>

        <label for="piel">Tono de piel:</label>
        <select name="piel" id="piel" required>
            <option value="claro">Claro</option>
            <option value="medio">Medio</option>
            <option value="oscuro">Oscuro</option>
        </select>

        <label for="altura">Altura (cm):</label>
        <input type="number" name="altura" id="altura" required>
        
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" id="peso" required>

        <label for="preferencias">Colores favoritos:</label>
        <input type="text" name="preferencias" id="preferencias">

        <button type="submit">Obtener sugerencias</button>
    </form>
</body>
</html>
