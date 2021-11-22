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
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOYAAADbCAMAAABOUB36AAAA/FBMVEX////8sEBmLZH8rz38rTX8rjr8rDL8rC///vxkKpD/+/X8rDP8qyteG4z/9ur//Pj8tEliJY5WAIf8tk/+5cT/9en/+fD+3bL/sz38uFb9y4f+6c38u179yoRgII3w6/T9wnL8vmb+4r/+7dX+8uD91aH9zpD+7tn8uVv90JX92qv/tjlcIpR3SJ1aDor49fq5pMuCVaT9wm+GXqfSxd5xPZno3+6YeLOwl8XMvNnArdCpjcDooFCSb6/e1OZ1QZyWc7KDWqXhtpmqanNvNo7HhGh5QIzVkGCIToZYHZX0qUikZ3qRVoLFgmrPi2LYw8+se4+6eXCfYnyOY5tLxaQ9AAASRUlEQVR4nO1diXabSBY1qipAMpKQJYHQZrQvseUl3hM7nUnS+/RMz/z/vww7BVUFSALB6PiePqe7Y6zUVb16+ytOTt7xjne84x3vOEJcXeW9guxx/vL4pfR6nvcyMsXD9ZezaqNcHn7JeyXZ4er5Y7laLlnYHOt2nj9dVhslF5vjPJ5XTyV3I01UH/NeUCa4buAkS9XXvBeUBe4CO3mke3n+OAyQLDVujvBg3t0PAyRL5fIRatlPZ8GtNET2Lu81pY7zm2opzPJT3otKHXf3jTDLxtejO5jPjbDAlkrDt7xXlTZeNhSWRyey1xuCZKncODYte00oH1P/XOe9rJTxMiQl1qB5ZPrnrkpjOXzKe13p4rxEY1kuPeS9sFRxdUnYSxONj3kvLF38NKSxPDY3j6pkDZm9PCpr8kBxfiyZPa4w84Z6MA2Zfcl7ZWniiS6yBs1jklmWyJbKR5U0eKRr2SPz2t9YIlt4f3baUpI/zNI/dKvZS2+Ve0OcS7I+603FBM8+s0S2VNpQPL3bduqr3QNzHkGe668WsU/SvTwLZ+TTNTTOYLW7Q0ccBwDk9Rgpe6OE0g7KZfLxlqBnstxdUV8aPA0gSZ9GPffI3sxyiXxcR3Lkxx0cbRlwNlFhxX7qnL2ZpfI98XhF4ng1w0XvgJbAOeBHTL3B8NktUKKwNeRQP9NVb485dHmiJuOEXn1ly2ypTBSoRc2QELiFsToERA54PLkW9ZEIBUQ7my3J+CxI/6j80PK2kwMC9Ug9sY0m5WyKI1OtwdkBlr4VBj5PTqLJbZTMGu5B6OmxddrR4BBL3wZTGfj7yZGW4IGa5/JwFgxQ7M3k0O2hlp8YK2w70agS/vFzhJ41dzNYPVGh8zkHW35StDGaHE/YT2YIZiOYPFAc0QDy4dafFAOE8YTh43kZKbOhXLTufGWgaIbTwJjHaIYtOz0F7aOBt4+orrdRQKE9USSMJscHw4u7SD1rWhRfB409sUD6gTkkge8ikBsRo4FwHaQC73Pg/OAk4iHjNDkpEH9GOgf44awNeP9jiua7WwjSDO7Ea4zQlhpfjafaLV0KKLKiOXsmBJwlBzTcdt5EayDzdP7jdilDFPgMWMuNDBPTgAriOGFi/bG9ITGK1sDFtw8ABD8BNPPkw8AaBhdp+90L3fphVHji7OZ3OcSykBpIvA0KnG0N6pqtRc5iaZaGPzphmpNcGVExDW2m4cIYh3PmRCsJaJZ//hD6gGWSrOiBsSJoNtsnbc4JVhLQLP32S3A7+XXOlChQmuGTxYHpyeq0aSvLJDQbvwYcDCAXUM+OhTBLg6Yoob4teEloln77C99OvnCpAwMjRNDkputT1+dLRLP8/XcsNm8SMWv+mJIkQXOqATfNkYhmafiHv51SLh5QRam1e1NFUerUH6s8SVNTT71sTrx7YO+np4XySAO11wMNSZJg/COPBmuKOaPILBjpiENd++f3CWm6YosOLrLt9VLikXtoAEBQ6szDyQGJYMlxsuynID/Gue6u2P5pGU9a0ixTjuoIQtJUQNhU8a97QqNpwqX5KS4Qc3HxrWN+l4lKuLXUkvLKeKD5W4kz5ZdYfsA4hdE0X+LCag+Nf3YASsSyPUjTS1J6A47cUJOo7tlvwgVy4WqSu6S7aeiqvzrxFWEDU02n/OnDy93OPSm1WYenEEUd91sfUKxmgOZDMhVk8Wz8KxHLjkRxBp831c0+cwFqUyCJAsmWSXFE+RJsmrrz+wlVrcXzLEGXoioAidT4Vgf9Zp/G3LoqUyQTdsVomm7mK6mqtffzJcacKF1jLYAopT5ZXdfD/dr/anOKLoKDKJpIGDlqIqqIS+H5b11fjdssspOlybIfUrRXj/bfsXePUUsmz6AwY9JEvO51Db0l1kEWLv78XRAkbd6iKFNxJpjLCPtJD1+db3L/aZZan+RpOJ80moZtHWCH5zymuhBGo/HXhw6AQqcbPoFj2XYsT4PZzZehcyzKl/u3/4kawdP0WEhNC7l58OhE9JGwNvTzB2B7In7gKfY0V+dL+Oe/3XhjAo2f9mYZrGO6jAZY74Ejrqgb9lCe47Ne4Q39/u33DjDlQtZbU6VeqU1nfc+C47XP809l/0tMp5s8nMAz93Ma+kO49CSt4prW8y1MioPyxfe/baJIQNpo1MT9TsFzwq6e7rGJj/J9Kp25lSWxnWjQCsRh0sBVke0VB9xfjKlwsoh++/zBZGpQDaRxAed87MOnYWCsZU9z4oHm2OG7CbzKx3QgQYDcWCOylYRNdPjbrz8+f/jQ6QS/Xbvu8HB9eRaaUDpLaWpwSmZ90K2/BiQ7YqrMgUkeesK1pa710Lgo/fzHL59/N7m6+KBfPdx9uiwT80nlm3RY0nJ4uDDJjt/datoHyQ2st4lSCJSHF99//vOPv3/89dnAjx/f/vPfm9KGNmmW2miAqLP8dJMlsFmKK8n5MgByf/GKOhqWnGpjeHFx8ZsB41+NRpn+YdWUWJ4Q1gNnKdgnsTbydZLvYTPHFtJDNb15OopJCe3lhMM2HHpdJTvYlC1RLqU359EidZDLyFY3vYCLjyVcM9/ONCcDwoVMD0430CRUpxS8jOu2ju22SMOd9SAyaKK+lcOdcCFNjIUSLzvZzsTYpDqBpdEtimSpnzbp9CI/G7lNdL01Uh4Bpata2/mhhDAc9Eznyfl+RiUa1XTnecc0mujWEtku5Wd4CW+rLMKWLFOeTCIK0xYVK/xrUc8txDoVo/tq94DVcpMqKIdTsHJ8FfJg2j/1o8+sjGeaJtMBWf8CS8s4shwk7HSe3GUituUMZrOnYZvh6J8F06kXsEQ67aKOvZHJyGA49wO4Cu2PfSAdS9F9Sn8/s7kBbBFudbJ0DHszje3E83A3OyQSIjHM6NKEQZCn7RkM2KGLsd94Iu5juvtZ/Ziek1epVPyCfDsgnnZPuhLBMtRge/WaJs/qayoslak610fL5bJ/O1j12hZZFTeQdhVTjaQZnJ1Jk2cqLMXefCnwECFgACEooNHMFFE8/46syDnctBeGgBdn0+NZ/Wl/lspMlsI1XIPqaHyi+EElkM0NrrDiM+8xLtC29ZiKe1ve7D9jXxsQHB2mglbr+Z33VgKc0jMT/i0tkIq/ru7v9zWGe8de9TXHPm0IrVfuN2CfuogUkf99BLqK3r7sa1iGl3tnZacjWiHeA4Aj17W1Dl2lH/W0+4UEi3XGAd1HcMspKJ8WiNEonJcLsRJdSgKWHHcaKkq+lHbf0GHpeV+SRkSVaNkWS6uZdBGngWwIIZ7nj5vdTmjj7HH/kITSN8qmOTJP3DhWA9mAeqjUjpUmtyC5uUmhVtILDxFE0zTd8lm8BnJ4jkLtwFcv2xJtVL/uL69YrdZ0CWLXbWfuEiha9/lmuL3p6vlymFx0G8PL5zS8u7oGEc8LkiQ1DQiScBqpjezen26cxvIBIHkNx93HTSIz2qhuPqYTQIt9qT9XW1PPli/U4ExTCLbZjCogEfALvT7OX24MplHSWzY43ryklQsZj+tEm0p7QHeHLJrrrWlySKY1Pz9cv95vhrRiV7ncGG7uf7rO/MpBlXlKd6FpCO6c2iZ6/vb0enM/rFaHZm3PQKNh/E/5/ub16e0g1331KE17GM0tzqbza03W2OLVw9vd9afHjzcmXh+fXt7ezg931VePYUvtUa7kmtYF4JtFHFxkFTbtsju76hlFdDku4IAUrXLgxmFJvaAQUaitCzc8VKEN1XBgaSoTZtUzjigvd3v0qY/cMKW2vVu3NClEijoxUSTI81ahmFLjECveJOY3t2IKBak/ayW63+0gGFPcBDsZzWzrT0wVcnJ/MDO3VVwYmPTU2YBpdbLmScotsFKwLHuzFVUArYaMRQeADrQTionGGDLgSeRO7DJtPQWarmSo/mehvObIe4Qfb/cJsgtFW8AeUsY9x9O8Bslr4WSYbTlbO1nOIOwyRSWgtfMZcTwxm+q54M5JVly1s0nxYQd1weYGaxY9H0x1hBO1q7i7+HshAMslCkU7ec6ST25537YAa4S6xug8SA47j6uEjDPQ8rxvrzbzx1IkK+2x2vd0AqtOSmTP8rpppj3prddqr9eVnYXY+SCF0f+VFKeWNSHbUfK406symY9kJEDIC7zsrcS2KepettPOa5+sSZk4+LUdtZkmQIoDbxejIzunY2H3J9BO+IGvT6zNGZVAYyusL7y2YzhmwhmCpKUhgHZAkvUZjKgELq1ndouuLSodKxajWyXpcLp2oUXaRWirw+1zQg5Lu7JfofsYwsE8ITWmEugM1oj6bjydb4kRtR7scM5Y+UsPzjUrCjWTEge7tfFkzOq8PtClFvMEusWp0dYow6xxcIa0F6zftIuLmaObSLM4d99URlvKrTuKXqO0VjtPcIfQQeuEZt85YMp25xMg+9fqEeIuHeDK/kniVTsaUVyxK0sEvLJRlBAI2ftB0cNvoeU4pcuWkPCrAZJ7R/pt1G/A7IOxqM5KAs4xO6kMhCSaCHac6KOO7aVMPpe9qm1tp1DgwFGKvVG8DQJdp7TQxs4l0MlIJ/sUwrbRFew74zX18RJG7CiAQHezk5Mm9iDQKM2cWQcpgcQMQJAWnwSBoBsG11sjxFBGCHJdLwWrBvedV2gD3NnS9OMixEv97nyuc8wwxYXgv0ujth5JodDNvEBKGPhVk+ltyPeQairpjSS7RGhX9Ny/EEm3qmOj27ORFL2nCGDNIpXWTNcMZsLp6akgSJzWXU/8akltTki20BLJ6zKAnOXpdEojAI56WCGnPhnIMZ2LOn6YxIrS7rXW63Wv11bw5U67lItr+PHJhHS7UPiulRRRtxUQlNVwtaq97nM8MaiBrQrpvbgK13Qg0+TfNJIz0vGC7LeQ7AsrmQgknVpSXqi3vMDz0ARv/BcX1BxI0tZRN6yNdYEu+lbYNaDsp5zV64vMHkXUifj0dktdm1Bb0+k6bNcBlJqzHu1M1cYDgek/2NFll3KtppDR66iMo8kn++jKjHY9lMEUyf2uOlksFEsi6sp0Me5qXJRFtWmKtOAPgVUWRAcIrhKFemqTqZIAQLwAOlpTN9DXZEi90g6Dm36eUT4SQHmVelNGpU+7/4yEOI/Uuy5bZM15xD3oZ37GHGXPDfmYp1zbbYNEef1KP4Winw/Jdy4G1KZIKC1T7bPpJVJtSnTOb2tAzBBN6J4I4KUOvetvFyQ6lsq2SZEYBN/XIPZ0LnyYjcMud1vKQRtPxK3i0SAA7U43Ils5XY9kxCObq+ER8/Lt+ODvOdyn3IdWlKPHU5z0Wk/tjpqGE4K021Uvh/63SYJ0GPvuyDHlLlT+8CRiIcaXqBF3y3hGaFFKJsV7rdYJtRoZAlyOGTkzwIk0mkV6jaqDWmz7CK/X6A2qlq4haQKtMJ17Pmase4bdrZFm7AuGBIUypVPEa+tr0SlcII2m3lvBaJtJ1kOdWz+KhciqLZKsHm/WWJX1/hviOrtCKiB2rwGAYDSObP6yujKIrT5cwTY56PJoZjmhPHMv3GNsOG+1HNZDdVvnPoxioReSR4OgIJkvssZ8McaAivveuJBIB271KAqCa0SC1l0Tndwdqsx6bxsItZXDiJcI5wZc4hAYLCgCR59o8F/WLAZrFweofG0PLBOA+vSInnqBPz7CGXQQCknTtwYC680AtE5/qGF5zeC1EEUUWsVTojyzU5vSGi4Ex6sDXwQaFU8FeRUA9uLIfgIQ3rBgMbyAL7zzaPLMtRG3PiCZSKIFqpmnxTucLs0IvRGmiTRSUwUaw9BhOoC2gUMzqj8yRBM1adm4gDNVPG+vZtOMek1mkCadpfl2HOzNWlrRtlO03xWuRzwS8FkBx8qW46NnxXvFuiVsQmRSAzcoEQRULBMLixZxmhxiugYxtxcwRNYC1mVRuHesm1G1EF1/wALv6NeGLvzGTaFgRqUmG15ttNuCzc7E6FDl1quqoZymGVnQUawT6vs4QkxpR1y7heAsuyl2QUuI7b7yXNYEHS/trjM0APV01pcSak0u7hHPIwRJvPJFVxBM48J34589ILrxQ6Su1CaiaTgU4/lSEE6lQkVkrfg6rxs3J6R5Yr4Fs7fujoqkbsV4XeEGWslp2p/cLl7kGYkZvwvN/ztU7KxW8XzylGHXirJtoSwC7O4EeOw061Yoc4hZknwxNU1+8fICqcN84U0hU80pY6rBQpYu00ZtJBQvaZcBRL1w2Y9sMM+qh7tgKFhS4B3veMc73vGOd7zjHe/4P8L/ACBwYhud2GAIAAAAAElFTkSuQmCC">
                    </div>
                </a>
                <div class="text-list-chat">
                    <a href="#">KAUE & KAUANA</a><br>
                    <a href="#"><small>Diversidades</small></a>
                </div>
            </div>
            <div class="info-list-chat">
                <a href="#">
                    <div class="icon-user-list-chat">
                        <img src="https://images.creativemarket.com/0.1.0/ps/5672096/2627/1753/m1/fpnw/wm1/biker-.jpg?1547024729&s=f853cd91429153b8c61bbfc3aa9150a1">
                    </div>
                </a>
                <div class="text-list-chat">
                    <a href="#">MOTORS BIKE</a><br>
                    <a href="#"><small>Bicicletas motorizadas</small></a>
                </div>
            </div>
            <div class="info-list-chat">
                <a href="#">
                    <div class="icon-user-list-chat">
                        <img src="https://i.pinimg.com/originals/0b/bc/b4/0bbcb421f4c371f11251e5aa8429029d.jpg">
                    </div>
                </a>
                <div class="text-list-chat">
                    <a href="#">Jeff Encanador</a><br>
                    <a href="#"><small></small></a>
                </div>
            </div>
        </div>

        <div class="current-chat">
            <div class="info-current-chat">
                <a href="#">
                    <div class="icon-user-current-chat">
                        <img src="data:image/png;base64,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">
                    </div>
                </a>
                <div class="text-current-chat">
                    <a href="#">KAUE & KAUANA</a><br>
                    <a href="#"><small>Diversidades</small></a>
                </div>
            </div>

            <div class="posts">
                <div class="message-sent">
                    Gostaria de saber mais sobre o estado da prancha.
                    <img src="data:image/jpeg;base64,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">
                </div>
                <div class="message-received">
                    Ola, a prancha se encontra em perfeito estado.
                </div>
                <div class="message-received">
                    Só tendo algumas marcas de uso, mas as quilhas estão todas em ordem.
                </div>
                <div class="message-sent">
                    Sem problemas amigão. Aceita cartão de crédito?
                </div>
                <div class="message-received">
                    Poxa cara vou ficar te devendo, vou ficar te devendo essa, só ceito transação por pix.
                </div>
                <div class="message-sent">
                    Ok, vou dar uma olhada oque consigo fazer e já retorno.
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