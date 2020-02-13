<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table {
                
                border-collapse: collapse;
                width: 100%;
            }
            th{
                font-weight: bold;
            }
            td, th {
                border: 1px solid black;
                text-align: center;
                padding: 8px;
            }
            /* even, odd ou usando a formula an+b*/
            tr:nth-child(even) {
                background-color: #eeeeee;
            }
            tr:hover { background-color:lightblue; color: #000066; }
        </style>

    </head>
    <body>
        <table>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
            </tr>
            <tr><td>Pedro</td><td>Silva</td></tr>
            <tr><td>Ana</td><td>Souza</td></tr>
        </table>
    </body>
</html>
