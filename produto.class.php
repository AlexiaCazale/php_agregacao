<?php
    class Produto{
        public function __construct(private string $nome = '', private string $descricao = '', private float $preco = 0, private int $estoque = 0, private Categoria $categoria = new Categoria()){}

        public function getNome(){
            return $this -> nome;
        }

        public function getDescricao(){
            return $this -> descricao;
        }

        public function getPreco(){
            return $this -> preco;
        }

        public function getEstoque(){
            return $this -> estoque;
        }
        
        public function getCategoria(){
            return $this -> categoria;
        }

        public function setCategoria(){
            $this -> categoria[] = $categoria;
        }

    }
?>