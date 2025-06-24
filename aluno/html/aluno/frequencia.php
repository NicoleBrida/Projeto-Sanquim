<?php include '..//aluno/header.php'?>
    <title>Aluno - Frequência</title>
    <link rel="stylesheet" href="../../css/frequenciaAlu.css" type="text/css">
</head>
<body>


<div id="conteudo">
    <div id="inicio">
        <h1>Frequência</h1>
        <p>Sua prença em cada aula faz diferença</p>
    </div>

    <!-- Lista de cards -->
    <!-- Atualidades -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Atualidades - ATL01</span></td>
                    <td><span class="textFre">Frequência: 83%</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupATL')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupATL">
            <button type="button" class="bntFechar" onclick="closePopup('popupATL')"><img src="../../imagens/fechar.png"></button>
         <div class="popup-header">
                <h1>Atualidades - ATL01</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Aulas lessionadas:</span>
                    <span class="grade-value">30</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Aulas assistidas:</span>
                    <span class="grade-value">25</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Quantidade de faltas:</span>
                    <span class="grade-value">5</span>
                </div>
                </div>
            <div class="progress-container">
                <div class="progress-bar" style="width: 83%;">83%</div>
            </div>
            <p>Fique atento o mínimo de presença é 75%</p>
        </div>
    </div>

    <!-- Biologia -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Biologia - BIO09</span></td>
                    <td><span class="textFre">Frequência: 85%</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupBIO')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupBIO">
            <button type="button" class="bntFechar" onclick="closePopup('popupBIO')"><img src="../../imagens/fechar.png"></button>
            <div class="popup-header">
                <h1>Biologia - BIO09</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Aulas lessionadas:</span>
                    <span class="grade-value">30</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Aulas assistidas:</span>
                    <span class="grade-value">26</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Quantidade de faltas:</span>
                    <span class="grade-value">4</span>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" style="width: 85%;">85%</div>
            </div>
            <p>Fique atento o mínimo de presença é 75%</p>
        </div>
    </div>

    <!-- Filosofia -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Filosofia - FIL67</span></td>
                    <td><span class="textFre">Frequência: 78%</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupFIL')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupFIL">
            <button type="button" class="bntFechar" onclick="closePopup('popupFIL')"><img src="../../imagens/fechar.png"></button>
            <div class="popup-header">
                <h1>Filosofia - FIL67</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Aulas lessionadas:</span>
                    <span class="grade-value">30</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Aulas assistidas:</span>
                    <span class="grade-value">23</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Quantidade de faltas:</span>
                    <span class="grade-value">7</span>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" style="width: 78%;">78%</div>
            </div>
            <p>Fique atento o mínimo de presença é 75%</p>
        </div>
    </div>

    <!-- Física -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Física - FI666</span></td>
                    <td><span class="textFre">Frequência: 90%</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupFI')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupFI">
            <button type="button" class="bntFechar" onclick="closePopup('popupFI')"><img src="../../imagens/fechar.png"></button>
            <div class="popup-header">
                <h1>Física - FI666</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Aulas lessionadas:</span>
                    <span class="grade-value">30</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Aulas assistidas:</span>
                    <span class="grade-value">27</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Quantidade de faltas:</span>
                    <span class="grade-value">3</span>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" style="width: 90%;">90%</div>
            </div>
            <p>Fique atento o mínimo de presença é 75%</p>
        </div>
    </div>

    <!-- Geografia -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Geografia - GE012</span></td>
                    <td><span class="textFre">Frequência: 80%</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupGE')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupGE">
            <button type="button" class="bntFechar" onclick="closePopup('popupGE')"><img src="../../imagens/fechar.png"></button>
            <div class="popup-header">
                <h1>Geografia - GE012</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Aulas lessionadas:</span>
                    <span class="grade-value">30</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Aulas assistidas:</span>
                    <span class="grade-value">24</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Quantidade de faltas:</span>
                    <span class="grade-value">6</span>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" style="width: 80%;">80%</div>
            </div>
            <p>Fique atento o mínimo de presença é 75%</p>
        </div>
    </div>

    <!-- Geometria -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Geometria - GEM17</span></td>
                    <td><span class="textFre">Frequência: 88%</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupGEM')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupGEM">
            <button type="button" class="bntFechar" onclick="closePopup('popupGEM')"><img src="../../imagens/fechar.png"></button>
            <div class="popup-header">
                <h1>Geometria - GEM17</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Aulas lessionadas:</span>
                    <span class="grade-value">30</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Aulas assistidas:</span>
                    <span class="grade-value">26</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Quantidade de faltas:</span>
                    <span class="grade-value">4</span>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" style="width: 88%;">88%</div>
            </div>
            <p>Fique atento o mínimo de presença é 75%</p>
        </div>
    </div>

    <!-- História -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">História - HIS90</span></td>
                    <td><span class="textFre">Frequência: 82%</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupHIS')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupHIS">
            <button type="button" class="bntFechar" onclick="closePopup('popupHIS')"><img src="../../imagens/fechar.png"></button>
            <div class="popup-header">
                <h1>História - HIS90</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Aulas lessionadas:</span>
                    <span class="grade-value">30</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Aulas assistidas:</span>
                    <span class="grade-value">25</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Quantidade de faltas:</span>
                    <span class="grade-value">5</span>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" style="width: 82%;">82%</div>
            </div>
            <p>Fique atento o mínimo de presença é 75%</p>
        </div>
    </div>

    <!-- Matemática -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Matemática - MAT35</span></td>
                    <td><span class="textFre">Frequência: 87%</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupMAT')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupMAT">
            <button type="button" class="bntFechar" onclick="closePopup('popupMAT')"><img src="../../imagens/fechar.png"></button>
            <div class="popup-header">
                <h1>Matemática - MAT35</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Aulas lessionadas:</span>
                    <span class="grade-value">30</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Aulas assistidas:</span>
                    <span class="grade-value">26</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Quantidade de faltas:</span>
                    <span class="grade-value">4</span>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" style="width: 87%;">87%</div>
            </div>
            <p>Fique atento o mínimo de presença é 75%</p>
        </div>
    </div>

    <!-- Português -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Português - PORTO</span></td>
                    <td><span class="textFre">Frequência: 91%</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupPORT')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupPORT">
            <button type="button" class="bntFechar" onclick="closePopup('popupPORT')"><img src="../../imagens/fechar.png"></button>
            <div class="popup-header">
                <h1>Português - PORTO</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Aulas lessionadas:</span>
                    <span class="grade-value">30</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Aulas assistidas:</span>
                    <span class="grade-value">27</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Quantidade de faltas:</span>
                    <span class="grade-value">3</span>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" style="width: 91%;">91%</div>
            </div>
            <p>Fique atento o mínimo de presença é 75%</p>
        </div>
    </div>

    <!-- Química -->
    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Química - QUI90</span></td>
                    <td><span class="textFre">Frequência: 75%</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupQUI')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupQUI">
            <button type="button" class="bntFechar" onclick="closePopup('popupQUI')"><img src="../../imagens/fechar.png"></button>
            <div class="popup-header">
                <h1>Química - QUI90</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Aulas lessionadas:</span>
                    <span class="grade-value">30</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Aulas assistidas:</span>
                    <span class="grade-value">22</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Quantidade de faltas:</span>
                    <span class="grade-value">8</span>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" style="width: 75%;">75%</div>
            </div>
            <p>Fique atento o mínimo de presença é 75%</p>
        </div>
    </div>

    <!-- Sociologia -->
    <div class="cardFre" style="margin-bottom: 5%;">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Sociologia - SOL80</span></td>
                    <td><span class="textFre">Frequência: 80%</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupSOL')">Detalhes</button></td>
                </tr>
            </table>
        </div>
        <div class="popup" id="popupSOL">
            <button type="button" class="bntFechar" onclick="closePopup('popupSOL')"><img src="../../imagens/fechar.png"></button>
            <div class="popup-header">
                <h1>Sociologia - SOL80</h1>
                <span class="periodo">1º Bimestre 2023</span>
            </div>
            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Aulas lessionadas:</span>
                    <span class="grade-value">30</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Aulas assistidas:</span>
                    <span class="grade-value">24</span>
                </div>
                <div class="grade-item">
                    <span class="grade-label">Quantidade de faltas:</span>
                    <span class="grade-value">6</span>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" style="width: 80%;">80%</div>
            </div>
            <p>Fique atento o mínimo de presença é 75%</p>
        </div>
    </div>

</div>

<div id="ajuda">
    <a href="#" class="icone-ajuda">
        <span class="mdi--customer-service"></span>
    </a>
</div>

<?php include '..//aluno/footer.php' ?>

<script>
    function openPopup(popupId) {
        document.getElementById(popupId).classList.add("open-popup");
    }

    function closePopup(popupId) {
        document.getElementById(popupId).classList.remove("open-popup");
    }

    function openPopup(popupId) {
    // Criar overlay se não existir
    let overlay = document.getElementById('popup-overlay');
    if (!overlay) {
        overlay = document.createElement('div');
        overlay.id = 'popup-overlay';
        overlay.className = 'popup-overlay';
        overlay.onclick = function() {
            closeAllPopups();
        };
        document.body.appendChild(overlay);
    }
    
    overlay.classList.add('active');
    document.getElementById(popupId).classList.add("open-popup");
}

function closePopup(popupId) {
    document.getElementById(popupId).classList.remove("open-popup");
    document.getElementById('popup-overlay').classList.remove('active');
}

function closeAllPopups() {
    document.querySelectorAll('.popup.open-popup').forEach(popup => {
        popup.classList.remove('open-popup');
    });
    document.getElementById('popup-overlay').classList.remove('active');
}
</script>

