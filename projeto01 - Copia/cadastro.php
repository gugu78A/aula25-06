<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #4CAF50;
        }
        a {
            text-decoration: none;
            color: #2196F3;
        }
        a:hover {
            text-decoration: underline;
        }
        div {
            margin-top: 20px;
        }
    </style>
    
</head>
<body>
    
<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo=$_POST['codigo'] ?? '';
    $descricao=$_POST['descricao'] ?? '';
    $marca = $_POST['marca'] ?? '';
    $modelo=$_POST['modelo'] ?? '';
    $armazenamento=$_POST['armazenamento'] ?? '';
     $memoria=$_POST['memoria'] ?? '';
      $processador=$_POST['processador'] ?? '';
       $possui_placa_video=$_POST['possui'] ?? '';
        $placa_video=$_POST['placa'] ?? '';
        $sistema_operacional= $_POST['sop'] ?? '';
    if ($codigo &&  $marca && $descricao && $modelo && $armazenamento && $memoria && $processador && 
    $possui_placa_video && $placa_video && $sistema_operacional)
    {

        echo "<h1>Dados Recebidos</h1><br>";
        echo "Codigo: $codigo <br>";
        echo "Descrição: $descricao <br>";
        echo "Marca: $marca <br>";
        echo "Modelo: $modelo <br>";
        echo "Armazenamento: $armazenamento <br>";
        echo "Memoria: $memoria <br>";
        echo "Processador: $processador<br>";
        echo "Possui ou não: $possui_placa_video<br>";
        echo "Placa de vídeo: $placa_video <br>";
        echo "Sistema Operacional: $sistema_operacional <br>";
    } else {
        echo "Todos os Campos São Obrigatórios";
    }


    $sql = "INSERT INTO inventario_computadores (codigo_patrimonio, descricao, marca, modelo, 
    armazenamento, memoria, processador, possui_placa_video, placa_video, sistema_operacional) 
    VALUES ('$codigo', '$descricao', '$marca', '$modelo', '$armazenamento', '$memoria', '$processador', '$possui_placa_video'
    , '$placa_video', '$sistema_operacional')";

    if (mysqli_query($conn, $sql)) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
<div>
    <a href="index.html">Menu Principal</a>
</div>




</body>
</html>
