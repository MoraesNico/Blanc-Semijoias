<?php include "cabecalho.php";?>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Nossos Produtos</h1>
        <div class="row">
            <?php
            $produtos = [
                ["nome" => "Shampoo Cresce+", "preco" => "R$ 49,90", "imagem" => "https://via.placeholder.com/150"],
                ["nome" => "Condicionador Nutri Hair", "preco" => "R$ 39,90", "imagem" => "https://via.placeholder.com/150"],
                ["nome" => "Máscara Capilar Intensa", "preco" => "R$ 59,90", "imagem" => "https://via.placeholder.com/150"],
                ["nome" => "Óleo de Argan", "preco" => "R$ 29,90", "imagem" => "https://via.placeholder.com/150"]
            ];
            
            foreach ($produtos as $produto) {
                echo "<div class='col-md-3 mb-4'>";
                echo "<div class='card'>";
                echo "<img src='{$produto['imagem']}' class='card-img-top' alt='{$produto['nome']}'>";
                echo "<div class='card-body text-center'>";
                echo "<h5 class='card-title'>{$produto['nome']}</h5>";
                echo "<p class='card-text fw-bold'>{$produto['preco']}</p>";
                echo "<a href='#' class='btn btn-primary'>Comprar</a>";
                echo "</div></div></div>";
            }
            ?>
        </div>
        <div class="row">
            <?php
            $produtos = [
                ["nome" => "Shampoo Cresce+", "preco" => "R$ 49,90", "imagem" => "https://via.placeholder.com/150"],
                ["nome" => "Condicionador Nutri Hair", "preco" => "R$ 39,90", "imagem" => "https://via.placeholder.com/150"],
                ["nome" => "Máscara Capilar Intensa", "preco" => "R$ 59,90", "imagem" => "https://via.placeholder.com/150"],
                ["nome" => "Óleo de Argan", "preco" => "R$ 29,90", "imagem" => "https://via.placeholder.com/150"]
            ];
            
            foreach ($produtos as $produto) {
                echo "<div class='col-md-3 mb-4'>";
                echo "<div class='card'>";
                echo "<img src='{$produto['imagem']}' class='card-img-top' alt='{$produto['nome']}'>";
                echo "<div class='card-body text-center'>";
                echo "<h5 class='card-title'>{$produto['nome']}</h5>";
                echo "<p class='card-text fw-bold'>{$produto['preco']}</p>";
                echo "<a href='#' class='btn btn-primary'>Comprar</a>";
                echo "</div></div></div>";
            }
            ?>
        </div>
    </div>

<?php include "rodape.php";?>