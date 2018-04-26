<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Teleport App - Search</title>

        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/mdb.css') }}" rel="stylesheet" type="text/css" >
        
        <link rel="apple-touch-icon" sizes="180x180" href="{{{ asset('favicon/apple-touch-icon.png') }}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{{ asset('favicon/favicon-32x32.png') }}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{{ asset('favicon/favicon-16x16.png') }}}">
        <link rel="manifest" href="{{{ asset('favicon/manifest.json') }}}">
        <link rel="mask-icon" href="{{{ asset('favicon/safari-pinned-tab.svg') }}}" color="#fff">
        <link rel="shortcut icon" href="{{{ asset('favicon/favicon.ico') }}}">
        <meta name="msapplication-config" content="{{{ asset('favicon/browserconfig.xml') }}}">
        <meta name="theme-color" content="#222">
        <meta name="msapplication-navbutton-color" content="#222">
        <meta name="apple-mobile-web-app-status-bar-style" content="#222">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Quicksand', sans-serif;
                font-weight: 100;
                min-height: 100vh;
                margin: 0;
            }
            .subtitle {
                font-weight: 400;
                font-size: 20px;
                margin-top: 60px;
            }
            .full-height {
                min-height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 4rem;
            }

            .links > a {
                color: #636b6f;
                padding: 5px 18px 3px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }

            a {
                border-bottom: 2px solid transparent;
            }

            a:hover, a:focus {
                color: #1976D2;
                border-bottom: 2px solid #1976D2;
                transition: all 0.3s;
                transition: border 1s;
            }
            a:focus:hover {
                border-bottom: 2px solid #1976D2;
            }
            a:focus {
                border-bottom: 2px solid transparent;
            }
            thead > tr > th {
                font-weight: 500 !IMPORTANT;
                font-size: 16px;
            }

            tbody > tr > td {
                font-weight: 400 !IMPORTANT;
                font-size: 16px;
            }

            .tr-title {
                font-weight: 600 !IMPORTANT;
                font-size: 16px !IMPORTANT;
            }
            .table::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #F5F5F5;
                border-radius: 10px; }
                
            .table::-webkit-scrollbar {
                width: 12px;
                height: 12px;
                background-color: #F5F5F5; }
            
            .table::-webkit-scrollbar-thumb {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #E0E0E0; }
            .table {
                overflow-x: auto;
                width: fit-content;
                max-width: 100%;
                margin: 0 auto 40px;
                position: relative;
                display: block;
                max-height: 500px;
                padding-right: 6px
            }
            .content {
                max-width: 95%;
            }
            .links {
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Teleport Search App
                </div>

                <section class="" style="margin: 30px auto">
                    <form method="POST" action="/result">
                        {{ csrf_field() }}
                        <label for="query" style="color: black; font-weight: 400; font-size: 1.25rem; display: inline-block; margin-bottom: 6px;">Wpisz poszukiwane miasto:</label>
                        <br>
                        <input type="text" name="query" placeholder="Wroclaw" maxlength="25" required>
                        <button type="submit">Wyszukaj!</button>
                        @if(Session::has('error'))
                            <span style="color: #FF1744; font-weight: 600; margin-top: 6px; display: block"> {!! Session::get('error') !!} </span>
                        @endif
                    </form>
                    
                    
                    
                </section>

                <div class="links">
                    <a href="https://github.com/shadaxv/teleport" target="_blank">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
