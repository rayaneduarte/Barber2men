<?php

  include './model/Clientes.php';
  //include './model/DAO/ClienteDAO.php';

class ClienteController{
    private $cliente;
    //private $cliente_dao;

    public function __construct(){
     $this->cliente = new Cliente();
    // $this->cliente_dao = new ClienteDAO();
}
public function index(){
    header('Location:view/clientes/mostrar_tudo.php');
}
public function create(){ 
    header('Location:view/clientes/novo.php');
}
public function store(){
}
public function edit($id){
    header('Location:view/clientes/editar.php');
}
public function show($id){
    header('Location:view/clientes/mostrar_registro.php');
}
public function uptade($id){
}
public function delete($id){
}   
}
