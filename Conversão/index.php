<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h2>Conversor de Temperatura</h2>

    <form method="post">
        <label for="temp">Temperatura:</label><br>
        <input type="number" id="temp" name="temp" required><br><br>
        
        <label for="tipo">Converter para:</label><br>
        <select id="tipo" name="tipo">
            <option value="celsius">Celsius para Fahrenheit</option>
            <option value="fahrenheit">Fahrenheit para Celsius</option>
        </select><br><br>
        
        <button type="submit" name="converter">Converter</button>
    </form>

    <?php
    // Função para converter Celsius para Fahrenheit
    function celsiusParaFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    // Função para converter Fahrenheit para Celsius
    function fahrenheitParaCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    // Verifica se o formulário foi enviado
    if (isset($_POST['converter'])) {
        $temp = $_POST['temp'];
        $tipo = $_POST['tipo'];

        // Realiza a conversão com base no tipo selecionado
        if ($tipo === 'celsius') {
            $fahrenheit = celsiusParaFahrenheit($temp);
            echo "<p>$temp °C equivale a $fahrenheit °F.</p>";
        } elseif ($tipo === 'fahrenheit') {
            $celsius = fahrenheitParaCelsius($temp);
            echo "<p>$temp °F equivale a $celsius °C.</p>";
        }
    }
    ?>
</body>
</html>
