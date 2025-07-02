<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
        border
    }
    a:hover {
        background-color: #ddd;
        padding: 5px;
    }
    div {
        margin-top: 20px;
    }
    table{
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 12px 15px;
        border: 1px solid #ddd;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
</style>
<body>
    

<?php
include 'conexao.php';


    // Consulta para listar registros
    $sql = "SELECT * FROM inventario_computadores";
    $result = mysqli_query($conn, $sql);

?>
    <h1>Consulta de Usuários</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Armazenamento</th>
                    <th>Memória</th>
                    <th>Processador</th>
                    <th>Possui placa de vídeo</th>
                    <th>Tipo da placa de vídeo</th>
                    <th>Tipo de sistema operacional</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td><a href='altera_inventario.php?id=".$row['id']."'>".$row['codigo_patrimonio']."</a></td>";

                    echo "<td>".$row['descricao']."</td>";
                    echo "<td>".$row['marca']."</td>";
                    echo "<td>".$row['modelo']."</td>";
                    echo "<td>".$row['armazenamento']."</td>";
                    echo "<td>".$row['memoria']."</td>";
                    echo "<td>".$row['processador']."</td>";
                    echo "<td>".$row['possui_placa_video']."</td>";
                    echo "<td>".$row['placa_video']."</td>";
                    echo "<td>".$row['sistema_operacional']."</td>";
                    echo "<td><a href='excluir_inventario.php?id=".$row['id']."'>Excluir</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div>
        <a href="index.html">Menu Principal</a>
    </div>
</body>
</html>