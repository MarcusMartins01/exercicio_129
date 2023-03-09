<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência</title>
    
    <!-- Estilização -->
    <style>
        input {
            margin-bottom: 10px;
        }

        fieldset {
            display: inline-block;
            margin-bottom: 10px;
            background-color: #F2F2F2;
        }

        body {
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <h1>Sequência</h1>

    <!-- Formulário -->
    <fieldset>
        <form method="post">
            <label for="">Selecione o valor inicial:</label>
            <br>
            <input type="text" name="inicial" id="inicial">
            <br>
            <label for="">Selecione o valor final:</label>
            <br>
            <input type="text" name="final" id="final">

            <p>Mostrar:</p>

            <input type="radio" name="radio" id="todos" value="todos">
            <label for="todos">Todos</label>
            <br>
            <input type="radio" name="radio" id="pares" value="pares">
            <label for="pares">Apenas os pares</label>
            <br>
            <input type="radio" name="radio" id="impares" value="impares">
            <label for="impares">Apenas os ímpares</label>
            <br>
            <input type="submit" name="enviar" value="Mostrar a sequência">
        </form>
    </fieldset>
    <br>

    <!-- Código php -->
    <?php

    include_once("Sequencia.php");

    $obj = new Sequencia();

    if (isset($_POST['enviar'])) {
        $inicial = $_POST['inicial'];
        $final = $_POST['final'];
        $radio = $_POST['radio'];

        $obj->setInicio($inicial);
        $obj->setFim($final);

        if ($radio == 'todos') {
            echo "<h2>A sequência é:</h2>";
            echo $obj->exibirTodosNumeros();
        } else if ($radio == 'pares') {
            echo "<h2>A sequência em pares é:</h2>";
            echo $obj->exibirPares();
        } else {
            echo "<h2>A sequência em ímpares é:</h2>";
            echo $obj->exibirImpares();
        }
    }

    ?>

</body>
</head>