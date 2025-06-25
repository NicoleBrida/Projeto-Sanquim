<?php include '..//layout/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma 1 - Professor</title>
    <link rel="stylesheet" href="../css/turma1.css" type="text/css">

</head>


<div id="conteudo">
    <div id="inicio">
        <h1>Frequência</h1>
        <p>Aqui você tem o controle de todas as suas turmas</p>
    </div>
</div>

<div id="tituloBusca">
    <h2>Turma 1 - T12025</h2>
</div>
<br>

<div class="tabelas-container">
    <!-- Tabela lateral -->
    <div class="tabela-lateral">
        <table>
            <tr>
                <th>Aulas Ministradas</th>
            </tr>
            <tr>
                <td>Aula: 02/03/2025</td>
            </tr>
            <tr>
                <td>Aula: 05/03/2025</td>
            </tr>
            <tr>
                <td>Aula: 10/03/2025</td>
            </tr>
        </table>
    </div>

    <!-- Tabela principal -->
    <div class="tabela-principal">
        <table>
            <tr>
                <th>Nome</th>
                <th>RA</th>
                <th>Presença</th>
            </tr>
            <tr>
                <td>Amanda Ribeiro Cardoso</td>
                <td>2315410</td>
                <td><input type="checkbox"></td>
            </tr>
            <tr>
                <td>Bruno Rafael Souza Lima</td>
                <td>2298741</td>
                <td><input type="checkbox"></td>
            </tr>
            <tr>
                <td>Gabriel Oliveira Santos</td>
                <td>2307632</td>
                <td><input type="checkbox"></td>
            </tr>
            <tr>
                <td>Isabela Martins Rocha</td>
                <td>2320153</td>
                <td><input type="checkbox"></td>
            </tr>
            <tr>
                <td>Lucas Henrique Almeida Silva</td>
                <td>2301845</td>
                <td><input type="checkbox"></td>
            </tr>
            <tr>
                <td>Mariana Costa Ferreira</td>
                <td>2310967</td>
                <td><input type="checkbox"></td>
            </tr>
            <tr>
                <td>Vinícius da Silva Pereira</td>
                <td>2303288</td>
                <td><input type="checkbox"></td>
            </tr>
        </table>
     

        <div class="formulario-aula">
            
             <label>Escolha sua matéria:</label>
                <select name="materia">
                    <optgroup label="Exatas">
                        <option>Matemática</option>
                        <option>Física</option>
                    </optgroup>
                    <optgroup label="Ciências">
                        <option>Química</option>
                    </optgroup>
                    <optgroup label="Humanas">
                        <option>Português</option>
                        <option>História</option>
                        <option>Geografia/Geopolítica</option>
                    </optgroup>
                </select>
            <input type="date" placeholder="dd/mm/aaaa">
            <textarea placeholder="Escreva sobre a aula ministrada"></textarea>
        </div>

        <div class="botoes-container">
            <a id="sair" href="../layout/turma.php">Sair</a>
            <button id="freq">Registrar</button>
        </div>
    </div>
</div>



<?php include '..//layout/footer.php'; ?>