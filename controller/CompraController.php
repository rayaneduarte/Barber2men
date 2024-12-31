<?php

  include './model/Compras.php';
  //include './model/DAO/ComprasDAO.php';

class CompraController{
    private $compra;
    //private $compra_dao;

    public function __construct(){
     $this->compra = new Compra();
    // $this->Compra_dao = new ComprasDAO();
}
public function index(){
    header('Location:view/compras/mostrar_tudo.php');
}
public function create(){ 
    header('Location:view/compras/novo.php');
}
public function store(){
}
public function edit($id){
    header('Location:view/compras/editar.php');
}
public function show($id){
    header('Location:view/compras/mostrar_registro.php');
}
public function uptade($id){
}
public function delete($id){
}   
}