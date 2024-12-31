<?php

  include './model/Produtos.php';
  //include './model/DAO/ProdutosDAO.php';

class ProdutoController{
    private $produto;
    //private $produto_dao;

    public function __construct(){
     $this->produto = new Produto();
    // $this->produto_dao = new ProdutosDAO();
}
public function index(){
    header('Location:view/produtos/mostrar_tudo.php');
}
public function create(){ 
    header('Location:view/produtos/novo.php');
}
public function store(){
}
public function edit($id){
    header('Location:view/produtos/editar.php');
}
public function show($id){
    header('Location:view/produtos/mostrar_registro.php');
}
public function uptade($id){
}
public function delete($id){
}   
}