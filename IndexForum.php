<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>Fórum - VeeGan</title>
  </head>
  <body>
    <link rel="stylesheet" type="text/css" href="css/StyleForum.css">
      <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
      <div class="wrapper">
        <!------------- Navbar !----------------->
        <div class="navbaruser">
          <div class="left">
            <ul>
              <li>
                <a href="painel.php" id="logo" class="noselect" >&nbsp;VeeGan&nbsp;</a>
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
                    <!-- Imagem de Perfil !-->
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
            <!-------------- Navbar3 !----------------->

              <div class="topnav2">
                  <a class="hidden noselect" href="#home">a</a>
             <div class="search-container">
               <form action="/action_page.php">
              <input type="text" placeholder="Procurar Fóruns" name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
                </form></div>
               <div class="search-container">
              </div>
            </div>
                      <!-- Conteudo !-->
                            <div class="conteudo"><br>
                                <a class="Ancora"></a>
                                <h1 style="margin-bottom: 40px;">Fórum - VeeGan</h1>
                        <!-- Postagem1 !-->
              <div class="cartaopost">
                <div class="listapost">
                <ul>
                  <li>
                      <div class="ImagemPerfil2">
                      <img src="https://pbs.twimg.com/profile_images/1235054731963359232/xKAJEFPJ_400x400.jpg" alt="User" width="40">
                      </div></li>
                  <li><a class="link fonte1" style="text-decoration: none;" href="#">Ulazaki0129</a></li>
                  <li><div class="fonte1">Queria um sub do Veegan no Reddit.</div></li>
                  <li style="float: right;"><a href="conteudo/post1.php"class="botao1">Ver mais&nbsp;&nbsp;&nbsp;</a></li>
                </ul>
              </div>
              </div>
                        <!-- Postagem2 !-->
              <div class="cartaopost">
                <div class="listapost">
                <ul>
                  <li>
                      <div class="ImagemPerfil2">
                      <img src="https://pbs.twimg.com/profile_images/1235054731963359232/xKAJEFPJ_400x400.jpg" alt="User" width="40">
                      </div></li>
                  <li><a class="link fonte1" style="text-decoration: none;" href="#">Menino3k</a></li>
                  <li><div class="fonte1">Ser vegano custa no bolso?</div></li>
                  <li style="float: right;"><a href="conteudo/post2.php"class="botao1">Ver mais&nbsp;&nbsp;&nbsp;</a></li>
                </ul>
              </div>
              </div>
                      <!-- Postagem3 !-->
              <div class="cartaopost">
                <div class="listapost">
                <ul>
                  <li>
                      <div class="ImagemPerfil2">
                      <img src="https://pbs.twimg.com/profile_images/1235054731963359232/xKAJEFPJ_400x400.jpg" alt="User" width="40">
                      </div></li>
                  <li><a class="link fonte1" style="text-decoration: none;"  href="#">Luiz089</a></li>
                  <li><div class="fonte1">Existem restaurantes veganos?</div></li>
                  <li style="float: right;"><a href="conteudo/Post3.php"class="botao1">Ver mais&nbsp;&nbsp;&nbsp;</a></li>
                </ul>
              </div>
              </div>
                      <!-- Postagem4 !-->
              <div class="cartaopost">
                <div class="listapost">
                <ul>
                  <li>
                      <div class="ImagemPerfil2">
                      <img src="https://pbs.twimg.com/profile_images/1235054731963359232/xKAJEFPJ_400x400.jpg" alt="User" width="40">
                      </div></li>
                  <li><a class="link fonte1"style="text-decoration: none;"href="#">Victor001</a></li>
                  <li><div class="fonte1">Tenho ficado mais doente depois de virar vegano.</div></li>
                  <li style="float: right;"><a href="conteudo/Post4.php"class="botao1">Ver mais&nbsp;&nbsp;&nbsp;</a></li>
                </ul>
              </div>
              </div>              
                      <!-- Postagem5 ADICIONAR MARGEM NA ULTIMA POSTAGEM!-->
              <div class="cartaopost">
                <div class="listapost">
                <ul style="margin-bottom: 100px;">
                  <li>
                      <div class="ImagemPerfil2">
                      <img src="https://pbs.twimg.com/profile_images/1235054731963359232/xKAJEFPJ_400x400.jpg" alt="User" width="40">
                      </div></li>
                  <li><a class="link fonte1"style="text-decoration: none;"href="#">Menino3k</a></li>
                  <li><div class="fonte1">Tem algum doce vegano?</div></li>
                  <li style="float: right;"><a href="conteudo/Post5.php" class="botao1">Ver mais&nbsp;&nbsp;&nbsp;</a></li>
                </ul>
              </div>
              </div></div>
                                        <!------------ Rodapé !------------>
                                         <div class="espaco">
            <footer class="footer">
                <br />
                <div class="grid-container">
                    <br />
                    <div class="grid-item">
                        <br />
                        <ul>
                            <li>
                                <a href="https://www.facebook.com" target="self"><img class="imagemrodape" src="imgs/facebook.png" /></a>&nbsp;&nbsp;
                                <a href="https://www.twitter.com" target="self"><img class="imagemrodape" src="imgs/twitter.png" /></a>&nbsp;&nbsp;
                                <a href="https://www.instagram.com" target="self"><img class="imagemrodape" src="imgs/instagram.png" /></a><br />
                                <br />
                            </li>
                            <li><a href="#sobreveegan">Info</a>&nbsp;&nbsp;&nbsp;<a href="ajuda.html">Suporte</a>&nbsp;&nbsp;&nbsp;<a href="#">Telefone</a>&nbsp;&nbsp;&nbsp;<a href="#">Email</a><br /></li>
                            <li><a href="#">Termos de Uso</a>&nbsp;&nbsp;&nbsp;<a href="#">Política de Privacidade</a></li>
                        </ul>
                    </div>
                    <br />
                    <br />
                    <h7>&copy; 2020 VeeGan</h7>
                </div>
            </footer>

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


