<?php

    require_once 'categoria.class.php';
    require_once 'produto.class.php';

    //De uma categoria e quais os produtos pertencem a ela
    $produto1 = new Produto('Lápis Preto', 'Lápis Preto n°2', 2.5, 100);
    $produto2 = new Produto('Caderno', 'Caderno Barbie', 20.5, 1100);

    $categoria = new Categoria('Material escolar', array($produto1, $produto2));

    echo '<h1>Categoria</h1>';
    echo "Descritivo: {$categoria -> getDescritivo()}<br>";

    echo '<h1>Produtos</h1>';

    foreach($categoria -> getProduto() as $p){
        echo "Nome: {$p -> getNome()}<br>";
        echo "Preço: R$" . number_format($p -> getPreco(), 2, ',', '.') . "<br>";
        echo '--------------------------';
        echo '<br>';
    }

    //De um produto a qual categoria pertence
    $categoria1 = new Categoria('Material de escritório');
    $produto3 = new Produto('Agenda', 'Agenda 2012', 30, 100, $categoria1);

    echo '<h1>Produto</h1>';
    echo "Nome: {$produto3 -> getNome()}<br>";
    echo "Descritivo: {$produto3 -> getDescricao()}<br>";
    echo "Estoque: {$produto3 -> getEstoque()}<br>";
    echo "Preço: R$" . number_format($produto3 -> getPreco(), 2, ',', '.') . "<br>";

    echo '<h1>Categoria</h1>';
    echo "{$produto3-> getCategoria()-> getDescritivo()}";
    echo '--------------------------';
    echo '<br>';

?>