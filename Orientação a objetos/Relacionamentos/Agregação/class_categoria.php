<?php
    class Categoria {
        public function __construct(
            private string $descritivo = "",
            private array $produto = array()){}
        
            public function getDescritivo(){
                return $this->descritivo;
            }
            
            public function getProduto(){
                return $this->produto;
            }

            public function setProduto(Produto $novo_produto){
                $this->produto[] = $novo_produto;
            }
    }



?>