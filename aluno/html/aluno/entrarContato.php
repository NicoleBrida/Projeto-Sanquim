<?php include '..//aluno/header.php'?>

    <title>Aluno - Secretaria Acadêmica</title>
    <link rel="stylesheet" href="../../css/historico.css" type="text/css">
<link rel="stylesheet" href="../../css/secretariaAluno.css">
<link rel="stylesheet" href="../../css/entrarContato.css">
</head>

<body>


    <div id="conteudo">
        <div id="inicio">
            <h1>Fale conosco</h1>
            <p>Informações sobre o curso</p>
        </div>
 
    <div class="container">
    <h1>Fale com a Secretaria</h1>
    <p class="descricao">Respondemos em até 7 dias! Fique atento em seu email institucional</p>

    <form class="formulario">
      <input type="text" placeholder="Seu nome completo" required />
      <input type="email" placeholder="Seu e-mail institucional" required />
        <input type="text" placeholder="Sua turma" required />
          <input type="email" placeholder="Seu período" required />
      <select required>
        <option value="">Selecione o assunto</option>
        <option value="">Dúvida</option>
        <option value="">Denuncia</option>
        <option value="reclamacao">Reclamação</option>
        <option value="sugestao">Sugestão</option>
        <option value="outro">Outro</option>
      </select>
      <textarea placeholder="Digite sua mensagem aqui..." required></textarea>
      <button type="submit">Enviar Mensagem</button>
    </form>
  </div>


    <div id="ajuda">
        <a href="#" class="icone-ajuda">
            <span class="mdi--customer-service"></span>
        </a>
    </div>

<?php include '..//aluno/footer.php' ?>
    </div>

</body>

</html>