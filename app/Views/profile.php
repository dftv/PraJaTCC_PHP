<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="<?= base_url()?>/favicon.ico" />
    <title>Profile</title>

    <link rel="stylesheet" href="<?= base_url()?>/css/universal.css">
    <link rel="stylesheet" href="<?= base_url()?>/css/profile.css">
    <link rel="stylesheet" href="<?= base_url()?>/css/navbar.css">
    <link rel="stylesheet" href="<?= base_url()?>/css/dropdown.css">
</head>

<body>
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
    
    <?php 
        $session = session();
        if($session->get('userLogged')) :
    ?>

    <nav class="container-chat grid-column">
        <a href="Chat">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-chat" viewBox="0 0 16 16">
                <path
                    d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>
        </a>
    </nav>

    <?php endif; ?>

    <div class="profile-container">

        <div class="profile-top">
            <div class="profile-icon-user">
                <img src="http://blog.rosavalverde.com.br/wp-content/uploads/2021/01/Tree-Of-Life-RealSteel-Center-gold_400x.png">
            </div>
    
            <div class="profile-header">
                SETE GUIAS<br>
                <small>Loja esotérica</small>
            </div>
        </div>

        <div class="profile-body">
            Anúncios:
            <div class="profile-list-adverts">

                <a href="#">
                    <div class="profile-adverts">
                        <div class="profile-adverts-image">
                            <img src="https://images.tcdn.com.br/img/img_prod/783343/filtro_dos_sonhos_apanhador_de_sonhos_vermelho_m_1295_1_20200929212906.jpeg">
                        </div>
                        <div class="profile-adverts-header">
                            Apanhador de sonhos <br>
                            <small>Primeiro diametro com 28cm e o segundo com 12cm </small><br>
                            <small>R$80,00</small>
                        </div>
                    </div>
                </a>
                
                <a href="#">
                    <div class="profile-adverts">
                        <div class="profile-adverts-image">
                            <img src="data:image/jpeg;base64,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">
                        </div>
                        <div class="profile-adverts-header">
                            Pulseira do humor<br>
                            <small>5 cores que mudam de acordo com seu humor</small><br>
                            <small>R$31,90</small>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="profile-adverts">
                        <div class="profile-adverts-image">
                            <img src="data:image/jpeg;base64,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">
                        </div>
                        <div class="profile-adverts-header">
                            Colar magnético Casal Sol e Lua<br>
                            <small></small><br>
                            <small>R$149,99</small>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <div class="container-bottom grid-column">
        <hr />
        PRA jÀ - TCC
    </div>

    <nav class="navbar-bottom grid-column">

        <?php 
            $session = session();
            if($session->get('userLogged')) :
        ?> 

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
        
        <a href="Chat">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-chat" viewBox="0 0 16 16">
                <path
                    d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>
        </a>
        
        <?php else : ?>

        <a href="Home">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-home" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                <path fill-rule="evenodd"
                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
            </svg>
        </a>

        <a href="Join">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-user" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
        </a>

        <?php endif; ?>

    </nav>

    

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