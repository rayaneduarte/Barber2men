<?php
class HomeController{
    private $clientes;
  //private $cliente_dao;

    public function __construct(){
     $this->clientes= new Cliente();
     //$this->clientedao = new ClienteDAO();
}
public function index(){
    header('Location:view/home/homepage.php');
}
}