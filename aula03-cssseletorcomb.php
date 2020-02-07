<!DOCTYPE html>
<html>
    <head>
        <style>
            div p {
                text-align: right;
            }
            div > p {
                color:red;
            }
            div + p{
                font-weight: bold;
            }
            div ~ p{
                background-color: lightskyblue;
            }
        </style>
    </head>
    <body>
        <p>Parágrafo fora do div</p>
        <div>
            <p>Parágrafo imediatamente filho do div</p>
            <section>
                <p>Parágrafo neto do div</p>
            </section>
        </div>
        <p>Parágrafo fora do div, porém sequente ao div</p>
        <p>o último parágrafo</p>
    </body>
</html>
