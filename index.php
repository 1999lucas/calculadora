<?php




$numero1 = isset($_POST["numero1"]) ? $_POST["numero1"] :  NULL;
$numero2 = isset($_POST["numero2"]) ? $_POST["numero2"] :  NULL;
$operacao = isset($_POST["operacao"]) ? $_POST["operacao"] :  NULL;
$resultado = isset($_POST["operacao"]) ? $_POST["operacao"] :  NULL;


//$operacao == "adicao" ? $resultado = $numero1 + $numero2 : $operacao == "subtracao" ? $resultado = $numero1 - $numero2 : $operacao == "multiplicacao" ? $resultado = $numero1 + $numero2 : $operacao == "divisao" ? $resultado = $numero1 + $numero2;


if ($operacao == "Adição") {
    $resultado = $numero1 + $numero2;
}else if ($operacao == "Subtração") {
    $resultado = $numero1 - $numero2;
}else if ($operacao == "Multiplicação") {
    $resultado = $numero1 * $numero2;
}else if($operacao == "Divisão") {
    if ($numero2 == 0) {
          echo $resultado = ("Impossível dividir por zero!");}
else { $resultado = $numero1 / $numero2; }}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Calculadora</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        form {
            display: flex;
            padding: 30px;
            flex-direction: column;
            gap: 10px;

            background-color: #003066;
            border-radius: 20px;
            box-shadow: 0px 10px 20px #5A776E;
            color: white;
        }

        .input-group {
            display: flex;
            flex-direction: column;
        }

        .input-group label {
            font-size: 14px;
            margin-bottom: 2px;
            text-align: center;
        }


        .input-group input {
            padding: 6px 8px;
            border-radius: 4px;
            border: 1px solid whitesmoke;
            min-width: 300px;
            font-size: 16px;
        }

        button {
            padding: 6px;
            background-color: #0053b3;

            border: 2px solid #005fcc;

            border-radius: 20px;
            font-weight: bold;
            font-size: 14px;
            color: white;
            margin-bottom: 12px;

        }

        button:hover {
            box-shadow: 0 24px 38px 3px rgba(0,0,0,0.14), 0 9px 46px 8px rgba(0,0,0,0.12), 0 11px 15px -7px rgba(0,0,0,0.20);
            border-style: solid;
            border-color: #00214d;
            cursor: pointer;

        }

        h1 {
            font-size: 24px;
            text-align: center;
            margin: 0;
            margin-bottom: 0px;
        }

        .radio {
            font-size: 16px;
            text-align: justify;

        }

        .radio input {
            float: left;
        }

        .titulo h1 {

            background-color: #000c1a;
            letter-spacing: 10px;
            border-radius: 20px;
        }

        #resultado {

            min-width: 150px;
            width: auto;
            height: 120px;
            background-color: #00214d;
            margin-right: auto;
            margin-left: auto;
            text-align: center;
            line-height: 120px;
            border-radius: 20px;
            font-size: 60px;
            padding-left: 25px;
            padding-right: 25px;
            

        }

        #ln {
            background-color: white;
            min-width: 322px;
            width: auto;
            height: 0.1px;
            margin-top: -10px;
        }
    </style>
</head>

<body>

    <form method="POST" action="index.php">
        <h1 style="background-color: #000c1a;
            letter-spacing: 10px;
            border-radius: 20px;">CALCULADORA</h1>
        <h1>Insira o primeiro número:</h1>
        <div class="input-group">
            <label for="numero1" Número 1></label>
            <input type="number" name="numero1" id="numero1" placeholder="Digite o Primeiro Número" required />
        </div>
        <h1>Insira o segundo número:</h1>
        <div class="input-group">
            <label for="numero2" Número 2></label>
            <input type="number" name="numero2" id="numero2" placeholder="Digite o Segundo Número" required />
        </div>
        <h1> Qual operação você quer fazer? </h1>
        <div class="radio">
            <label for="adicao">Adição</label>
            <input type="radio" name="operacao" id="adicao" value="Adição" required />
        </div>
        <div class="radio">
            <label for="subtracao">Subtração</label>
            <input type="radio" name="operacao" id="subtracao" value="Subtração" required />
        </div>
        <div class="radio">
            <label for="multiplicacao">Multiplicação</label>
            <input type="radio" name="operacao" id="multiplicacao" value="Multiplicação" required />
        </div>
        <div class="radio">
            <label for="divisao">Divisão</label>
            <input type="radio" name="operacao" id="divisao" value="Divisão" required />
        </div>
        <button>CALCULAR</button>
        <div id="ln"></div>
        <div class="titulo">
            <h1>RESULTADO<h1>

        </div>
        <div id="resultado"><?=$resultado?></div>
    </form>
</body>
</html>