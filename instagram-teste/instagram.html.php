<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="css/app.css">

        <!-- Styles -->

    </head>
    <body >

            <div class="instagram-wrapper">
                <div class="instagram-phone">
                    <img src="./img/instagram-celular.png" alt="celular">
            </div>
            <div class="instagram-continue">
                <div class="group">
                    <img src="./img/instagram-logo.png" class="instagram-logo">
                    <div class="profile-photo">
                        <img src="./img/perfil-instagram.jpg">
                    </div>
                    <a href="#" class="instagram-login">Continue como George</a>
                    <a href="#" class="instagram-logout">Remover Conta</a>
                </div>
                <div class="group">
                    <p class="not-account">Não é George?</p>
                    <p class="not-account">
                        <span class="link-blue">Alternar contas</span>
                        ou
                        <span class="link-blue">Inscreva-se</span>
                    </p>
                </div>
                <div class="get-the-app">
                    <p class="get-app">Baixe o aplicativo</p>
                    <div class="download">
                        <a href="#" class="app-download"></a>
                        <a href="#" class="app-download"></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
