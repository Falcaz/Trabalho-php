<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Virtual</title>
    <style>
        body {
            background-color: rgba(102, 69, 44);
            font-family: Arial, sans-serif;
            color: rgba(26, 18, 11); 
        }
        header {
            background-color: rgba(64, 31, 6);
            padding: 1em;
            text-align: center;
            color: #FFF; /* Branco */
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
    </style>
</head>
<body>
    <header>
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

        <!-- Adicione mais blocos de livro conforme necessário -->
    </section>
</body>
</html>