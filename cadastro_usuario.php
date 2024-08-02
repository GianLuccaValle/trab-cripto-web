<!DOCTYPE html>
<html lang="pt-BR">
<?php include 'includes/cabecalho.php'; ?>
<body>
    <header>
        <?php include 'includes/menu.php'; ?>
    </header>
    <main class="container">
        <form action="actions/usuario_acao.php" method="post">
            <fieldset>
                <legend>Cadastro de Usuários</legend>

                <label for="id">Id</label>
                <input type="text" name="id" id="id" readonly><br>

                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required><br>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" required><br>

                <input class="primary" type="submit" name="acao" value="Salvar">
                <input type="reset" value="Cancelar">
            </fieldset>
        </form>
    </main>
</body>
</html>
