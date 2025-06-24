<?php include '../aluno/header.php'?>

    <title>Aluno - Secretaria Acadêmica</title>
<link rel="stylesheet" href="../../css/solicitarDoc.css">
</head>
<body>

    <div id="conteudo">
        <div id="inicio">
            <h1>Secretaria Acadêmica</h1>
            <p>Informações sobre o curso</p>
        </div>
    </div>
    <div class="container">
    <h1>Solicitação de Documentos</h1>
    <p class="descricao">Os arquivos solicitados serão enviados em até 7 dias em seu email institucional</p>

    <form class="formulario">
      <input type="text" placeholder="Nome completo" required />
      <input type="email" placeholder="E-mail para contato" required />
      <select required>
        <option value="">Selecione o tipo de documento</option>
        <option value="historico">Histórico Escolar</option>
        <option value="declaracao">Declaração de Matrícula</option>
        <option value="transferencia">Declaração de Transferência</option>
        <option value="outro">Outro</option>
      </select>
      <textarea placeholder="Informações adicionais ou observações (opcional)"></textarea>
      <button type="submit">Solicitar Documento</button>
    </form>
  </div>

    <div id="ajuda">
        <a href="#" class="icone-ajuda">
            <span class="mdi--customer-service"></span>
        </a>
    </div>

<?php include '..//aluno/footer.php'?>

