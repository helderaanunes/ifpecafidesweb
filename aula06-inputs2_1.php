<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="#" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <label for="texto">Text:</label>
                        <input type="text" id="texto" name="texto" />
                    </div>
                    <div>
                        Radio:
                        <input type="radio" id="masc" name="masculino"/>
                        <label for="masc">Masculino</label>
                    </div>
                    <div>
                        Checkbox:
                        <input type="checkbox" id="check" name="manterLogado"/>
                        <label for="check">Manter Logado</label>
                    </div>
                    <div>
                        <label for="senha">Password:</label>
                        <input type="password" id="senha" name="senha"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <label for="anexo">File:</label>
                        <input type="file" id="anexo" name="arquivo"/>
                    </div>
                    <div>
                        <label for="botao">Button:</label>
                        <input type="button" id="botao"value="Botão" />
                    </div>
                    <div>
                        <label for="limpar">Reset:</label>
                        <input type="reset" id="limpar" />
                    </div>
                    <div>
                        <label for="enviar">Submit:</label>
                        <input type="submit" id="enviar"/>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>