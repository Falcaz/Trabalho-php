<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Virtual</title>
    <style>
        body {
            background-color: rgba(102, 69, 44);
            font-family: 'Georgia', serif;
            color: rgba(26, 18, 11); 
        }
        section {
            margin: 20px;
        }
        .livro {
            background-color: #F5DEB3; 
            padding: 10px;
            margin: 10px;
            border-radius: 8px;
        }
        header {
            background-color: rgba(64, 31, 6);
            color: #fff;
            padding: 30px;
            text-align: center;
        }
        nav {
            background-color: #b19274;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        nav a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #9a7b5f;
        }
    </style>
</head>
<body>
    <header>
    <nav>
    <a href="Index.php">Início</a>
        <a href="LivrosC.php">Livros</a>
        <a href="AutoresC.php">Autores</a>
        <a href="SobrenosC.php">Sobre Nós</a>
    </nav>
        <h1>Livraria Virtual</h1>
    </header>
    <section>
        <div class="livro">
            <h2>Título do Livro 1</h2>
            <p>Autor: Nome do Autor</p>
            <p>Preço: R$XX,XX</p>
            <button>Adicionar ao Carrinho</button>
        </div>

        <div class="livro">
            <h2>Título do Livro 2</h2>
            <p>Autor: Nome do Autor</p>
            <p>Preço: R$XX,XX</p>
            <button>Adicionar ao Carrinho</button>
        </div>

      
</body>
</html>