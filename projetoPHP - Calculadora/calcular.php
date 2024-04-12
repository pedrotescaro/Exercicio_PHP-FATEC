<?php

    //Recuperar as informações enviadas pelo formulário
    //método = GET
    $numero1 = $_GET["num1"];
    $numero2 = $_GET["num2"];
    $operacao = $_GET["operacao"];

    //Realizar o processamento das informações
    if($operacao == "Somar"){
        echo "<h1>Soma</h1>";
        $resultado = $numero1 + $numero2;
        echo "<h1>".$resultado."</h1>";
        //Colocar um botão para voltar para página principal
        echo '<button><a href = index.php> <img src="imagens/seta3.png" alt="botao de retornar"></button><br><br>';
    }
    elseif($operacao == "Subtrair"){
        echo "<h1>Subtração</h1>";
        $resultado = $numero1 - $numero2;
        echo "<h1>".$resultado."</h1>";
        echo '<button><a href = index.php> <img src="imagens/seta3.png" alt="botao de retornar"></button><br><br>';
    }
    elseif($operacao == "Multiplicar"){
        echo "<h1>Multiplicação</h1>";
        $resultado = $numero1 * $numero2;
        echo "<h1>".$resultado."</h1>";
        echo '<button><a href = index.php> <img src="imagens/seta3.png" alt="botao de retornar"></button><br><br>';
    }
    elseif($operacao == "Dividir"){
        echo "<h1>Divisão</h1>";
        if($numero2 == 0){
            echo "<h1>Não é possível dividir por 0</h1>";
            echo "<br><br>";
            echo '<button><a href = index.php> <img src="imagens/seta3.png" alt="botao de retornar"></button><br><br>';
        }
        else{
        $resultado = $numero1 / $numero2;
        echo "<h1>".$resultado."</h1>";
        echo '<button><a href = index.php> <img src="imagens/seta3.png" alt="botao de retornar"></button><br><br>';
    }
    }
?>