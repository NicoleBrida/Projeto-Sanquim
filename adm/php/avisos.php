<?php include '../php/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Avisos</title>
    <link rel="stylesheet" href="../css/avisos.css" type="text/css">

</head>

<body>
    <div id="conteudo">
        <div id="inicio">
            <h1>Avisos</h1>
            <p>Verificar se o envio de arquivos está ok</p>
        </div>
    </div>

<div id="cardaviso1">
    <h2>Avisos para Alunos</h2>
    <a href="#caixaAluno"><button type="button">Novo Aviso</button></a>
</div>

<div id="cardaviso2">
    <h2>Avisos para Professores</h2>
    <a href="#caixaProfessor"><button type="button">Novo Aviso</button></a>
</div>

<div id="caixaAluno" class="caixadeaviso">
    <div class="conteudocaixa">
        <a href="#" class="fechar">&times;</a>
        <h2>Novo Aviso para Alunos</h2>
        <textarea placeholder="Digite o aviso para alunos..."></textarea>
        <br>
        <button type="submit">Publicar</button>
    </div>
</div>

<div id="caixaProfessor" class="caixadeaviso">
    <div class="conteudocaixa">
        <a href="#" class="fechar">&times;</a>
        <h2>Novo Aviso para Professores</h2>
        <textarea placeholder="Digite o aviso para professores..."></textarea>
        <br>
        <button type="submit">Publicar</button>
    </div>
</div>

<?php include '../php/footer.php'; ?>

