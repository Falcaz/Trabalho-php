<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Camarelo</title>
   
    <style>
        body {
            background-color: #e0d5b8; /* Tons terrosos */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        header {
            background-color: #543b33; /* Marrom escuro */
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        section {
            text-align: center;
            padding: 20px;
        }

        .autor {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f2e8cc; /* Tons claros */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left; /* Ajuste para alinhar o texto à esquerda */
        }

        .autor h3 {
            margin-bottom: 10px;
        }

        .autor p {
            margin: 0 0 10px;
        }

        .livro {
            margin-top: 30px;
        }

        footer {
            background-color: #543b33; /* Marrom escuro */
            color: #fff;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        /* Estilização adicional */
        i {
            margin-right: 5px;
        }

    </style>
</head>

<body>
    <header>
        <h1>Livraria Camarelo</h1>
        <p>Conheça nossos autores e suas obras inspiradoras.</p>
    </header>

    <section>
        <h2>Autores em Destaque</h2>

        <?php
        // Array com informações dos autores
        $autores = array(
            array("nome" => "João Silva", "livro" => "Entre as Árvores", "descricao" => "Uma jornada pela natureza."),
            array("nome" => "Maria Oliveira", "livro" => "Sussurros do Vento", "descricao" => "Poesias em harmonia com o vento."),
            array("nome" => "Carlos Pereira", "livro" => "Caminho de Pedras", "descricao" => "Reflexões sobre a vida."),
        );

        // Exibir informações dos autores
        foreach ($autores as $autor) {
            echo "<div class='autor'>";
            echo "<h3><i class='fas fa-pen-nib'></i>{$autor['nome']}</h3>";
            echo "<p><strong><i class='fas fa-book'></i>Livro:</strong> {$autor['livro']}</p>";
            echo "<p><i class='fas fa-info-circle'></i>{$autor['descricao']}</p>";
            echo "</div>";
        }
        ?>

    </section>


    <footer>
        <p>&copy; <?php echo date("Y"); ?> Livraria Camarelo. Todos os direitos reservados.</p>
    </footer>
</body>

</html>
