<?php 
$link = mysqli_connect("192.168.0.26","amilton","admin","escola");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="listar.css">
    <link rel="stylesheet" href="pesquisa.css">
</head>
<body>
    <?php 
    include("header.php");
    ?>
    <section class="lista">
        <div class="container">
            <div class="conteudo">
                <div class="top">
                    <h1>Lista de alunos</h1>
                </div>
                <div class="busca">
                    <form class="form-inline" method="GET" action="pesquisar.php">
                        <div class="form-group">
                            <label>Aluno:</label>
                            <input type="text" name="pesquisar" class="btn btn-default" placeholder="Pesquisar">
                            <button type="submit" class="btn btn-primary">Pesquisar</button>
                        </div>
                    </form>
                </div>
    <?php 
    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);

    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

    if(!isset($_GET['pesquisar']) or ($_GET['pesquisar'] == "")){
        header("Location: listar.php");
    }
    else{
        $valor_pesquisar = $_GET['pesquisar'];
    }
    $result_aluno = "SELECT * FROM aluno WHERE nome_alu LIKE '%$valor_pesquisar%'";
    $qnt_result_pg = 4;
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
    $result = "SELECT * FROM aluno WHERE nome_alu LIKE '%$valor_pesquisar%' LIMIT $inicio, $qnt_result_pg";

    $resultado = mysqli_query($link, $result);
    while($row_usuario = mysqli_fetch_assoc($resultado)){
        echo "<div class='colunas'>";
        echo "<div class='left'><p><p style='font-size: 1.1em;font-weight: 700;color: rgb(37, 179, 218)'>Aluno</p>Matricula: ".$row_usuario['matricula']."<br>";
        echo "Nome: ".$row_usuario['nome_alu']. "<br>";
        echo "CPF: ".$row_usuario['cpf_alu']. "<br>";
        echo "Data de nascimento: ".$row_usuario['data_nasc']. "<br>";
        echo "E-mail: ".$row_usuario['email_alu']."<br>";
        echo "Telefone: ".$row_usuario['telefone_alu']."<br>";
        echo "Sexo: ".$row_usuario['sexo_alu']."</p></div>";
        echo "<div class='right'><p><p style='font-size: 1.1em;font-weight: 700;color: rgb(37, 179, 218)'>Responsável</p>Nome: ".$row_usuario['nome_resp']. "<br>";
        echo "CPF: ".$row_usuario['cpf_resp']. "<br>";
        echo "E-mail: ".$row_usuario['email_resp']."<br>";
        echo "Telefone: ".$row_usuario['telefone_resp']."<br>";
        echo "Sexo: ".$row_usuario['sexo_resp']."</div></div></p><br>";
    }
    $sql_pg = "SELECT COUNT(matricula) AS num_result FROM aluno";
    $result_pg = mysqli_query($link, $sql_pg);

    $row_pg = mysqli_fetch_assoc($result_pg);
    //echo $row_pg['num_result'];

    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
    $max_links = 2;

    echo "<div class='paginacao'>";
    echo "<a href='pesquisar.php?pagina=1&pesquisar=$valor_pesquisar''>Primeira</a>";


    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina -1; $pag_ant++){
        if($pag_ant >= 1){
        echo "<a href='pesquisar.php?pagina=$pag_ant&pesquisar=$valor_pesquisar'>$pag_ant</a>";
    }
    }
    echo "<a href='pesquisar.php?pagina=$pagina&pesquisar=$valor_pesquisar' style='color: white; background: rgb(57, 141, 252)'>$pagina</a>";
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep ++){
        if($pag_dep <= $quantidade_pg){
        echo "<a href='pesquisar.php?pagina=$pag_dep&pesquisar=$valor_pesquisar''>$pag_dep</a>";
    }
    }
    echo "<a href='pesquisar.php?pagina=$quantidade_pg&pesquisar=$valor_pesquisar''>Ultima</a>";
    echo "</div>";
    ?>
    </div>
    </div>
    </section>
</body>
</html>

