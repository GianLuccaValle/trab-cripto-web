<!DOCTYPE html>
<html lang="pt-BR">
<?php include 'includes/cabecalho.php'; ?>
<body>
    <header>
        <?php include 'includes/menu.php'; ?>
    </header>
    <main class="container">
        <form action="actions/transacao_acao.php" method="post">
            <fieldset>
                <legend>Cadastro de Transações</legend>

                <label for="id">Id</label>
                <input type="text" name="id" id="id" readonly><br>

                <label for="usuario_id">Usuário</label>
                <select name="usuario_id" id="usuario_id">
                    <?php
                    // Código para carregar opções de usuários do CSV
                    ?>
                </select><br>

                <label for="criptomoeda_id">Criptomoeda</label>
                <select name="criptomoeda_id" id="criptomoeda_id">
                    <?php
                    // Código para carregar opções de criptomoedas do CSV
                    ?>
                </select><br>

                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade" required><br>

                <label for="data">Data</label>
                <input type="date" name="data" id="data" required><br>

                <input class="primary" type="submit" name="acao" value="Salvar">
                <input type="reset" value="Cancelar">
            </fieldset>
        </form>
    </main>
</body>
</html>
