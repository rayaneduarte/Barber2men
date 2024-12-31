<?php

  include './model/Agendamentos.php';
  //include './model/DAO/AgendamentosDAO.php';

class AgendamentoController{
    private $agendamento;
    //private $agendamento_dao;

    public function __construct(){
     $this->agendamento = new Agendamento();
    // $this->agendamento_dao = new AgendamentoDAO();
}
public function index(){
    header('Location:view/agendamentos/mostrar_tudo.php');
}
public function create(){ 
    header('Location:view/agendamentos/novo.php');
}
public function store(){
}
public function edit($id){
    header('Location:view/agendamentos/editar.php');
}
public function show($id){
    header('Location:view/agendamentos/mostrar_registro.php');
}
public function uptade($id){
}
public function delete($id){
}   
}