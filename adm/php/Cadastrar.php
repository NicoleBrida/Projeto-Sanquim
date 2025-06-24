<?php include '../php/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Cadastro</title>
    <link rel="stylesheet" href="../css/cadastrar.css" type="text/css">

</head>

<body>
    <div id="conteudo">
        <div id="inicio">
            <h1>Cadastrar</h1>
            <p>Aqui é possível cadastrar novas turmas</p>
        </div>
    </div>

    <div id="cardcursos">
    <button type="submit" id="novaTurma">Nova Turma</button>
    <table>
        <thead>
            <tr>
                <th>Turmas</th>
                <th>Qtd Máx de alunos</th>
                <th>Qtd Atual de aluno</th>
                <th>% Concluído</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1º-Ensino Médio</td>
                <td>40</td>
                <td>40</td>
                <td>49,8%</td>
            </tr>
            <tr>
                <td>2º-Ensino Médio</td>
                <td>40</td>
                <td>38</td>
                <td>49,8%</td>
            </tr>
            <tr>
                <td>3º-Ensino Médio</td>
                <td>40</td>
                <td>32</td>
                <td>49,8%</td>
            </tr>
            <tr>
                <td>Vestibulinho 1</td>
                <td>45</td>
                <td>42</td>
                <td>40,3%</td>
            </tr>
            <tr>
                <td>Vestibular 1</td>
                <td>45</td>
                <td>40</td>
                <td>40,3%</td>
            </tr>
            <tr>
                <td>Empreendedorismo 1</td>
                <td>40</td>
                <td>28</td>
                <td>24,9%</td>
            </tr>
        </tbody>
    </table>
</div>

<?php include '../php/footer.php'; ?>

