<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterracao do Usuario</title>
</head>
<body>
    <?php   
    include 'conexao.php';
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
    echo "<h1>Dados Recebidos</h1><br>";
    echo "ID: $id <br>";    
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
    if ($codigo &&  $marca && $descricao && $modelo && $armazenamento && $memoria && $processador && 
    $possui_placa_video && $placa_video && $sistema_operacional) {
        echo "<h2>Alterando usuário...</h2>";
    } else {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    $sql = "UPDATE inventario_computadores SET codigo_patrimonio='$codigo', descricao='$descricao', marca='$marca',
     modelo='$modelo', armazenamento = '$armazenamento', memoria= '$memoria', processador = '$processador', 
     possui_placa_video = '$possui_placa_video', placa_video= '$placa_video', sistema_operacional = '$sistema_operacional'
    WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "Usuário alterado com sucesso!";
    } else {
        echo "Erro ao alterar usuário: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
    <div>
        <a href="listar.php">Voltar para a lista de usuários</a>
    </div>
</body>
</html>