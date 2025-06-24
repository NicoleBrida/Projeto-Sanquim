<?php include '..//layout/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas 1 - Professor</title>
    <link rel="stylesheet" href="../css/notas1.css" type="text/css">

</head>

<div id="conteudo">
    <div id="inicio">
        <h1>Notas</h1>
        <p>Certificar de salvar as alterações</p>
    </div>


    <div id="tituloBusca">
        <h2>Turma 1 - T12025</h2>
    </div>
    <br>

    <div class="container-tabela-e-botao">
        <table>
            <tr>
                <th>Nome</th>
                <th>RA</th>
                <th>P1</th>
                <th>P2</th>
                <th>PI</th>

            </tr>
            <tr>
                <td>Amanda Ribeiro Cardoso</td>
                <td>2315410</td>
                <td><input id="P1" type="number"></td>
                <td><input id="P2" type="number"></td>
                <td><input id="PI" type="number"></td>
            </tr>
            <tr>
                <td>Bruno Rafael Souza Lima</td>
                <td>2298741</td>
                <td><input id="P1" type="number"></td>
                <td><input id="P2" type="number"></td>
                <td><input id="PI" type="number"></td>
            </tr>
            <tr>
                <td>Gabriel Oliveira Santos</td>
                <td>2307632</td>
                <td><input id="P1" type="number"></td>
                <td><input id="P2" type="number"></td>
                <td><input id="PI" type="number"></td>
            </tr>
            <tr>
                <td>Isabela Martins Rocha</td>
                <td>2320153</td>
                <td><input id="P1" type="number"></td>
                <td><input id="P2" type="number"></td>
                <td><input id="PI" type="number"></td>
            </tr>
            <tr>
                <td>Lucas Henrique Almeida Silva</td>
                <td>2301845</td>
                <td><input id="P1" type="number"></td>
                <td><input id="P2" type="number"></td>
                <td><input id="PI" type="number"></td>
            </tr>
            <tr>
                <td>Mariana Costa Ferreira</td>
                <td>2310967</td>
                <td><input id="P1" type="number"></td>
                <td><input id="P2" type="number"></td>
                <td><input id="PI" type="number"></td>
            </tr>
            <tr>
                <td>Vinícius da Silva Pereira</td>
                <td>2303288</td>
                <td><input id="P1" type="number"></td>
                <td><input id="P2" type="number"></td>
                <td><input id="PI" type="number"></td>
            </tr>
        </table>
        <div class="botoes-container">
            <a id="sair" href="../layout/notas.php">Sair</a>
            <button id="freq">Registrar Nota</button>
        </div>

    </div>

</div>


<?php include '..//layout/footer.php'; ?>