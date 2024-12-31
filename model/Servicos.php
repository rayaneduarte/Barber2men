<?php

class Servico {
    private $id;
    private $nome;
    private $valor;
    private $descricao;

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
    public function setDescricao($descricao){
        $this->descricao= $descricao;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function __construct(){
    }
}