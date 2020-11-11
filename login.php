<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/StyleForms.css" />
      <title>Login - VeeGan</title>
    </head>
    <body>
      <div class="container noselect">
        <form id="contact" action="entrar.php" method="post">
          <h3>Login <a href="index.php" style="text-decoration: none;">VeeGan</a></h3><br>
            <fieldset>
              <input name="usuario" placeholder="Nome de Usuário" type="text" tabindex="2" required>
              </fieldset>
              <fieldset>
                <input name="senha" placeholder="Senha" type="password" tabindex="4" required>
                </fieldset>
                <?php
                if(isset($_SESSION['nao_autenticado'])):
                ?>
                <div>
                  <h4 style="text-align: right;">Os dados inseridos estão incorretos</h4>
                </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
                <br>
                <fieldset>
                  <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando">Enviar</button>
                </fieldset>
                <h4><a href="Esqueciminhasenha.php">Esqueci minha Senha</a>.</h4>
                <h4> Ainda não é cadastrado? Cadastre-se 
                  <a href="cadastro.php"> Aqui</a>
                </h4>
                </form>
              </div>
            </body>
          </html>