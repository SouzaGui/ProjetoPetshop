<!-- Código PHP e HTML, inserindo estilização de CSS -->



<?php

    include "head.php";

?>

<!DOCTYPE html>
    <html lang="pt-br">
<head>
    <title>Pet's Cadastro Funcionario</title>
</head>
    <body>
        <div>
            <a href="index.php" class="voltar"><img src="../images/de-volta.png" alt="Voltar para Home"></a>
        </div>



<!-- Código PHP -->

<?php

    include "database.php";

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];

    $cpf = $_POST["cpf"];
    $cargo =$_POST["cargo"];

    $sql = "INSERT INTO funcionarios (nome_funcionario, sobrenome_funcionario, email_funcionario, cpf_funcionario, cargo_funcionario) 
    VALUES ('$nome', '$sobrenome', '$email', '$cpf', '$cargo')";


        if(mysqli_query($conexao, $sql)){
             echo "Funcionario cadastrado com sucesso";
         }else {
             echo "Erro ao cadastrar";
         }



?>