<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <title>CHAT</title>

    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/dropdown.css">
</head>

<body>
    <nav class="navbar-top grid-row">
        <div class="navbar-logo">
            <a href="index.php">
                <svg class="logo" viewBox="0 0 2349 744.8">
                    <g id="Art">
                        <rect class="bk" width="2349" height="744.8" />
                        <path class="text"
                            d="M149.5 47.4l100 0 200 0 100 0 0 100 0 100 0 100 -100 0 -200 0 0 200 -100 0 0 -200 0 -100 0 -100 0 -100zm300 200l0 -100 -200 0 0 100 200 0z" />
                        <path class="text"
                            d="M649.5 47.4l100 0 200 0 100 0 0 100 0 100 0 100 -100 0 -129.29 0 200 200 -141.42 0 -129.29 -129.29 0 129.29 -100 0 0 -200 0 -100 0 -100 0 -100zm300 200l0 -100 -200 0 0 100 200 0z" />
                        <path class="text"
                            d="M1149.5 47.4l100 0 200 0 100 0 0 100 0 100 0 100 0 200 -100 0 0 -200 -200 0 0 200 -100 0 0 -200 0 -100 0 -100 0 -100zm300 200l0 -100 -200 0 0 100 200 0z" />
                        <path class="text"
                            d="M1599.5 197.4l100 0 0 400 0 100 -100 0 -200 0 -100 0 0 -100 0 -150 100 0 0 150 200 0 0 -400z" />
                        <path class="text"
                            d="M1799.5 197.4l100 0 200 0 100 0 0 100 0 100 0 100 0 200 -100 0 0 -200 -200 0 0 200 -100 0 0 -200 0 -100 0 -100 0 -100zm300 200l0 -100 -200 0 0 100 200 0z" />
                        <rect class="text" x="149.5" y="597.4" width="1100" height="100" />
                        <path class="text" d="M1599.5 47.4l600 0 0 0 0 100 0 0 -600 0 0 0 0 -100 0 0z" />
                        <path class="accent" d="M1979.22 134.9l35.56 -75 64.44 0 -59.44 75 -40.56 0z" />
                    </g>
                </svg>
            </a>
        </div>

        <div class="container-search">
            <input class="input-search" type="text" name="search" placeholder="Pesquisar..." autocomplete="off">
            <button class="btn-search" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </div>

        <div class="container-tools grid-column">
            <div class="container-options">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-options" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
                <div class="dropdown-options">
                    -OPÇÕES
                </div>
            </div>

            <div class="container-user">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-user" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <div class="dropdown-user">
                    -OPÇÕES
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="list-chat">
            <div class="info-list-chat">
                <a href="#">
                    <div class="icon-user-list-chat">
                        <img src="https://i.pinimg.com/736x/6f/1e/fb/6f1efb3e2f7ddb6f6b9a3dbefabe0c67.jpg">
                    </div>
                </a>
                <div class="text-list-chat">
                    <a href="#">Daniel</a><br>
                    <a href="#"><small>descrição a jsadhus jasuidhuih asiduiash</small></a>
                </div>
            </div>
            <div class="info-list-chat">
                <a href="#">
                    <div class="icon-user-list-chat">
                        <img src="https://i.pinimg.com/736x/6f/1e/fb/6f1efb3e2f7ddb6f6b9a3dbefabe0c67.jpg">
                    </div>
                </a>
                <div class="text-list-chat">
                    <a href="#">Daniel</a><br>
                    <a href="#"><small>descrição a jsadhus jasuidhuih asiduiash</small></a>
                </div>
            </div>
            <div class="info-list-chat">
                <a href="#">
                    <div class="icon-user-list-chat">
                        <img src="https://i.pinimg.com/736x/6f/1e/fb/6f1efb3e2f7ddb6f6b9a3dbefabe0c67.jpg">
                    </div>
                </a>
                <div class="text-list-chat">
                    <a href="#">Daniel</a><br>
                    <a href="#"><small>descrição a jsadhus jasuidhuih asiduiash</small></a>
                </div>
            </div>
            <div class="info-list-chat">
                <a href="#">
                    <div class="icon-user-list-chat">
                        <img src="https://i.pinimg.com/736x/6f/1e/fb/6f1efb3e2f7ddb6f6b9a3dbefabe0c67.jpg">
                    </div>
                </a>
                <div class="text-list-chat">
                    <a href="#">Daniel</a><br>
                    <a href="#"><small>descrição a jsadhus jasuidhuih asiduiash</small></a>
                </div>
            </div>
            <div class="info-list-chat">
                <a href="#">
                    <div class="icon-user-list-chat">
                        <img src="https://i.pinimg.com/736x/6f/1e/fb/6f1efb3e2f7ddb6f6b9a3dbefabe0c67.jpg">
                    </div>
                </a>
                <div class="text-list-chat">
                    <a href="#">Daniel</a><br>
                    <a href="#"><small>descrição a jsadhus jasuidhuih asiduiash</small></a>
                </div>
            </div>
            <div class="info-list-chat">
                <a href="#">
                    <div class="icon-user-list-chat">
                        <img src="https://i.pinimg.com/736x/6f/1e/fb/6f1efb3e2f7ddb6f6b9a3dbefabe0c67.jpg">
                    </div>
                </a>
                <div class="text-list-chat">
                    <a href="#">Daniel</a><br>
                    <a href="#"><small>descrição a jsadhus jasuidhuih asiduiash</small></a>
                </div>
            </div>
        </div>

        <div class="current-chat">
            <div class="info-current-chat">
                <a href="#">
                    <div class="icon-user-current-chat">
                        <img src="https://i.pinimg.com/736x/6f/1e/fb/6f1efb3e2f7ddb6f6b9a3dbefabe0c67.jpg">
                    </div>
                </a>
                <div class="text-current-chat">
                    <a href="#">Daniel</a><br>
                    <a href="#"><small>descrição a jsadhus jasuidhuih asiduiash</small></a>
                </div>
            </div>

            <div class="posts">
                <div class="message-received">
                    Oi
                </div>
                <div class="message-sent">
                Eu já dei risada até a barriga doer,
