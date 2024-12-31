<?php

  class Cliente{
    private $id;
    private $nome;
    private $CPF;
    private $dt_nasc;
    private $whatsapp;
    private $logradouro;
    private $num;
    private $bairro;

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
    public function setCpf ($CPF){
        $this->CPF = $CPF;
    }
    public function getCpf(){
        return $this->CPF;
    }
    public function setDt_nasc($dt_nasc){
        $this->dt_nasc = $dt_nasc;
    }
    public function getDt_nasc(){
        return $this->dt_nasc;
    }
    public function setWhatsapp ($whatsapp){
        $this->whatsapp = $whatsapp;
    }
    public function getWhatsapp(){
        return $this->whatsapp;
    }
    public function setLogradouro ($logradouro){
        $this->logradouro = $logradouro;
    }
    public function getLogradouro(){
        return $this->logradouro;
    }
    public function setNum ($num){
        $this->num = $num;
    }
    public function getNum(){
        return $this->num;
    }
    public function setBairro ($bairro){
        $this->bairro = $bairro;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function __construct(){
    }
  }