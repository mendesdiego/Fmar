<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=3.0,initial-scale=1.0" />

    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>FAMART - Faculdade Martins</title>
    <script src="js/jquery-1.5.2.min.js"></script>
    <script src="js/jquery.maskedinput-1.3.min.js"></script>
    <script>
    jQuery(function($){
     $("#campoData").mask("99/99/9999");
     $(".campoTelefone").mask("(99) 999-9999");
     $(".cpf").mask("999.999.999-99");
     $("#campoSenha").mask("***-****");
 });
    </script>

</head>
<body>
    <div id="containner"class="containner100">
       <!-- ###################################################### -->
       <?php include("topo.html") ?>
       <!-- ###################################################### -->
       <div id="banner"class="containner100">
        <?php include("banner.html") ?>
    </div>
    <!-- ###################################################### -->
    <div id="conteudo" >
        <div id="box950"class="box950 centraliza  "  >
            <div id="dentro-conteudo" class="centraliza cinza">
                <div id="bloco2login"class="f-left box950 centraliza ">
                    <h3 class="centraliza-texto ">Login</h3>
                    <hr class="box90porcento centraliza">
                    <form action="#">
                        <div id="login">
                            <form method="post" action="e.php">
                                <label for="">Usuário</label>
                                <input id="usuario" type="text" required="required" name="username">
                                <label for="">Senha</label>
                                <input id="senha" type="password" required="required" name="password">
                               <input id="Enviar" class="enviar" type="submit" name="Enviar">
                            </form>
                        </div>
                        <p id="abre-esqueci"class="f-left"><a href="http://parceria.famart.com.br/cursos/login/forgot_password.php">Não sei ou esqueci minha matrícula</a></p>
                    </form>
                </div>
                <div id="bloco2"class="f-left box950 centraliza">
                    <h3 class="centraliza-texto ">Cadastre-se</h3>
                    <hr class="box90porcento centraliza">
                    <form action="cadastro-moodle.php" method='post'>
                        <div id="cadastre-se" class="centraliza box90porcento">
                            <br>
                            <label for="">Usuário</label>
                            <input id="usuario" type="text" required="required" name="usuario" >
                            <label for="">Senha</label>
                            <input id="senha" type="password" required="required" name="senha">
                            <label for="">Nome</label>
                            <input id="nome" type="text" required="required"  name="nome">
                            <label for="">Sobrenome</label>
                            <input id="sobrenome" type="text" required="required" name="sobrenome">
                            <label for="">Email</label>
                            <input id="email" type="text" required="required" name="email">
                            <label for="">Cidade</label>
                            <input id="cidade" type="text" required="required" name="cidade">
                            <label for="">País</label>
                            <input id="pais" type="text" required="required" name="pais">
                            <label for="">Rg</label>
                            <input id="rg" type="text" required="required" name="rg">
                            <label for="">Cpf</label>
                            <input id="cpf" type="text" class="cpf" required="required"  name="cpf"  >
                            <label for="">Telefone</label>
                            <input class="campoTelefone" id="campoTelefone" type="text" required="required" name="telefone">
                            <label for="">Celular</label>
                            <input class="campoTelefone" id="campoTelefone" type="text" required="required" name="celular">
                            <input id"Enviar" class="enviar" type="submit" name="cadastro-moodle">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include ('rodape.php') ?>
</div>

<!-- ###################################################### -->

</body>
</html>