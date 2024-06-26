<?php
include 'Conexao.php';

    $sql = "select * from funcionario;";
    $con = Conexao::conectar();
    $lstFunc = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Funcionarios</title>
</head>
<body>
    <table>
        <h1>Listar Funcionarios</h1>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Salario</th>
        </tr>

        <?php foreach($lstFunc as $func) {?>
            <tr>
                <td> <?php echo $func['id']; ?> </td>
                <td> <?php echo $func['nome']; ?> </td>
                <td> <?php echo $func['cargo']; ?> </td>
                <td> <?php echo $func['salario']; ?> </td>
            </td>        
        <?php } ?>


    </table>
</body>
</html>

