<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Componentes - php comSQ MyL</title>
</head>
<body>
    <div class="container">
        <h4 class="text-primary text-center">Cadastro de componentes - Pesquisa de dados</h4>
        <?php
        require "conexao.php";
        $sql="SELECT * FROM tbcomponente ORDER BY curso";
        $resultado=mysql_query($conexao, $sql) or die(mysqli_error($conexao));
        echo "<table>";
          echo "<tr>";
           echo "<th>Código</th>";
           echo "<th>Curso</th>";
           echo "<th>Componente</th>";
           echo "<th>Editar</th>";
        echo "</tr>";

        //Realizando a busca dos dados na tabela de componentes
        while($linha=mysqli_fetch_array($resultado))
        {
            $codigo    =   $linha["codigo"];
            $curso     =    $linha["curso"];
            $componente    =   $linha["componente"];

            // Exibindo os dados
            echo "<tr>";
             echo "<td> $codigo</td>";
             echo "<td> $curso</td>";
             echo "<td> $componente</td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>
</div>
</body>
</html>