<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe os dados e salva ma tabela</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <h4 class="text-primary text-center">CADASTRO DE COMPONENTES - INSERÇÂO DE DADOS </h4>
    <?php 
    $curso = $_POST["curso"];
    $componente = $_POST["componente"];

    require "conexao.php"; //Importa o arquivo de conexão com o banco de  dados

    $sql = "INSERT INTO tbcomponente(codigo, curso, componente)";
    $sql.=" VALUES (null, '$curso','$componente')";
mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
echo "Componente inserido com sucesso!";
echo "<p><a href='index.html'>Retornar</a></p>";
    ?>
    
</body>
</html>