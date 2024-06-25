<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <header>
        <h1>Bem-vindo ao Nosso Petshop</h1>
        <nav>
            <ul>
                <li><a href="#home">Página Inicial</a></li>
                <li><a href="#produtos">Produtos</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Sobre Nós</h2>
            <p>Nosso petshop oferece uma ampla variedade de produtos e serviços para o seu animal de estimação. Desde alimentos e brinquedos até serviços de banho e tosa, estamos aqui para ajudar a cuidar do seu amigo peludo.</p>
        </section>
        <section id="produtos">
            <h2>Produtos</h2>
            <?php
                $produtos = [
                    "Ração Premium" => "R$ 79,90",
                    "Brinquedo para Cães" => "R$ 19,90",
                    "Arranhador para Gatos" => "R$ 99,90"
                ];
                echo "<ul>";
                foreach ($produtos as $produto => $preco) {
                    echo "<li>$produto - $preco</li>";
                }
                echo "</ul>";
            ?>
        </section>
        <section id="servicos">
            <h2>Serviços</h2>
            <ul>
                <li>Banho e Tosa</li>
                <li>Consulta Veterinária</li>
                <li>Hospedagem</li>
            </ul>
        </section>
        <section id="contato">
            <h2>Contato</h2>
            <form action="processa_contato.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Petshop. Todos os direitos reservados.</p>
    </footer>
    <script src="/js/main.js"></script>
</body>
</html>