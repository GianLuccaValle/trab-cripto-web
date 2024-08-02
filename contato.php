<!DOCTYPE html>
<html lang="pt-BR">
<?php include 'includes/cabecalho.php'; ?>
<body>
    <header>
        <?php include 'includes/menu.php'; ?>
    </header>
    <main class="container">
        <form action="actions/contato_acao.php" method="post">
            <fieldset>
                <legend>Formulário de Contato</legend>

                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required><br>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" required><br>

                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" id="mensagem" required></textarea><br>

                <input class="primary" type="submit" value="Enviar">
                <input type="reset" value="Cancelar">
            </fieldset>
        </form>
    </main>
</body>
</html>
