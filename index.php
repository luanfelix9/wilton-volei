<?php
    session_start();
    
    date_default_timezone_set('America/Maceio'); 
    
    $titulo = 'CBVD - LOGIN';
    $Ano = date('Y');
    $mes = date('m');
    $dia = date('d');

    include 'header.php'; 

?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div id="login-1" class="col d-none d-md-block">
                    <img src="http://cbvd.org.br/gerenciador/img/Login/esquerdaLogin.jpg" alt="Imagem Login">
                </div>
                <div id="login-2" class="col">
                    <!--Particulas-->
                    <div id="particles-js"></div>
                    <div class="container-p">
                        <div class="row">
                            <div class="col">
                                <h2>Login</h2>
                            </div>
                            <div class="col">
                                <div id="img">
                                    <img src="http://cbvd.org.br/gerenciador/img/Login/icone.png" alt="Icone login">
                                </div>
                            </div>
                        </div>
                        <div class="position">
                            <?php
                                if (isset($_SESSION['erro_digitado'])) {
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    Usuário ou senha incorreto!
                                </div>
                            <?php
                            }
                                unset($_SESSION['erro_digitado']);
                            ?>
                            <?php
                                if (isset($_SESSION['nao_login'])) {
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    Campo obrigatório não preenchido!
                                </div>
                            <?php
                            }
                                unset($_SESSION['nao_login']);
                            ?>
                        </div>
                        <form action="login-back.php" method="POST">
                            <div class="input-field">
                                <input type="email" id="email" placeholder="Digite seu Email" name="email" maxlength="50" style="min-width:240px;">
                            </div>
                            <br>
                            <div class="input-field">
                                <input type="password" id="senha" placeholder="Digite sua Senha" name="senha" maxlength="32" minlength="8" style="min-width:240px;">
                            </div>
                            <input type="submit" value="Entrar" name="entrar">
                        </form>
                        <div class="footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <a href="esqueciSenha.php">
                                            <p>Esqueceu sua senha?</p>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="criarUsuario.php">
                                            <p>Criar conta</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/particles.js"></script>
        <script src="js/app-login.js"></script>

<?php include 'footer.php';?>