Já nadei até perder o fôlego,
Já chorei até dormir
E acordei com o rosto desfigurado.
Já fiz cosquinha na minha irmã só pra ela parar de chorar,
Já me queimei brincando com vela.
Eu já fiz bola de chiclete e melequei todo o rosto.
Já conversei com o espelho.
E até já brinquei de ser bruxo.
Já quis ser astronauta,
Violonista, mágico, caçador e trapezista.
Já me escondi atrás da cortina e esqueci os pés pra fora,
Já passei trote por telefone,
Já tomei banho de chuva,
E acabei me viciando.
Já roubei beijo,
Já fiz confissões antes de dormir
Num quarto escuro pro melhor amigo.
Já confundi sentimentos,
Peguei atalho errado
E continuo andando pelo desconhecido.
Já raspei o fundo da panela de arroz carreteiro,
Já me cortei fazendo a barba apressado,
Já chorei ouvindo música no ônibus.
Já tentei esquecer algumas pessoas,
Mas descobri que essas são as mais difíceis de se
[esquecer.
Já subi escondido no telhado pra tentar pegar estrelas,
Já subi em árvore pra roubar fruta,
Já caí da escada de bunda.
Conheci a morte de perto,
E agora anseio por viver cada dia.
Já fiz juras eternas,
Já escrevi no muro da escola,
Já chorei sentado no chão do banheiro,
Já fugi de casa pra sempre,
E voltei no outro instante.
Já saí pra caminhar sem rumo,
Sem nada na cabeça, ouvindo estrelas.
Já corri pra não deixar alguém chorando,
Já fiquei sozinho no meio de mil pessoas
Sentindo falta de uma só.
Já vi pôr-do-sol cor-de-rosa e alaranjado,
Já me joguei na piscina sem vontade de voltar,
Já bebi uísque até sentir dormentes os meus lábios,
Já olhei a cidade de cima
E mesmo assim não encontrei meu lugar.
Já senti medo do escuro,
Já tremi de nervoso,
Já quase morri de amor,
Mas renasci novamente pro ver o sorriso de alguém
[especial.
Já acordei no meio da noite
E fiquei com medo de levantar.
Já apostei em correr descalço na rua,
Já gritei de felicidade,
Já roubei rosas num enorme jardim.
Já me apaixonei e achei que era para sempre,
Mas sempre era um "para sempre" pela metade.
Já deitei na grama de madrugada
E vi a Lua virar Sol,
Já chorei por ver amigos partindo,
Mas descobri que logo chegam novos,
e a vida é mesmo um ir e vir sem razão.
Foram tantas coisas feitas,
Momentos fotografados pelas lentes da emoção.
Guardados num baú, chamado coração.
E agora um formulário me interroga,
Encosta-me na parede e grita:
"- Qual sua experiência?”.
Essa pergunta ecoa no meu cérebro:
"experiência... experiência...”
Será que ser "plantador de sorrisos" é uma boa
experiência?
Não!
”Talvez eles não saibam ainda colher sonhos!”
                </div>
            </div>

            <div class="container-sending">
                <form class="form">
                    <div class="container-form-input">
                        <input input class="form-input" id="message" type="text" name="message" placeholder="Mensagem..." autocomplete="off" maxlength="250" required>
                    </div>
    
                    <button class="form-btn">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-bottom grid-column">
        <hr/>
        PRA jÀ - TCC
    </div>

    <nav class="navbar-bottom grid-column">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-options" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </a>
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-user" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
        </a>
    </nav>

    <script type="text/javascript" src="components/script.js"></script>

    <!---
                      #######  ##       ########
            #######   #     #  ##       ##    ##  #######
            #######   #        ##       ##    ##  #######
    #######           #######  ##       ########           #######
            #######        ##  ##       ##    ##  #######
            #######   #    ##  ##       ##    ##  #######
                      #######  #######  ##    ##
    -->
    
</body>

</html>