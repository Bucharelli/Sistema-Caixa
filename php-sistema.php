<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comanda PHP</title>
    <link rel="stylesheet" href="Estilo da Tabela/table.css">

</head>
<body>

        <div class="titulo"><h1>Comanda</h1></div>

            <div class="fundo">

            <div class="descriçãoPS5">
            <?php
                $nome = $_POST['Nome'];
                $p1 = $_POST['Primeiro-produto'];
                $v1 = $_POST['Valor1'];
                $p2 = $_POST['Segundo-produto'];
                $v2 = $_POST['valor2'];
                $vp = $_POST['valorpago'];

                $vc = $v1 + $v2;
                $troco = $vp - $vc;

                echo "NOTA FISCAL DO SISTEMA<br>_________________________________";
                echo "<br><br>";
                echo "Nome: $nome";
                echo "<br>";
                echo "Quanto Gastou: $vp";
                echo "<br>";
                echo "Troco: $troco";
                echo "<br><br><br>";
                echo "DADOS GERAIS<br>_____________________";
                echo "<br><br>";
                print_r($_POST)
                ?>    
            </div>

    </div>
</body>
</html>