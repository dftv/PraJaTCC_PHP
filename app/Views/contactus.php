<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="<?= base_url()?>/favicon.ico" />
    <title>CONTACT US</title>

    <link rel="stylesheet" href="<?= base_url()?>/css/universal.css">
    <link rel="stylesheet" href="<?= base_url()?>/css/serviceterms.css">
    <link rel="stylesheet" href="<?= base_url()?>/css/dropdown.css">
    <link rel="stylesheet" href="<?= base_url()?>/css/join.css">
</head>

<body>

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

            <div class="container-login grid-row">
                <label>MENSAGEM A EQUIPE</label>

                <?= form_open('User/login', array('class' => 'form grid-column'))?>

                <label>Comunicado:</label>
                <textarea style="margin: 0px; padding: 2%; resize: none; height: 500px; width: 100%;" required></textarea>

                <small>A resposta virá por meio do e-mail indicado no perfil</small>

                <button class="form-btn" type="submit">ENVIAR</button>
                <span class="error-login">
                    <?php
                        $session = session();
                        echo $session->get('errorLogin');
                    ?>
                </span>

                <?= form_close()?>
            </div>
        </div>

        <div class="container-bg grid-column">
            <img class="bg-img" src="https://source.unsplash.com/1920x1080/?mercado,streetfair,agricultura">
        </div>

        <div class="container-bottom grid-column">
            <hr />
            PRA jÀ - TCC
        </div>

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