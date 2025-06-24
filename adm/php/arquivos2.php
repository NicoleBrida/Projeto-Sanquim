<?php include '../php/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Arquivos</title>
    <link rel="stylesheet" href="../css/arquivos2.css" type="text/css">

</head>

<body>
    <div id="conteudo">

        <div id="inicio">
            <h1>Arquivos</h1>
            <p>Verificar se o envio de arquivos está ok</p>
            <div id="envio">
                <label>Escolha sua matéria:</label>
                <select name="materia">
                    <optgroup label="Ensino Médio">
                        <option>1º Ensino Médio</option>
                        <option>2º Ensino Médio</option>
                        <option>3º Ensino Médio</option>
                    </optgroup>
                    <optgroup label="Vestibulinho">
                        <option>Matutino</option>
                        <option>Vespertino</option>
                    </optgroup>
                    <optgroup label="Vestibular">
                        <option>Matutino</option>
                        <option>Noturno</option>
                    </optgroup>
                    <optgroup label="Empreendedorismo">
                        <option>Vespertino</option>
                        <option>Noturno</option>
                    </optgroup>
                </select>
                <input type="file" id="arquivo">
                <input type="submit" id="gravar" value="Enviar">
            </div>
        </div>

<!-- Inputs escondidos -->
<input type="checkbox" id="painel1">
<input type="checkbox" id="painel2">
<input type="checkbox" id="painel3">
<input type="checkbox" id="painel4">
<input type="checkbox" id="painel5">
<input type="checkbox" id="painel6">
<input type="checkbox" id="painel7">

<!-- Tabela com botões -->
<table name="listaTurmas">
    <tr>
        <th>Turma</th>
        <th>QTD</th>
    </tr>
    <tr>
        <td><label for="painel1" class="botao-turma">1º-Ensino Médio</label></td>
        <td>2</td>
    </tr>
    <tr>
        <td><label for="painel2" class="botao-turma">2º-Ensino Médio</label></td>
        <td>2</td>
    </tr>
    <tr>
        <td><label for="painel3" class="botao-turma">3º-Ensino Médio</label></td>
        <td>3</td>
    </tr>
    <tr>
        <td><label for="painel4" class="botao-turma">Vestibulinho</label></td>
        <td>3</td>
    </tr>
    <tr>
        <td><label for="painel5" class="botao-turma">Vestibular</label></td>
        <td>3</td>
    </tr>
    <tr>
        <td><label for="painel6" class="botao-turma">Empreendedorismo</label></td>
        <td>2</td>
    </tr>
    <tr>
        <td><label for="painel7" class="botao-turma">Documentos Administrativos</label></td>
        <td>3</td>
    </tr>
</table>

<!-- Painéis de arquivos -->
<div class="painel-arquivos">
    <div class="painel" id="caixa1">
        <h3>Arquivos - 1º Ensino Médio</h3>
        <ul>
            <li><a href="#">Arquivo 1.pdf</a></li>
            <li><a href="#">Arquivo 2.docx</a></li>
        </ul>
    </div>

    <div class="painel" id="caixa2">
        <h3>Arquivos - 2º Ensino Médio</h3>
        <ul>
            <li><a href="#">Arquivo 1.pdf</a></li>
            <li><a href="#">Arquivo 2.docx</a></li>
        </ul>
    </div>

    <div class="painel" id="caixa3">
        <h3>Arquivos - 3º Ensino Médio</h3>
        <ul>
            <li><a href="#">Arquivo 1.pdf</a></li>
            <li><a href="#">Arquivo 2.docx</a></li>
            <li><a href="#">Arquivo 3.docx</a></li>
        </ul>
    </div>

    <div class="painel" id="caixa4">
        <h3>Arquivos - Vestibulinho</h3>
        <ul>
            <li><a href="#">Arquivo 1.pdf</a></li>
            <li><a href="#">Arquivo 2.docx</a></li>
            <li><a href="#">Arquivo 3.pdf</a></li>
        </ul>
    </div>

    <div class="painel" id="caixa5">
        <h3>Arquivos - Vestibular</h3>
        <ul>
            <li><a href="#">Arquivo 1.pdf</a></li>
            <li><a href="#">Arquivo 2.docx</a></li>
            <li><a href="#">Arquivo 3.docx</a></li>
        </ul>
    </div>

    <div class="painel" id="caixa6">
        <h3>Arquivos - Empreendedorismo</h3>
        <ul>
            <li><a href="#">Arquivo 1.pdf</a></li>
            <li><a href="#">Arquivo 2.docx</a></li>
        </ul>
    </div>

    <div class="painel" id="caixa6">
        <h3>Arquivos - Administração</h3>
        <ul>
            <li><a href="#">Documento 1.pdf</a></li>
            <li><a href="#">Documento 2.docx</a></li>
            <li><a href="#">Documento 3.docx</a></li>
        </ul>
    </div>

</div>


</div>

<?php include '../php/footer.php'; ?>
