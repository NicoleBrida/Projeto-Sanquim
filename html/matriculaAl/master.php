<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link  href="../../css/master.css" rel="stylesheet">
    <title>Cadastro de aluno</title>
</head>
<body>
    <div class="row">
        <div class="col-md-4 lado-esquerdo" style="background-image: url(../../imagem/fundo_grande.png); height:1700px">
        <img src="../../imagem/logosamquim.webp" alt="logoSanquims"  class="logo-sanq">
        </div>
        <div class="col-md-8">
            <h1>Preencha os campos</h1>
            <?php 
            if(isset($page_content) && file_exists($page_content)) {
                include $page_content;
            } else {
                include 'index.html'; // Fallback padrão
            }
            ?>
        </div>
    </div>
</body>
</html>