<?php include '..//layout/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano de Aulas - Professor</title>
    <link rel="stylesheet" href="../css/plano1.css" type="text/css">

</head>

<div id="conteudo">
    <div id="inicio">
        <h1>Plano de Aulas</h1>
        <p>Gerenciar o plano de aulas</p>
    </div>

    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Física - Aula 1</span></td>
                    <td><span class="textFre">06/08/2025</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupATL')">Detalhes</button></td>
                </tr>
            </table>

            <table>
                <tr>
                    <td><span class="textFre">Física - Aula 2</span></td>
                    <td><span class="textFre">13/08/2025</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupATL')">Detalhes</button></td>
                </tr>
            </table>

            <table>
                <tr>
                    <td><span class="textFre">Física - Aula 3</span></td>
                    <td><span class="textFre">20/08/2025</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupATL')">Detalhes</button></td>
                </tr>
            </table>

            <table>
                <tr>
                    <td><span class="textFre">Física - Aula 4</span></td>
                    <td><span class="textFre">27/08/2025</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupATL')">Detalhes</button></td>
                </tr>
            </table>
        </div>


        <div class="popup" id="popupATL">
            <button type="button" class="bntFechar" onclick="closePopup('popupATL')"><img src="../imagem/fechar.png"
                    alt="Fechar"></button>

            <div class="popup-header">
                <h1>Física</h1>
                <span class="periodo">2º Bimestre 2024</span>
            </div>

            <div class="grade-container">
                <div class="grade-item">
                    <span class="grade-label">Nesta aula abordaremos sobre #####</span>

                </div>

            </div>
        </div>
    </div>

    <div class="cardFre">
        <div class="conteudoFre">
            <table>
                <tr>
                    <td><span class="textFre">Química - Aula 1</span></td>
                    <td><span class="textFre">08/08/2025</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupATL')">Detalhes</button></td>
                </tr>
            </table>

            <table>
                <tr>
                    <td><span class="textFre">Química - Aula 2</span></td>
                    <td><span class="textFre">15/08/2025</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupATL')">Detalhes</button></td>
                </tr>
            </table>

            <table>
                <tr>
                    <td><span class="textFre">Química - Aula 3</span></td>
                    <td><span class="textFre">22/08/2025</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupATL')">Detalhes</button></td>
                </tr>
            </table>

            <table>
                <tr>
                    <td><span class="textFre">Química - Aula 4</span></td>
                    <td><span class="textFre">29/08/2025</span></td>
                    <td class="bttFre"><button type="button" onclick="openPopup('popupATL')">Detalhes</button></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="botoes-container">
        <a id="sair" href="../layout/plano.php">Sair</a>
        <button id="freq">Registrar Plano de Aula</button>
    </div>

</div>


<?php include '..//layout/footer.php'; ?>

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