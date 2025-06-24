<?php include '..//aluno/header.php'?>


    <link rel="stylesheet" href="../../css/notaAluno.css">
    <title>Aluno - Notas</title>
</head>
<body>


<div id="conteudo">
    <div id="inicio">
        <h1>Notas</h1>
        <p>Continue sempre se esforçando!</p>
    </div>

    <!-- Atualidades -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Atualidades - ATL01</span></td>
                    <td><span class="textFre">Sua média atual: 7.2</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupATL')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupATL">
            <button type="button" class="bntFechar" onclick="closePopup('popupATL')"><img src="../../imagens/fechar.png" alt="Fechar"></button>
            
            <div class="popup-header">
                <h1>Atualidades - ATL01</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Prova 1:</span>
                    <span class="grade-value">7.5</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Prova 2:</span>
                    <span class="grade-value">6.8</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Prova 3:</span>
                    <span class="grade-value">7.0</span>
                    <span class="grade-weight">(20%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Atividades:</span>
                    <span class="grade-value">8.0</span>
                    <span class="grade-weight">(15%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Participação:</span>
                    <span class="grade-value">7.5</span>
                    <span class="grade-weight">(5%)</span>
                </div>
            </div>
            
            <div class="final-grade">
                <div class="grade-display">
                    <span class="grade-label">Média Final:</span>
                    <span class="grade-value">7.2</span>
                </div>
                <div class="status approved">
                    ● Situação: Aprovado (mínimo 6.0)
                </div>
            </div>
            
            <div class="popup-actions">
                <button class="action-btn export-btn">Ver Boletim</button>
            </div>
        </div>
    </div>

    <!-- Biologia -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Biologia - BIO09</span></td>
                    <td><span class="textFre">Sua média atual: 9.2</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupBIO')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupBIO">
            <button type="button" class="bntFechar" onclick="closePopup('popupBIO')"><img src="../../imagens/fechar.png" alt="Fechar"></button>
            
            <div class="popup-header">
                <h1>Biologia - BIO09</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Prova 1:</span>
                    <span class="grade-value">9.5</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Prova 2:</span>
                    <span class="grade-value">9.0</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Relatório:</span>
                    <span class="grade-value">10.0</span>
                    <span class="grade-weight">(20%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Atividades:</span>
                    <span class="grade-value">9.0</span>
                    <span class="grade-weight">(15%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Participação:</span>
                    <span class="grade-value">8.5</span>
                    <span class="grade-weight">(5%)</span>
                </div>
            </div>
            
            <div class="final-grade">
                <div class="grade-display">
                    <span class="grade-label">Média Final:</span>
                    <span class="grade-value">9.2</span>
                </div>
                <div class="status approved">
                    ● Situação: Aprovado (mínimo 6.0)
                </div>
            </div>
            
            <div class="popup-actions">
                <button class="action-btn export-btn">Ver Boletim</button>
            </div>
        </div>
    </div>

    <!-- Filosofia -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Filosofia - FIL67</span></td>
                    <td><span class="textFre">Sua média atual: 8.7</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupFIL')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupFIL">
            <button type="button" class="bntFechar" onclick="closePopup('popupFIL')"><img src="../../imagens/fechar.png" alt="Fechar"></button>
            
            <div class="popup-header">
                <h1>Filosofia - FIL67</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Prova 1:</span>
                    <span class="grade-value">9.0</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Prova 2:</span>
                    <span class="grade-value">8.5</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Ensaio:</span>
                    <span class="grade-value">9.0</span>
                    <span class="grade-weight">(20%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Atividades:</span>
                    <span class="grade-value">8.0</span>
                    <span class="grade-weight">(15%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Participação:</span>
                    <span class="grade-value">9.0</span>
                    <span class="grade-weight">(5%)</span>
                </div>
            </div>
            
            <div class="final-grade">
                <div class="grade-display">
                    <span class="grade-label">Média Final:</span>
                    <span class="grade-value">8.7</span>
                </div>
                <div class="status approved">
                    ● Situação: Aprovado (mínimo 6.0)
                </div>
            </div>
            
            <div class="popup-actions">
                <button class="action-btn export-btn">Ver Boletim</button>
            </div>
        </div>
    </div>

    <!-- Física -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Física - FI666</span></td>
                    <td><span class="textFre">Sua média atual: 8.1</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupFIS')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupFIS">
            <button type="button" class="bntFechar" onclick="closePopup('popupFIS')"><img src="../../imagens/fechar.png" alt="Fechar"></button>
            
            <div class="popup-header">
                <h1>Física - FI666</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Prova 1:</span>
                    <span class="grade-value">8.5</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Prova 2:</span>
                    <span class="grade-value">7.5</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Laboratório:</span>
                    <span class="grade-value">9.0</span>
                    <span class="grade-weight">(20%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Atividades:</span>
                    <span class="grade-value">8.5</span>
                    <span class="grade-weight">(15%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Participação:</span>
                    <span class="grade-value">8.0</span>
                    <span class="grade-weight">(5%)</span>
                </div>
            </div>
            
            <div class="final-grade">
                <div class="grade-display">
                    <span class="grade-label">Média Final:</span>
                    <span class="grade-value">8.1</span>
                </div>
                <div class="status approved">
                    ● Situação: Aprovado (mínimo 6.0)
                </div>
            </div>
            
            <div class="popup-actions">
                <button class="action-btn export-btn">Ver Boletim</button>
            </div>
        </div>
    </div>

    <!-- Geografia -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Geografia - GE012</span></td>
                    <td><span class="textFre">Sua média atual: 7.5</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupGEO')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupGEO">
            <button type="button" class="bntFechar" onclick="closePopup('popupGEO')"><img src="../../imagens/fechar.png" alt="Fechar"></button>
            
            <div class="popup-header">
                <h1>Geografia - GE012</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Prova 1:</span>
                    <span class="grade-value">7.0</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Prova 2:</span>
                    <span class="grade-value">8.0</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Trabalho:</span>
                    <span class="grade-value">7.5</span>
                    <span class="grade-weight">(20%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Atividades:</span>
                    <span class="grade-value">7.0</span>
                    <span class="grade-weight">(15%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Participação:</span>
                    <span class="grade-value">8.0</span>
                    <span class="grade-weight">(5%)</span>
                </div>
            </div>
            
            <div class="final-grade">
                <div class="grade-display">
                    <span class="grade-label">Média Final:</span>
                    <span class="grade-value">7.5</span>
                </div>
                <div class="status approved">
                    ● Situação: Aprovado (mínimo 6.0)
                </div>
            </div>
            
            <div class="popup-actions">
                <button class="action-btn export-btn">Ver Boletim</button>
            </div>
        </div>
    </div>

    <!-- Geometria -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Geometria - GEM17</span></td>
                    <td><span class="textFre">Sua média atual: 7.9</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupGEM')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupGEM">
            <button type="button" class="bntFechar" onclick="closePopup('popupGEM')"><img src="../../imagens/fechar.png" alt="Fechar"></button>
            
            <div class="popup-header">
                <h1>Geometria - GEM17</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Prova 1:</span>
                    <span class="grade-value">8.0</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Prova 2:</span>
                    <span class="grade-value">7.5</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Exercícios:</span>
                    <span class="grade-value">8.5</span>
                    <span class="grade-weight">(20%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Atividades:</span>
                    <span class="grade-value">7.5</span>
                    <span class="grade-weight">(15%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Participação:</span>
                    <span class="grade-value">8.0</span>
                    <span class="grade-weight">(5%)</span>
                </div>
            </div>
            
            <div class="final-grade">
                <div class="grade-display">
                    <span class="grade-label">Média Final:</span>
                    <span class="grade-value">7.9</span>
                </div>
                <div class="status approved">
                    ● Situação: Aprovado (mínimo 6.0)
                </div>
            </div>
            
            <div class="popup-actions">
                <button class="action-btn export-btn">Ver Boletim</button>
            </div>
        </div>
    </div>

    <!-- História -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">História - HIS90</span></td>
                    <td><span class="textFre">Sua média atual: 6.8</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupHIS')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupHIS">
            <button type="button" class="bntFechar" onclick="closePopup('popupHIS')"><img src="../../imagens/fechar.png" alt="Fechar"></button>
            
            <div class="popup-header">
                <h1>História - HIS90</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Prova 1:</span>
                    <span class="grade-value">6.5</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Prova 2:</span>
                    <span class="grade-value">7.0</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Trabalho:</span>
                    <span class="grade-value">7.5</span>
                    <span class="grade-weight">(20%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Atividades:</span>
                    <span class="grade-value">6.0</span>
                    <span class="grade-weight">(15%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Participação:</span>
                    <span class="grade-value">7.0</span>
                    <span class="grade-weight">(5%)</span>
                </div>
            </div>
            
            <div class="final-grade">
                <div class="grade-display">
                    <span class="grade-label">Média Final:</span>
                    <span class="grade-value">6.8</span>
                </div>
                <div class="status approved">
                    ● Situação: Aprovado (mínimo 6.0)
                </div>
            </div>
            
            <div class="popup-actions">
                <button class="action-btn export-btn">Ver Boletim</button>
            </div>
        </div>
    </div>

    <!-- Matemática -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Matemática - MAT35</span></td>
                    <td><span class="textFre">Sua média atual: 6.5</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupMAT')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupMAT">
            <button type="button" class="bntFechar" onclick="closePopup('popupMAT')"><img src="../../imagens/fechar.png" alt="Fechar"></button>
            
            <div class="popup-header">
                <h1>Matemática - MAT35</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Prova 1:</span>
                    <span class="grade-value">6.0</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Prova 2:</span>
                    <span class="grade-value">7.0</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Listas:</span>
                    <span class="grade-value">6.5</span>
                    <span class="grade-weight">(20%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Atividades:</span>
                    <span class="grade-value">6.0</span>
                    <span class="grade-weight">(15%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Participação:</span>
                    <span class="grade-value">7.0</span>
                    <span class="grade-weight">(5%)</span>
                </div>
            </div>
            
            <div class="final-grade">
                <div class="grade-display">
                    <span class="grade-label">Média Final:</span>
                    <span class="grade-value">6.5</span>
                </div>
                <div class="status approved">
                    ● Situação: Aprovado (mínimo 6.0)
                </div>
            </div>
            
            <div class="popup-actions">
                <button class="action-btn export-btn">Ver Boletim</button>
            </div>
        </div>
    </div>

    <!-- Português -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Português - PORTO</span></td>
                    <td><span class="textFre">Sua média atual: 8.3</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupPOR')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupPOR">
            <button type="button" class="bntFechar" onclick="closePopup('popupPOR')"><img src="../../imagens/fechar.png" alt="Fechar"></button>
            
            <div class="popup-header">
                <h1>Português - PORTO</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Prova 1:</span>
                    <span class="grade-value">8.5</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Prova 2:</span>
                    <span class="grade-value">8.0</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Redação:</span>
                    <span class="grade-value">9.0</span>
                    <span class="grade-weight">(20%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Atividades:</span>
                    <span class="grade-value">8.0</span>
                    <span class="grade-weight">(15%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Participação:</span>
                    <span class="grade-value">7.5</span>
                    <span class="grade-weight">(5%)</span>
                </div>
            </div>
            
            <div class="final-grade">
                <div class="grade-display">
                    <span class="grade-label">Média Final:</span>
                    <span class="grade-value">8.3</span>
                </div>
                <div class="status approved">
                    ● Situação: Aprovado (mínimo 6.0)
                </div>
            </div>
            
            <div class="popup-actions">
                <button class="action-btn export-btn">Ver Boletim</button>
            </div>
        </div>
    </div>

    <!-- Química -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Química - QUI90</span></td>
                    <td><span class="textFre">Sua média atual: 7.0</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupQUI')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupQUI">
            <button type="button" class="bntFechar" onclick="closePopup('popupQUI')"><img src="../../imagens/fechar.png" alt="Fechar"></button>
            
            <div class="popup-header">
                <h1>Química - QUI90</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Prova 1:</span>
                    <span class="grade-value">6.5</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Prova 2:</span>
                    <span class="grade-value">7.5</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Laboratório:</span>
                    <span class="grade-value">7.0</span>
                    <span class="grade-weight">(20%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Atividades:</span>
                    <span class="grade-value">7.0</span>
                    <span class="grade-weight">(15%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Participação:</span>
                    <span class="grade-value">7.5</span>
                    <span class="grade-weight">(5%)</span>
                </div>
            </div>
            
            <div class="final-grade">
                <div class="grade-display">
                    <span class="grade-label">Média Final:</span>
                    <span class="grade-value">7.0</span>
                </div>
                <div class="status approved">
                    ● Situação: Aprovado (mínimo 6.0)
                </div>
            </div>
            
            <div class="popup-actions">
                <button class="action-btn export-btn">Ver Boletim</button>
            </div>
        </div>
    </div>

    <!-- Sociologia -->
    <div class="cardFre"  style="margin-bottom: 9%;">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Sociologia - SOL80</span></td>
                    <td><span class="textFre">Sua média atual: 9.0</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupSOC')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupSOC">
            <button type="button" class="bntFechar" onclick="closePopup('popupSOC')"><img src="../../imagens/fechar.png" alt="Fechar"></button>
            
            <div class="popup-header">
                <h1>Sociologia - SOL80</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Prova 1:</span>
                    <span class="grade-value">9.5</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Prova 2:</span>
                    <span class="grade-value">8.5</span>
                    <span class="grade-weight">(30%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Pesquisa:</span>
                    <span class="grade-value">9.0</span>
                    <span class="grade-weight">(20%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Atividades:</span>
                    <span class="grade-value">9.5</span>
                    <span class="grade-weight">(15%)</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Participação:</span>
                    <span class="grade-value">9.0</span>
                    <span class="grade-weight">(5%)</span>
                </div>
            </div>
            
            <div class="final-grade">
                <div class="grade-display">
                    <span class="grade-label">Média Final:</span>
                    <span class="grade-value">9.0</span>
                </div>
                <div class="status approved">
                    ● Situação: Aprovado (mínimo 6.0)
                </div>
            </div>
            
            <div class="popup-actions">
                <button class="action-btn export-btn">Ver Boletim</button>
            </div>
        </div>
    </div>

<div id="popup-overlay" class="popup-overlay"></div>
    
<div id="ajuda">
    <a href="#" class="icone-ajuda">
        <span class="mdi--customer-service"></span>
    </a>
</div>

<?php include '..//aluno/footer.php'?>

<script>
 function openPopup(popupId) {
    let overlay = document.getElementById('popup-overlay');
    if (!overlay) {
        overlay = document.createElement('div');
        overlay.id = 'popup-overlay';
        overlay.className = 'popup-overlay';
        document.body.appendChild(overlay);
    }
    
    // Primeiro mostra o overlay, depois o popup
    overlay.classList.add('active');
    
    // Pequeno delay para garantir a renderização do overlay
    setTimeout(() => {
        document.getElementById(popupId).classList.add("open-popup");
    }, 10);
}

function closePopup(popupId) {
    const popup = document.getElementById(popupId);
    const overlay = document.getElementById('popup-overlay');
    
    popup.classList.remove("open-popup");
    
    // Espera a transição do popup terminar antes de esconder o overlay
    setTimeout(() => {
        overlay.classList.remove('active');
    }, 300);
}
</script>

