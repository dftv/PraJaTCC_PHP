<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="<?= base_url()?>/favicon.ico" />
    <title>CHAT</title>

    <link rel="stylesheet" href="<?= base_url()?>/css/universal.css">
    <link rel="stylesheet" href="<?= base_url()?>/css/chat.css">
    <link rel="stylesheet" href="<?= base_url()?>/css/navbar.css">
    <link rel="stylesheet" href="<?= base_url()?>/css/dropdown.css">
</head>

<body>

    <?php 
        $session = session();
        if($session->get('userLogged')) :
    ?> 

    <nav class="navbar-top grid-row">
        <div class="navbar-logo">
            <a href="Home">
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

                    <?php 
                        $session = session();
                        if($session->get('userLogged')) :
                    ?>

                    <a class="btn-dropdown" href="Profile">Meu perfil</a>
                    <hr/>
                    <a class="btn-dropdown" href="User/leave">Sair</a>

                    <?php else : ?>
                    
                    <a class="btn-dropdown" href="Join">Fazer cadastro ou entrar</a>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="list-chat">
            <div class="info-list-chat">
                <a href="#">
                    <div class="icon-user-list-chat">
                        <img src="http://blog.rosavalverde.com.br/wp-content/uploads/2021/01/Tree-Of-Life-RealSteel-Center-gold_400x.png">
                    </div>
                </a>
                <div class="text-list-chat">
                    <a href="#">SETE GUIAS</a><br>
                    <a href="#"><small>Loja exoterica</small></a>
                </div>
            </div>
            <div class="info-list-chat">
                <a href="#">
                    <div class="icon-user-list-chat">
                        <img src="data:image/png;base64,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">
                    </div>
                </a>
                <div class="text-list-chat">
                    <a href="#">KAUE E KAUANA</a><br>
                    <a href="#"><small>Diversidades</small></a>
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
                    Oi
                </div>
            </div>

            <div class="container-sending">
                <form class="form">
                    <div class="container-form-input">
                        <input input class="form-input" id="message" type="text" name="message"
                            placeholder="Mensagem..." autocomplete="off" maxlength="250" required>
                    </div>

                    <button class="form-btn">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-bottom grid-column">
        <hr />
        PRA jÀ - TCC
    </div>

    <nav class="navbar-bottom grid-column">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-options" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </a>

        <a href="Home">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-home" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                <path fill-rule="evenodd"
                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
            </svg>
        </a>

        <a href="Profile">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-user" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
        </a>
    </nav>
    
    <?php else : ?>

    <div class="container grid-row">
            <div class="container-logo">
                <a href="Home">
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

            <div class="container-error grid-row">
                <label>Você não tem permissão para acessar essa página</label>
                <a class="btn grid-row" href="<?= base_url('Home')?>">VOLTAR</a>
            </div>
        </div>

        <div class="container-bg grid-column">
            <img class="bg-img" src="https://source.unsplash.com/1920x1080/?mercado,streetfair,agricultura">
        </div>

        <div class="container-bottom grid-column">
            <hr />
            PRA jÀ - TCC
        </div>

        <?php endif; ?>

    <script type="text/javascript" src="<?= base_url()?>/components/main.js"></script>

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