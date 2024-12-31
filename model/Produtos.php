<?php

class Produto {
    private $id;
    private $nome;
    private $valor;
    private $marca;
    private $categoria;

    public function setId ($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome($nome){
        $this->nome= $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setValor ($valor){
        $this->valor = $valor;
    }
    public function getValor(){
        return $this->valor;
    }
    public function setMarca ($marca){
        $this->marca = $marca;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setCategoria ($categoria){
        $this->categoria = $categoria;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function __construct(){
    }
}