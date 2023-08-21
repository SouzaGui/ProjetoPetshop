
<!-- Código PHP e HTML -->

<?php

    include "head.php";

?>

<!DOCTYPE html>
    <html lang="pt-br">
<head>
    <title>Pet's Admin</title>
</head>
    <body>
        <div>
        <a href="painel.php" class="voltar"><img src="../images/de-volta.png" alt="Voltar para Home"></a>
        </div>

<!-- Código PHP -->
<?php

    include "database.php";




if (isset($_POST['btnConsultar'])) {

    $sql = "SELECT id_user, login_user, login_sobrenome FROM sge_login_user;";
    $result = mysqli_query($conexao, $sql);


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id_user"]. " ". "Nome: " . $row["login_user"] . " " . $row["login_sobrenome"] . "<br>";

        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    mysqli_close($conexao);
}



if (isset($_POST['consultaProduto'])){
    $sql = "SELECT nome_produto, validade_produto FROM produtos;";
    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Produto: " . $row["nome_produto"] . " Data de Validade: " . $row["validade_produto"] . "<br>";

        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    mysqli_close($conexao);

}


if (isset($_POST['consultaFuncionarios'])){
    $sql = "SELECT nome_funcionario, sobrenome_funcionario, cargo_funcionario FROM funcionarios;";
    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Nome: " . $row["nome_funcionario"] . " " . $row["sobrenome_funcionario"] . " Cargo: ". $row["cargo_funcionario"] . "<br>";

        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    mysqli_close($conexao);

}




?>


