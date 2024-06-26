<?php
    include 'conexao.php';
    //include './Modelo/Funcionario.php';

    $sql = "Select * from funcionario;";
    $con = Conexao::conectar();
    $dados = $con->query($sql);

    /* foreach ($dados as $linha){
        $func = new \Modelo\Funcionario();
        $func->setId($linha['id']);
        $func->setNome($linha['nome']);
        $func->setCargo($linha['cargo']);
        $func->setSalario($linha['salario']);
        $lstFunc[] = $func;
    }
*/
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Funcionario</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Salario</th>
        </tr>

        <?php foreach($lstFunc as $func){ ?>
            <tr>
                <td> <?php echo $func->getId(); ?> </td>
                <td> <?php echo $func->getNome(); ?> </td>
                <td> <?php echo $func->getCargo(); ?> </td>
                <td> <?php echo $func->getSalario(); ?> </td>
            </tr>
        <?php } ?>
        
    </table>
</body>
</html>