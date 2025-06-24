<?php include '../php/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Fechamento de Médias</title>
    <link rel="stylesheet" href="../css/fechamento.css" type="text/css">

</head>

<body>
    <div id="conteudo">
        <div id="inicio">
            <h1>Fechamento de Médias</h1>
            <p>Verificar as médias dos alunos</p>
        </div>
    </div>

<div class="layout">

  <input type="radio" name="painel" id="ensino1">
  <input type="radio" name="painel" id="ensino2">
  <input type="radio" name="painel" id="ensino3">
  <input type="radio" name="painel" id="vestibulinho">
  <input type="radio" name="painel" id="vestibular">
  <input type="radio" name="painel" id="empreendedorismo">
  <input type="radio" name="painel" id="fechar" checked>

  <div class="botoes">
    <label for="ensino1">1º- Ensino Médio</label>
    <label for="ensino2">2º- Ensino Médio</label>
    <label for="ensino3">3º- Ensino Médio</label>
    <label for="vestibulinho">Vestibulinho 1</label>
    <label for="vestibular">Vestibular 1</label>
    <label for="empreendedorismo">Empreendedorismo 1</label>
  </div>


  <div class="paineis">
    <div class="painel painel-ensino1">
      <label class="fechar" for="fechar">&times;</label>
      <h2>1º-Ensino Médio</h2>
        <table>
            <thread>
                <tr>
                    <th>Nome do Aluno</th>
                    <th>RA</th>
                    <th>Frenquência</th>
                    <th>Matemática</th>
                    <th>Português</th>
                    <th>História</th>
                    <th>Química</th>
                    <th>Situação</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>Aluno1</td>
                    <td>1111111</td>
                    <td>80%</td>
                    <td>7,3</td>
                    <td>6,1</td>
                    <td>9,5</td>
                    <td>7,5</td>
                    <td class="aprovado">Aprovado</td>
                </tr>
                <tr>
                    <td>Aluno2</td>
                    <td>2222222</td>
                    <td>40%</td>
                    <td>8,3</td>
                    <td>9,1</td>
                    <td>2,5</td>
                    <td>5,5</td>
                    <td class="reprovado">Reprovado</td>
                </tr>
                <tr>
                    <td>Aluno3</td>
                    <td>3333333</td>
                    <td>71%</td>
                    <td>6,3</td>
                    <td>10,0</td>
                    <td>9,5</td>
                    <td>6,5</td>
                    <td class="aprovado">Aprovado</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="painel painel-ensino2">
      <label class="fechar" for="fechar">&times;</label>
      <h2>2º-Ensino Médio</h2>
        <table>
            <thread>
                <tr>
                    <th>Nome do Aluno</th>
                    <th>RA</th>
                    <th>Frenquência</th>
                    <th>Matemática</th>
                    <th>Português</th>
                    <th>História</th>
                    <th>Química</th>
                    <th>Situação</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>Aluno1</td>
                    <td>1111111</td>
                    <td>80%</td>
                    <td>7,3</td>
                    <td>6,1</td>
                    <td>9,5</td>
                    <td>7,5</td>
                    <td class="aprovado">Aprovado</td>
                </tr>
                <tr>
                    <td>Aluno2</td>
                    <td>2222222</td>
                    <td>40%</td>
                    <td>8,3</td>
                    <td>9,1</td>
                    <td>2,5</td>
                    <td>5,5</td>
                    <td class="reprovado">Reprovado</td>
                </tr>
                <tr>
                    <td>Aluno3</td>
                    <td>3333333</td>
                    <td>71%</td>
                    <td>6,3</td>
                    <td>10,0</td>
                    <td>9,5</td>
                    <td>6,5</td>
                    <td class="aprovado">Aprovado</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="painel painel-ensino3">
      <label class="fechar" for="fechar">&times;</label>
      <h2>3º-Ensino Médio</h2>
        <table>
            <thread>
                <tr>
                    <th>Nome do Aluno</th>
                    <th>RA</th>
                    <th>Frenquência</th>
                    <th>Matemática</th>
                    <th>Português</th>
                    <th>História</th>
                    <th>Química</th>
                    <th>Situação</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>Aluno1</td>
                    <td>1111111</td>
                    <td>80%</td>
                    <td>7,3</td>
                    <td>6,1</td>
                    <td>9,5</td>
                    <td>7,5</td>
                    <td class="aprovado">Aprovado</td>
                </tr>
                <tr>
                    <td>Aluno2</td>
                    <td>2222222</td>
                    <td>40%</td>
                    <td>8,3</td>
                    <td>9,1</td>
                    <td>2,5</td>
                    <td>5,5</td>
                    <td class="reprovado">Reprovado</td>
                </tr>
                <tr>
                    <td>Aluno3</td>
                    <td>3333333</td>
                    <td>71%</td>
                    <td>6,3</td>
                    <td>10,0</td>
                    <td>9,5</td>
                    <td>6,5</td>
                    <td class="aprovado">Aprovado</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="painel painel-vestibulinho">
      <label class="fechar" for="fechar">&times;</label>
      <h2>Vestibulinho</h2>
       <table>
            <thread>
                <tr>
                    <th>Nome do Aluno</th>
                    <th>RA</th>
                    <th>Frenquência</th>
                    <th>Prova 1</th>
                    <th>Prova 2</th>
                    <th>Prova 3</th>
                    <th>Situação</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>Aluno1</td>
                    <td>1111111</td>
                    <td>80%</td>
                    <td>7,3</td>
                    <td>6,1</td>
                    <td>9,5</td>
                    <td class="aprovado">Aprovado</td>
                </tr>
                <tr>
                    <td>Aluno2</td>
                    <td>2222222</td>
                    <td>40%</td>
                    <td>8,3</td>
                    <td>9,1</td>
                    <td>2,5</td>
                    <td class="reprovado">Reprovado</td>
                </tr>
                <tr>
                    <td>Aluno3</td>
                    <td>3333333</td>
                    <td>71%</td>
                    <td>6,3</td>
                    <td>10,0</td>
                    <td>9,5</td>
                    <td class="aprovado">Aprovado</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="painel painel-vestibular">
      <label class="fechar" for="fechar">&times;</label>
      <h2>Vestibular</h2>
        <table>
            <thread>
                <tr>
                    <th>Nome do Aluno</th>
                    <th>RA</th>
                    <th>Frenquência</th>
                    <th>Prova 1</th>
                    <th>Prova 2</th>
                    <th>Prova 3</th>
                    <th>Situação</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>Aluno1</td>
                    <td>1111111</td>
                    <td>80%</td>
                    <td>7,3</td>
                    <td>6,1</td>
                    <td>9,5</td>
                    <td class="aprovado">Aprovado</td>
                </tr>
                <tr>
                    <td>Aluno2</td>
                    <td>2222222</td>
                    <td>40%</td>
                    <td>8,3</td>
                    <td>9,1</td>
                    <td>2,5</td>
                    <td class="reprovado">Reprovado</td>
                </tr>
                <tr>
                    <td>Aluno3</td>
                    <td>3333333</td>
                    <td>71%</td>
                    <td>6,3</td>
                    <td>10,0</td>
                    <td>9,5</td>
                    <td class="aprovado">Aprovado</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="painel painel-empreendedorismo">
      <label class="fechar" for="fechar">&times;</label>
      <h2>Empreendedorismo</h2>
        <table>
            <thread>
                <tr>
                    <th>Nome do Aluno</th>
                    <th>RA</th>
                    <th>Frenquência</th>
                    <th>Prova 1</th>
                    <th>Prova 2</th>
                    <th>Prova 3</th>
                    <th>Situação</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>Aluno1</td>
                    <td>1111111</td>
                    <td>80%</td>
                    <td>7,3</td>
                    <td>6,1</td>
                    <td>9,5</td>
                    <td class="aprovado">Aprovado</td>
                </tr>
                <tr>
                    <td>Aluno2</td>
                    <td>2222222</td>
                    <td>40%</td>
                    <td>8,3</td>
                    <td>9,1</td>
                    <td>2,5</td>
                    <td class="reprovado">Reprovado</td>
                </tr>
                <tr>
                    <td>Aluno3</td>
                    <td>3333333</td>
                    <td>71%</td>
                    <td>6,3</td>
                    <td>10,0</td>
                    <td>9,5</td>
                    <td class="aprovado">Aprovado</td>
                </tr>
            </tbody>
        </table>
    </div>

  </div>
</div>

<?php include '../php/footer.php'; ?>
