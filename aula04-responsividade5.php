<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <style>
            * {
                box-sizing:border-box;
                font-size: 30px;
            }

            .left {
                background-color:lightcoral;
                padding:20px;
                float:left;
                width:33%;
            }

            .main {
                background-color:lightblue;
                padding:20px;
                float:left;
                width:33%; 
            }

            .right {
                background-color:lightgreen;
                padding:20px;
                float:left;
                width:33%; 
            }
            /*Se o tamanho da tela tiver até 800px então usa isso:*/
            @media screen and (max-width:800px) {
                .left, .main, .right {
                    width:100%; 
                }
            }
        </style>
    </head>
    <body>

        <h2>IFPE</h2>
        <p>a página vai mudar quando  número de pixels tiver 800 de comprimento.</p>

        <div class="left">
            <p>Campus afogados da ingazeira</p>
        </div>

        <div class="main">
            <p>Campus Pesqueira</p>
        </div>

        <div class="right">
            <p>Campus Belo Jardim</p>
        </div>
    </body>
</html>
