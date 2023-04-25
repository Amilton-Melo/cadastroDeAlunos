<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <?php 
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    date_default_timezone_set('America/Sao_Paulo');
    include("header.php");
    $conn = mysqli_connect("192.168.0.26","amilton","admin","escola");
    $matricula = filter_input(INPUT_GET, 'matricula', FILTER_SANITIZE_NUMBER_INT);
    $sql_edit = "SELECT * FROM aluno WHERE matricula = '$matricula'";
    $resultado = mysqli_query($conn, $sql_edit);
    $row_usuario = mysqli_fetch_assoc($resultado);

    ?>
    <section class="form-container">
        <div class="container">
            <form method="POST" action="edit.php"  style="width: 600px; height: 1000px ;">
            <h1>Editar aluno</h1>
                <div class="input-single">
                <input type="text" name="matricula" id="matricula" class="input" value="<?php echo $row_usuario['matricula'];?>" required>
                <label for="matricula">Matricula</label>
            </div>
            <div class="input-single">
                <input type="text" name="nome_filho" id="nome-box" class="input" value="<?php echo $row_usuario['nome_alu'];?>" required>
                <label for="nome-box">Nome</label>
            </div>

            <div class="input-single">
                <input type="text" name="cpf_filho" id="cpf-box" class="input" value="<?php echo $row_usuario['cpf_alu'];?>" required>
                <label for="cpf-box">CPF</label>
            </div>

            <div class="input-single">
                <input type="date" name="data_nasc" id="data-box" class="input" value="<?php echo $row_usuario['data_nasc'];?>" required>
                

            </div>

            <div class="input-single">
                <input type="text" name="email_filho" id="email_alu" class="input" value="<?php echo $row_usuario['email_alu'];?>" required>
                <label for="email_alu">E-mail</label> 
            </div>

            <div class="input-single">
                <input type="tel" name="telefone_filho" id="telefone-box" class="input" maxlength="9" value="<?php echo $row_usuario['telefone_alu'];?>" required>
                <label for="telefone-box">Telefone</label>
            </div>

            <div class="input-single">
                <input type="text" name="sexo_filho" id="sexo-box" class="input" value="<?php echo $row_usuario['sexo_alu'];?>" required>
                <label for="sexo-box">Sexo</label>
            </div>

            <h1>Editar responsável</h1>
            
            <div class="input-single">
                <input type="text" name="nome_resp" id="nome-resp-box" class="input" value="<?php echo $row_usuario['nome_resp'];?>" required>
                <label for="nome-resp-box">Nome</label>
            </div>

            <div class="input-single">
                <input type="text" name="cpf_resp" id="cpf-resp-box" class="input" value="<?php echo $row_usuario['cpf_resp'];?>" required>
                <label for="cpf-resp-box">CPF</label>
            </div>

            <div class="input-single">
                <input type="text" name="email_resp" id="email-resp-box" class="input" value="<?php echo $row_usuario['email_resp'];?>" required>
                <label for="email-resp-box">E-mail</label> 
            </div>

            <div class="input-single">
                <input type="text" name="telefone_resp" id="telefone-resp-box" class="input" value="<?php echo $row_usuario['telefone_resp'];?>" required>
                <label for="telefone-resp-box">Telefone</label>
            </div>

            <div class="input-single">
                <input type="text" name="sexo_resp" id="sexo-resp-box" class="input" value="<?php echo $row_usuario['sexo_resp'];?>" required>
                <label for="sexo-resp-box">Sexo</label>
            </div>


            <div class="btn">
                <input type="submit" value="Editar">
            </div>

        </form>

        
        </div>
    </section>
    
    <br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $("#telefone-box, #celular").mask("+55 (00) 0 0000-0000");
        $("#cpf-box").mask("000.000.000-00");

        $("#telefone-resp-box, #celular").mask("+55 (00) 0 0000-0000");
        $("#cpf-resp-box").mask("000.000.000-00");
    </script>

</body>
</html>

