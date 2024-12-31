<?php

  include './model/Servicos.php';
  //include './model/DAO/ServicoDAO.php';

class ServicoController{
    private $servico;
    //private $servico_dao;

    public function __construct(){
     $this->servico = new Servico();
    // $this->servico_dao = new ServicoDAO();
}
public function index(){
    header('Location:view/servicos/mostrar_tudo.php');
}
public function create(){ 
    header('Location:view/servicos/novo.php');
}
public function store(){
}
public function edit($id){
    header('Location:view/servicos/editar.php');
}
public function show($id){
    header('Location:view/servicos/mostrar_registro.php');
}
public function uptade($id){
}
public function delete($id){
}   
}