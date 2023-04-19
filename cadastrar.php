<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <?php 

    date_default_timezone_set('America/Sao_Paulo');
    include("header.php");
    ?>
    <section class="form-container">
        <div class="container">
            <form method="POST" action="cadastro.php">
            <h1>Cadastrar aluno</h1>
                <p>Preencha o formulário abaixo e entraremos em contato com você</p>

            <div class="input-single">
                <input type="text" name="nome_filho" id="nome-box" class="input" required>
                <label for="nome-box">Nome</label>
            </div>

            <div class="input-single">
                <input type="text" name="cpf_filho" id="cpf-box" class="input" required>
                <label for="cpf-box">CPF</label>
            </div>

            <div class="input-single">
                <input type="date" name="data_nasc" id="data-box" class="input" required>
                

            </div>

            <div class="input-single">
                <input type="email" name="email_filho" id="email-box" class="input" required>
                <label for="email-box">E-mail</label>
            </div>

            <div class="input-single">
                <input type="tel" name="telefone_filho" id="telefone-box" class="input" maxlength="9" required>
                <label for="telefone-box">Telefone</label>
            </div>

            <div class="input-single">
                <input type="text" name="sexo_filho" id="sexo-box" class="input" required>
                <label for="sexo-box">Sexo</label>
            </div>

            <h1>Cadastrar responsável</h1>
            
            <div class="input-single">
                <input type="text" name="nome_resp" id="nome-resp-box" class="input" required>
                <label for="nome-resp-box">Nome</label>
            </div>

            <div class="input-single">
                <input type="text" name="cpf_resp" id="cpf-resp-box" class="input" required>
                <label for="cpf-resp-box">CPF</label>
            </div>

            <div class="input-single">
                <input type="text" name="email_resp" id="email-resp-box" class="input" required>
                <label for="email-resp-box">E-mail</label>
            </div>

            <div class="input-single">
                <input type="text" name="telefone_resp" id="telefone-resp-box" class="input" required>
                <label for="telefone-resp-box">Telefone</label>
            </div>

            <div class="input-single">
                <input type="text" name="sexo_resp" id="sexo-resp-box" class="input" required>
                <label for="sexo-resp-box">Sexo</label>
            </div>


            <div class="btn">
                <input type="submit" value="Salvar">
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

