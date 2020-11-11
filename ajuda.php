<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>VeeGan</title>
    </head>
    <body>
        <!------------ Primeiro Manu!------------>
        <div class="noselect" id="navbar">
            <a href="painel.php" id="logo">&nbsp;VeeGan&nbsp;</a>
            <div id="navbar-right">
                <a id="textmenu1" href="veganismo.php">Veganismo</a>
                <a id="textmenu2" href="vegetarianismo.php">Vegetarianismo</a>
                <a id="textmenu4" href="IndexUser.php"><?php echo $_SESSION['nome'];?></a>
            </div>
        </div>
        <!------------ Banner !------------>
        <!-- Alteração da Imagem na Url do CSS !-->
        <div class="banner5 noselect container">
            <h4>Nos dê um feedback.</h4>
        </div>
        <!------------ Segundo Menu !------------>
        <div class="topnav noselect">
            <ul class="nav main">
                <li>
                    <a href="#faleconosco">Fale Conosco</a>
                </li>
            </ul>
        </div>
        <br />

        <!-- Conteudo !-->

        <div class="conteudo noselect main">
            <br />
            <h1><a class="Ancora" id="faleconosco"></a>Fale Conosco！</h1>
            <form id="contact" action="ajuda.php" method="POST">
                <fieldset>
                    <p>Nome e Sobrenome</p>
                    <input name="nome" placeholder="Nome e Sobrenome" type="text" tabindex="1" required />
                </fieldset>
                <fieldset>
                    <p>Email</p>
                    <input name="email" placeholder="Endereço de Email" type="email" tabindex="2" required />&nbsp;&nbsp;
                    <select tabindex="4" required>
                        <option selected disabled>Selecione o Assunto...</option>
                        <option>Pergunta</option>
                        <option>Fanmail</option>
                        <option>Reportar Bug</option>
                        <option>Outros</option>
                    </select>
                </fieldset>
                <fieldset>
                    <p>Mensagem</p>
                    <textarea name="mensagem" placeholder="Sua mensagem..."></textarea>
                </fieldset>
                <fieldset>
                    <script type="text/javascript">
                        function nerdalert(){
                            alert("Mensagem enviada com sucesso.");
                        }
                    </script>
                    <div class="control-group">
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando" onclick="nerdalert()">Enviar</button><br>
                    </div>
                </fieldset>
            </form>
        </div>
        <br />

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
        </div>
        <script>
            // Sempre q o usuário scrollar X pixeis acontece... Animação da Navbar
            window.onscroll = function () {
                scrollFunction();
            };

            function scrollFunction() {
                if (document.body.scrollTop > 570 || document.documentElement.scrollTop > 570) {
                    //NavbarGeneral
                    document.getElementById("navbar").style.padding = "10px 10px 10px 15px;"; //Tamanho do background
                    document.getElementById("navbar").style.backgroundColor = "#78ED6F"; //Cor de Fundo do Background
                    //Mudança na Logo
                    document.getElementById("logo").style.fontSize = "25pt";
                    document.getElementById("logo").style.color = "black";
                    document.getElementById("logo").style.borderRight = "5px solid black";
                    document.getElementById("logo").style.borderBottom = "5px solid black";
                    document.getElementById("logo").style.borderTop = "2px solid white";
                    document.getElementById("logo").style.borderLeft = "2px solid white";
                    //Mudança no Texto
                    document.getElementById("textmenu1").style.fontSize = "13pt";
                    document.getElementById("textmenu2").style.fontSize = "13pt";
                    document.getElementById("textmenu3").style.fontSize = "13pt";
                    document.getElementById("textmenu4").style.fontSize = "13pt";
                    document.getElementById("textmenu1").style.color = "black";
                    document.getElementById("textmenu2").style.color = "black";
                    document.getElementById("textmenu3").style.color = "black";
                    document.getElementById("textmenu4").style.color = "black";
                } else {
                    //NavbarGeneral
                    document.getElementById("navbar").style.padding = "10px 15px 10px 15px;"; //Tamanho do Background
                    document.getElementById("navbar").style.backgroundColor = "rgba(0, 0, 0, 0)"; //Cor de Fundo do Background
                    //Mudança na Logo
                    document.getElementById("logo").style.fontSize = "30pt";
                    document.getElementById("logo").style.color = "white";
                    document.getElementById("logo").style.borderRight = "5px solid white";
                    document.getElementById("logo").style.borderBottom = "5px solid white";
                    document.getElementById("logo").style.borderTop = "2px solid rgba(0,0,0,0)";
                    document.getElementById("logo").style.borderLeft = "2px solid rgba(0,0,0,0)";
                    //Mudança no Texto
                    document.getElementById("textmenu1").style.fontSize = "19pt";
                    document.getElementById("textmenu2").style.fontSize = "19pt";
                    document.getElementById("textmenu3").style.fontSize = "19pt";
                    document.getElementById("textmenu4").style.fontSize = "19pt";
                    document.getElementById("textmenu1").style.color = "white";
                    document.getElementById("textmenu2").style.color = "white";
                    document.getElementById("textmenu3").style.color = "white";
                    document.getElementById("textmenu4").style.color = "white";
                }
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                //Animação da Âncora
                // Add smooth scrolling to all links
                $("a").on("click", function (event) {
                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $("html, body").animate(
                            {
                                scrollTop: $(hash).offset().top,
                            },
                            800,
                            function () {
                                // Add hash (#) to URL when done scrolling (default click behavior)
                                window.location.hash = hash;
                            }
                        );
                    } // End if
                });
            });
        </script>
        <script>
            var acc = document.getElementsByClassName("accordion"); //Animação do Acordeão
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>
    </body>
</html>
