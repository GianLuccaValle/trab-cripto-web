<!DOCTYPE html>
<html lang="pt-BR">
<?php include 'includes/cabecalho.php'; ?>
<body>
    <header>
        <?php include 'includes/menu.php'; ?>
    </header>
    <main class="container">
        <form action="actions/criptomoeda_acao.php" method="post">
            <fieldset>
                <legend>Cadastro de Criptomoedas</legend>

                <label for="id">Id</label>
                <input type="text" name="id" id="id" readonly><br>

                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required><br>

                <label for="sigla">Sigla</label>
                <input type="text" name="sigla" id="sigla" required><br>

                <input class="primary" type="submit" name="acao" value="Salvar">
                <input type="reset" value="Cancelar">
            </fieldset>
        </form>
    </main>
</body>
</html>
