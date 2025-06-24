
    <?php include '..//aluno/header.php'?>

    <title>Aluno - Secretaria Acadêmica</title>
    <link rel="stylesheet" href="../../css/historico.css" type="text/css">
    <link rel="stylesheet" href="../../css/secretariaAluno.css">
</head>
<body>


   
    <div id="conteudo">
        <div id="inicio">
            <h1>Secretaria Acadêmica</h1>
            <p>Informações sobre o curso</p>
        </div>
    </div>
    <div class="secretariaContainer">
        <div class="cardGrid">
            <a href="entrarContato.php">
                <div class="cardSec" onclick="abrirPopup('contato')">
                    <span>Entrar em Contato</span>
                </div>
            </a>

            <a href="solicitarDoc.php">
                <div class="cardSec" onclick="abrirPopup('documentos')">
                    <span>Solicitar Documentos</span>
                </div>
            </a>

            <a href="../../../html/matriculaAl/index.php">
                <div class="cardSec" onclick="abrirPopup('rematricula')">
                    <span>Fazer Rematrícula</span>
                </div>
            </a>
        </div>
    </div>

    <div id="ajuda">
        <a href="#" class="icone-ajuda">
            <span class="mdi--customer-service"></span>
        </a>
    </div>

    <footer class="fixar-rodape">
        <p> </p>
    </footer>
    </div>
    <?php include '..//aluno/footer.php'?>

</body>

</html>