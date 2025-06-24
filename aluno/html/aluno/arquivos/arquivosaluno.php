<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aluno - Arquivos</title>
    <link rel="stylesheet" href="../../../css/header.css" type="text/css">
    <link rel="stylesheet" href="../../../css/footer.css" type="text/css">

</head>

<body>


    <header class="top-bar">
        <input type="checkbox" id="check" hidden>

        <label for="check" class="checkbtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16" color="#379091">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg>
        </label>

        <div class="logo">
            <a href="../index.html"><img src="../../../imagens/logo_sanquim.webp" alt="Colégio Sanquim" /></a>
        </div>

        <nav class="nav-mobile">
            <a href="../index.php">Home</a>
            <a href="arquivosaluno.php">Arquivos</a>
            <a href="../frequencia.php">Frequência</a>
            <a href="../notasaluno.php">Notas</a>
            <a href="../secretariaac.php">Secretaria acadêmica</a>
            <a href="../../telap.html">Sair</a>
        </nav>
    </header>

    <div id="conteudo">
        <div id="inicio">
            <h1>Arquivos</h1>
            <p>Aqui é onde você encontra os arquivos de todas as suas disciplinas!</p>
        </div>
    </div>


            <?php 
            if(isset($page_content) && file_exists($page_content)) {
                include $page_content;
            } else {
                include 'index.html'; // Fallback padrão
            }
            ?>

    <div id="ajuda">
        <a href="#" class="icone-ajuda">
            <span class="mdi--customer-service"></span>
        </a>
    </div>

    <footer class="fixar-rodape">
        <p>  </p>
    </footer>
    </div>

</body>

</html>