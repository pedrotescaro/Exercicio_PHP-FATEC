<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    <form action="calcular.php" method="get">
        <label>Número 1: </label><input type="text" name="num1" placeholder="Informe o primeiro valor"><br><br>
        <label>Número 2: </label><input type="text" name="num2" placeholder="Informe o segundo valor"><br><br>
        <label>Operação: </label><select name="operacao">
            <option value="Somar">Somar</option>
            <option value="Subtrair">Subtrair</option>
            <option value="Multiplicar">Multiplicar</option>
            <option value="Dividir">Dividir</option>
        </select><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

    <form action="tabuada.php" method="get">
        <label>Selecione a Tabuada: </label>
        <select name="tabuada">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br><br>
        <input type="submit" value="CalcularTabuada">
    </form>
</body>
</html>