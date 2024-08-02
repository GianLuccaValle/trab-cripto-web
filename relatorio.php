<!DOCTYPE html>
<html lang="pt-BR">
<?php include 'includes/cabecalho.php'; ?>
<body>
    <header>
        <?php include 'includes/menu.php'; ?>
    </header>
    <main class="container">
        <form action="relatorio.php" method="get">
            <fieldset>
                <legend>Relatório de Transações</legend>

                <label for="data_inicio">Data Início</label>
                <input type="date" name="data_inicio" id="data_inicio"><br>

                <label for="data_fim">Data Fim</label>
                <input type="date" name="data_fim" id="data_fim"><br>

                <label for="criptomoeda_id">Criptomoeda</label>
                <select name="criptomoeda_id" id="criptomoeda_id">
                    <?php
                    // Código para carregar opções de criptomoedas do CSV
                    ?>
                </select><br>

                <input class="primary" type="submit" value="Gerar Relatório">
            </fieldset>
        </form>

        <?php
        if ($_GET) {
            // Código para gerar relatório com base nos filtros
        }
        ?>
    </main>
</body>
</html>
