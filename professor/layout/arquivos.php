<?php include '..//layout/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivos - Professor</title>
    <link rel="stylesheet" href="../css/arquivos.css" type="text/css">
</head>


 <div id="conteudo">

        <div id="inicio">
            <h1>Arquivos</h1>
            <p>Verificar se o envio de arquivos está ok</p>
            <div id="envio">
                <label>Escolha sua turma:</label>
                <select name="turma">
                    <option>Todas as turmas</option>
                    <optgroup label="1° Semestre">
                        <option>Turma 6</option>
                        <option>Turma 5</option>
                    </optgroup>
                    <optgroup label="2° Semestre">
                        <option>Turma 4</option>
                    </optgroup>
                    <optgroup label="3° Semestre">
                        <option>Turma 3</option>
                        <option>Turma 2</option>
                        <option>Turma 1</option>
                    </optgroup>
                </select>
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
                <input type="file" id="arquivo">
                <input type="submit" id="gravar" value="Enviar">
            </div>
        </div>

        <div id="enviados">

            <div id="tituloBusca">
                <h2>Arquivos enviados:</h2>
                <div id="divBusca">
                    <input type="text" id="txtBusca" placeholder="Matemática..." />
                    <button id="btnBusca">Buscar</button>
                </div>
            </div>
            <br>

            <table>
                <tr>
                    <th>Nome</th>
                    <th>Matéria</th>
                    <th>Turma</th>

                </tr>
                <tr>
                    <td><button id="card1"><a href="../imagem/ebook-manual-do-iniciante.pdf" class="link-arquivo">
                                MatemáticaBásica.pdf
                            </a></button></td>
                    <td>Matemática</td>
                    <td>Turma 1</td>
                </tr>
                <tr>
                    <td> <button id="card2"><a href="../imagem/ebook-manual-do-iniciante.pdf" class="link-arquivo">
                                PortuguêsFeliz.pdf
                            </a></button></td>
                    <td>Português</td>
                    <td>Turma 3</td>

                </tr>
                <tr>
                    <td><button id="card3"><a href="../imagem/ebook-manual-do-iniciante.pdf" class="link-arquivo">
                                QuímicaOrgânica.pdf
                            </a></button></td>
                    <td>Química</td>
                    <td>Turma 4</td>

                </tr>
                <tr>
                    <td><button id="card4"><a href="../imagem/ebook-manual-do-iniciante.pdf" class="link-arquivo">
                                SegundaGuerraMundial.pdf
                            </a></button></td>
                    <td>História</td>
                    <td>Turma 6</td>

                </tr>
                <tr>
                    <td><button id="card5"><a href="../imagem/ebook-manual-do-iniciante.pdf" class="link-arquivo">
                                PrimeiraGuerraMundial.pdf
                            </a></button>
                    <td>História</td>
                    <td>Todas as turmas</td>

                </tr>
            </table>
        </div>
    </div>

<?php include '..//layout/footer.php'; ?>