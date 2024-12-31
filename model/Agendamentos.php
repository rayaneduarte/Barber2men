<?php

class Agendamento {
    private $id;
    private $cliente_id;
    private $servico_id;
    private $data;
    private $horario;
    private $duracao;
    private $status;

    public function setId ($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setClienteId($cliente_id){
        $this->cliente_id= $cliente_id;
    }
    public function getClienteId(){
        return $this->cliente_id;
    }
    public function setServicoId ($servico_id){
        $this->servico_id = $servico_id;
    }
    public function getServicoId(){
        return $this->servico_id;
    }
    public function setData ($data){
        $this->data = $data;
    }
    public function getData(){
        return $this->data;
    }
    public function setHorario($horario){
        $this->horario= $horario;
    }
    public function getHorario(){
        return $this->horario;
    }
    public function setDuracao ($duracao){
        $this->duracao = $duracao;
    }
    public function getDuracao(){
        return $this->duracao;
    }
    public function setStatus($status){
        $this->status = $status;
    }
    public function getStatus(){
        return $this->status;
    }
    public function __construct(){
    }
}