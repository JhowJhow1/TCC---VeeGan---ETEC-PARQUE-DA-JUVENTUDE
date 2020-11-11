<?php
session_start();
include('conexao.php');

    $msg = false;
    $novo_nome = 'anonimo.jpg';

    if(isset($_FILES['arquivo'])){
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()). $extensao; //define o nome do arquivo
        $diretorio = "upload/"; //define o diretorio para onde vai ser enviado

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //faz o upload

        $sql_code = "INSERT INTO arquivo (arq_codigo, arquivo) VALUES (null, '$novo_nome')";
        if(mysqli_query($conexao, $sql_code) == true){
            $msg = "arquivo enviado com sucesso :3"; 
        }else{
            $msg = "falha ao enviar o arquivo :(";
        }

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Usuário Pagina</title>
  </head>
  <body>
    <link rel="stylesheet" type="text/css" href="css/StyleUser.css">
      <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
      <div class="wrapper">
        <!------------- Navbar !----------------->
        <div class="navbaruser">
          <div class="left">
            <ul>
              <li>
                <a href="painel.php"id="logo" class="noselect" >&nbsp;VeeGan&nbsp;</a>
              </li>  
          </div>
          <div class="right">
            <ul>
              <li>
                <a href="#">
                  <p>Bem vindo,
                    <br>
                      <span><?php echo $_SESSION['nome'];?></span>&nbsp;
                    </p>
                      <i class="fas fa-angle-down"></i>
                    </a>
                    <!-- Menu Dropdown !-->
                    <div class="dropdown">
                      <ul>
                        <li>
                          <a href="IndexUser.php">
                            <i class="fas fa-user"></i> Perfil
                          </a>
                        </li>
                        <li>
                          <a href="logout.php">
                            <i class="fas fa-sign-out-alt"></i>Sair
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Navbar2!-->
                          <div class="topnav noselect">
                    <ul class="nav main">
                        <li>
                            <a href="painel.php">Sobre VeeGan</a>
                        </li>
                        <li>
                            <a href="ajuda.php">Fale Conosco</a>
                        </li>
                        <li>
                            <a href="painel.php">Fórum</a>
                        </li>
                    </ul>
                </div>
          <!------------ Banner !---------------->
          <div class="banner container">
            <div class="ImagemPerfil ImagemGrande"><br><br><br><br>
              <?php echo "<img src='upload/$novo_nome'>" ?>
              </div>
              <h1 style="text-align: center;padding: 20px; color:white;"><?php echo $_SESSION['nome'];?></h1>
              <!-------------- 3 Cartões do Banner !------------>
              <div class="grid-container">
                <div class="grid-item">
                  <div style="visibility: hidden;" class="card">
                    <p>UpVotes: <span id="output">0</span></p>
                  </div>
                </div>
                <div class="grid-item">
                  &nbsp;<button class="card pointer" id="myBtn">
                    <a href="#">Mudar Imagens</a>
                  </button>
                </div>
                <div class="grid-item">
                <button style="visibility: hidden;" class="card pointer">
                    <a href="ConfigUser.html">Configurações</a>
                  </button>
                </div>
              </div>
            </div>
            <!-------------- Navbar3 !----------------->

                <!-- Modal 1 -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <br>
    <form id="contact" action="IndexUser.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo" value="Selecionar Imagem de Perfil">
            <!--<div class="ImagemPerfil ImagemGrande">Vizualização da Imagem de Perfil:
              <img src="https://pbs.twimg.com/profile_images/1235054731963359232/xKAJEFPJ_400x400.jpg" alt="User" width="240" >
            </div>-->
    <Button style="visibility: hidden;" class="card2 pointer">Carregar Imagem de Fundo</Button>
            <!--<div class="PreviewImagem">Vizualização da Imagem de Fundo:
              <img src="https://i.pinimg.com/originals/af/4c/57/af4c571f547a74ae7a0dbda30a79c509.jpg" alt="User" width="240" >
            </div>-->
    <fieldset><br><br>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando">Salvar</button>
    </fieldset>
  </form>
    </div>
  </div>       

<script type="text/javascript">
  document.querySelector(".right ul li").addEventListener("click", function () {
  this.classList.toggle("active");
});
</script>
<script type="text/javascript">
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script type="text/javascript">
  //Codigo do botão do Upvote
  var i = 0

function Count() {
    document.getElementById("output").innerHTML = i++ + 1;
}
</script>
        </body>
      </html>


