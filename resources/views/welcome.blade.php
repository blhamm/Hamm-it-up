<!DOCTYPE html>
<html>
    <head>
        <title>Hamm-it-up</title>

        <link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Amatic SC', cursive;
            }
            h1 {
                font-weight: 700;
            }
            p {
                font-size: 48pt;
                padding: 0 10% 0 10%;
            }
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .pig {
                /*width: 376px;
                height: 377px;*/
                width: 50%;
                height: 30%;
                background: url(/imgs/pig.jpg) no-repeat;
                background-size: contain;
                position: absolute;
                left: -60px;
                bottom: -20px;
            }
             @media only screen 
                and (min-device-width: 320px) 
                and (max-device-width: 568px)
                and (-webkit-min-device-pixel-ratio: 2)
                and (orientation: portrait) {
                    .pig {
                    /*width: 376px;
                    height: 377px;*/
                    width: 50%;
                    height: 30%;
                    background: url(/imgs/pig.jpg) no-repeat;
                    background-size: contain;
                    position: absolute;
                    left: -105px;
                    top: -80px;
                }
            }
        </style>
        
    </head>
    <body>

        <div class="container">
            <div class="content">
                <div class="pig"></div>
                <img src="/imgs/logo.jpg" width="100%" height="auto" alt="Hamm-it-up" />
                <p>We're currently under construction check back soon! In the meantime check out our awesomeness on Facbook below!</p>
                <a href="https://www.facebook.com/HammItUp/"> 
                    <img 
                        src="https://thecliparts.com/wp-content/uploads/2016/05/free-facebook-clipart.png" 
                        alt="Hamm-It-Up Facebook"
                        width="15%"
                        height="auto"
                    >
                </a>
            </div>
        </div>
    </body>
</html>
