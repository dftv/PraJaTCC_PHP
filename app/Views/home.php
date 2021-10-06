<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <title>HOME</title>

    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/dropdown.css">
</head>

<body>
    <nav class="navbar-top grid-row">
        <div class="navbar-logo">
            <a href="">
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

    <div class="container-bg">
        <img class="bg-img" src="https://source.unsplash.com/1920x1080/?mercado,streetfair,agricultura">
    </div>

    <div class="container">
        Qualquer coisa que tenha no site!!!
    </div>

    <div class="container-bottom grid-column">
        <hr/>
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

        <a href="Chat">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-chat" viewBox="0 0 16 16">
                <path
                    d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>
        </a>

        <a href="Profile">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-user" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
        </a>

        <?php else : ?>

        <a href="Join">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-user" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
        </a>

        <?php endif; ?>

    </nav>

    <script type="text/javascript" src="components/main.js"></script>

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