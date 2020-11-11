<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/StyleForms.css" />
      <title>Esqueci Minha Senha - VeeGan</title>
    </head>
    <body>
      <div class="container noselect">
        <form id="contact" action="" method="post">
          <h3>Alterar senha - VeeGan</h3><br>
          <h2>Informe seu email cadastrado</h2><br>
            <fieldset>
              <input placeholder="Endereço de email" type="email" tabindex="2" required><br>
              </fieldset>
                <fieldset>
                  <h2>Aqui vai o reCAPTCHA</h2><br>
                  <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando" onclick="avisar()">Enviar</button>
                </fieldset>
                <h4> Voltar para a 
                  <a href="index.php">Página Inicial</a></h4>
                </form>
              </div>
            </body>
          </html>

          <script type="text/javascript">
            function avisar(){
              alert("A nova senha foi enviada para o seu email. Por favor verifique e tente fazer o login novamente.")
            }
          </script>