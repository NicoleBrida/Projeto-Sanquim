<?php include '..//layout/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas - Professor</title>
    <link rel="stylesheet" href="../css/notas.css" type="text/css">

</head>

<div id="conteudo">
    <div id="inicio">
        <h1>Notas</h1>
        <p>Certificar de salvar as alterações</p>
    </div>


<div id="tituloBusca">
    <div id="divBusca">
        <input type="text" id="txtBusca" placeholder="Turma 2..." />
        <button id="btnBusca">Buscar</button>
    </div>
</div>
<br>

<div id="cardcursos">
    <a href="../layout/notas1.php" id="card1">Turma 1 - T12025</a>
    <a href="#" id="card2">Turma 2 - T22025</a>
    <a href="#" id="card3">Turma 3 - T32025</a>
    <a href="#" id="card4">Turma 4 - T42025</a>
    <a href="#" id="card4">Turma 5 - T52025</a>

</div>

</div>


<?php include '..//layout/footer.php'; ?>