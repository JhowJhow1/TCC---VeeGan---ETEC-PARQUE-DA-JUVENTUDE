<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>VeeGan</title>
    </head>
    <body>
        <!------------ Primeiro Manu!------------>
        <div class="noselect" id="navbar">
            <a href="index.php" id="logo">&nbsp;VeeGan&nbsp;</a>
            <div id="navbar-right">
                <a id="textmenu1" href="conteudo/veganismoUser.php">Veganismo</a>
                <a id="textmenu2" href="conteudo/vegetarianismoUser.php">Vegetarianismo</a>
                <a id="textmenu4" href="IndexUser.php"><?php echo $_SESSION['nome'];?></a>
            </div>
        </div>
        <!------------ Banner !------------>
        <!-- Alteração da Imagem na Url do CSS !-->
        <div class="banner noselect container">
            <h4>VeeGan</h4>
            <h1 class="sentence">
                Alimentação
                <div class="slidingVertical">
                    <span>saudável</span>
                    <span>sustentável</span>
                    <span>amigável</span>
                </div>
            </h1>
        </div>
        <!------------ Segundo Menu !------------>
        <div class="topnav noselect">
            <ul class="nav main">
                <li>
                    <a href="#nossotrab">Nosso Trabalho</a>
                </li>
                <li>
                    <a href="#forum">Fórum</a>
                </li>
                <li>
                    <a href="#sobreveegan">Sobre VeeGan</a>
                </li>
                <li>
                    <a href="ajuda.php">Fale Conosco</a>
                </li>
            </ul>
        </div>

        <!------------ Conteúdo 1 !------------>
        <div class="conteudo">
            <div id="texto">
                <h1>Be kind to every kind</h1>
                <p>
                    Como uma plataforma web, nosso propósito vai além de disponibilizar os conteúdos para os usuários. O principal objetivo da VeeGan, é trazer os principais benefícios dessa filosofia de vida, disponibilizando além dos conceitos, a verdade por trás do consumo de alimentos de origem vegetal. E através de uma linguagem mais simples para facilitar o compreendimento, nossa página propõe acima de qualquer coisa o conhecimento, resultando na diminuição do preconceito sobre a comunidade vegano/vegetariana existente.
                </p>
            </div>
        </div>

        <!------------ Conteúdo 3 !------------>
        <br />
        <br />
        <br />
        <div class="conteudo container espaco" id="nossotrab">
            <div class="some-page-wrapper">
                <div class="row">
                    <div class="column">
                        <div class="blue-column">
                            <h1>...um pouco mais</h1>
                            <p>
                                Nosso trabalho vai além do conteúdo, a nossa plataforma serve como suporte para a informar os interessados nesse estilo de vida, mas se você procura conhecer um pouco mais, ou ter um melhor aprofundamento sobre o tema, nós temos muito mais conteúdos disponibilizados em nossas mídias sociais, desde receitas até dicas e outras curiosidades.  
                            </p>
                            <br />
                            <div class="group-control">
                                <button class="botao1 pointer">
                                    <a href="#"><h2>Saiba +</h2></a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="green-column">
                            <img
                                class="Imagem1"
                                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e20a9241-f0f1-4088-9985-70215b59aaa0/dd0qeuy-df34c28e-a573-4784-aad2-fd5606d13b73.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvZTIwYTkyNDEtZjBmMS00MDg4LTk5ODUtNzAyMTViNTlhYWEwXC9kZDBxZXV5LWRmMzRjMjhlLWE1NzMtNDc4NC1hYWQyLWZkNTYwNmQxM2I3My5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.0s5JphP4sywww6NPXiis4QeYBuCicQzt1Y7mXSYTgXs"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
        <br />
        <!--------------- Banner2 !--------------->
        <!-- Alteração da Imagem na Url do CSS !-->
        <div class="banner2 noselect container">
            <a class="Ancorabaixa" id="forum"></a>
            <h4>Comunidade VeeGana</h4>
            <button class="card pointer" id="myBtn">
                <a href="indexForum.php"><h2>Ir para os Fóruns</h2></a>
            </button>
        </div>

        <!-- Sobre a VeeGan -->
        <div class="espaco conteudo">
            <a class="Ancora espaco" id="sobreveegan"></a>
            <h1>Sobre a VeeGan</h1>
            <p>
                Somos uma nova organização, com o foco de atender pessoas que tenham interesse, dúvidas ou curiosidade no veganismo/vegetarianismo, contamos com uma aplicação com todo tido de informação, dicas para desmistificar possíveis mitos sobre o veganismo e informar sobre o impacto de ser vegano para a indústria alimentícia e para o meio ambiente.
                <br><br>&nbsp;&nbsp;&nbsp;&nbsp;
                “Nós não precisamos comer animais para sobreviver e crescer”
                (Evanna Lynch,2016)
            </p>
        </div>
        <br />
        <br />
        <br />
        <br />

        <div class="conteudo">
            <a class="Ancora" id="faq"></a>
            <h1>Dúvidas frequentes</h1>
            <br />
            <button class="accordion">Como eu altero minha <a style="text-decoration: none; color: green;" class="link">senha</a>?</button>
            <div class="panel">
                <p>
                    Clicando no link <b style="text-decoration: none;">esqueci minha senha</b> encontrado na tela de login, ou acessando direitamente por <a href="Esqueciminhasenha.html" style="text-decoration: none; color: green;">aqui</a>. Você
                    receberá um email de confirmação para restaurar a senha.
                </p>
            </div>
            <button class="accordion">Como eu entro em contato com a <a style="text-decoration: none; color: green;" class="link">Veegan</a>?</button>
            <div class="panel">
                <p>A partir do Formulário presente na página inicial do site, na seção "Fale Conosco", que está somente disponível após realizar o cadastro. Ou apenas clique <a href="login.php" style="text-decoration: none; color: green;">aqui</a> para ser redirecionado.</p>
            </div>
            <button class="accordion">Quais são as fontes da <a style="text-decoration: none; color: green;" class="link">Veegan</a>?</button>
            <div class="panel">
                <p>
                    A VeeGan retirou toda a sua base de conteúdos de artigos acadêmicos visando a veracidade e o afastamente de qualquer tipo de informação infundada, sempre utilizando repertório de autoridade.
                </p>
            </div>
            <button class="accordion">Por que fazer o <a style="text-decoration: none; color: green;" class="link">cadastro</a>?</button>
            <div class="panel">
                <p>
                    A partir do cadastro na nossa plataforma, você abre possibilidades para participar do fórum, entrar em contato conosco e até mesmo permitir o recebimento de novidades sobre o veganismo/vegetarianismo, como por exemplo; a recomendação de novos documentários que saíram recentemente.
                </p>
            </div>
        </div>

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
