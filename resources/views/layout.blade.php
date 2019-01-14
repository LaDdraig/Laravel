<!doctype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <style>
            .is-done{
                text-decoration: line-through;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .title {
                font-size: 84px;
                color: white;
            }
            .title2 {
                font-size: 50px;
                color: white;
            }

            .text{
                font-size: 30px;
            }
            .wow {
                color: black;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            body{
                background-image: url("http://hdqwalls.com/wallpapers/wonder-woman-low-poly-art-3t.jpg");
                height: 657px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container bg">
            @yield('content')
        </div>
    </body>
</html>