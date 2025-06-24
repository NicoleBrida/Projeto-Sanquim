<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Alunos</title>
    <link rel="stylesheet" href="../css/matricularaluno.css" type="text/css">

</head>

<body>
    <div id="conteudo">
        <div id="inicio">
            <h1>Matricular Aluno</h1>
            <p>Verificar os alunos cadastrados.</p>
        </div>
    </div>

    <form id="cardcursos">
            <label name="id">ID:</label>
            <input type="text" id="ra" placeholder="RA do aluno"><br>

            <label name="nome">Nome Completo:</label>
            <input type="text" id="nome" placeholder="Nome do Aluno"><br>

            <label name="nascimento">Data de Nascimento:</label>
            <input type="date" id="datadenascimento"><br>

            <label name="cpf">CPF:</label>
            <input type="text" id="cpf" placeholder="CPF do aluno"><br>

            <label name="rg">RG:</label>
            <input type="text" id="rg" placeholder="RG do aluno"><br>

            <label name="sexo">Sexo:</label>
            <input type="radio" name="sexo">Masculino
            <input type="radio" name="sexo">Feminino
            <input type="radio" name="sexo">Outro<br>

            <label name="endereco">Endereço:</label>
            <input type="text" id="endereco" placeholder="Endereço">
            <input type="text" id="n" placeholder="Nº"><br>

            <input type="text" id="bairro" placeholder="Bairro">
            <input type="text" id="cidade" placeholder="Cidade">
            <input type="text" id="uf" placeholder="UF"><br>

            <label name="cep">CEP:</label>
            <input type="text" id="cep" placeholder="CEP"><br>

            <label name="telefone">Telefone:</label>
            <input type="tel" id="telefone" placeholder="(xx)xxxxx-xxxx"><br>

            <label name="email">E-mail:</label>
            <input type="email" id="email" placeholder="xxxxx@xxxx.com"><br>

            <label name="responsavel">Responsável 1:</label>
            <input type="text" id="responsavel" placeholder="Nome do Responsável"><br>

            <label name="responsavel">Responsável 2:</label>
            <input type="text" id="responsavel" placeholder="Nome do Responsável"><br>

            <label name="curso">Curso:</label>
                <select name="curso">
                    <option>1º-Ensino Médio</option>
                    <option>2º-Ensino Médio</option>
                    <option>3º-Ensino Médio</option>
                    <option>Vestibulinho</option>
                    <option>Vestibular</option>
                    <option>Empreendedorismo</option>
                </select><br>

            <label name="periodo">Período:</label>
            <input type="text" id="periodo" placeholder="Ex: Matutino"><br>

            <label name="datamatricula">Data de Matrícula:</label>
            <input type="date" id="datamatricula"><br>

            <label name="situacao">Situação:</label>
            <input type="radio" name="situacao">Ativo
            <input type="radio" name="situacao">Trancado
            <input type="radio" name="situacao">Cancelado
            <input type="radio" name="situacao">Finalizado<br>

            <button>Matricular</button>
        </form>

<?php include 'footer.php'; ?>
