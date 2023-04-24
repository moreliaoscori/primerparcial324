<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class persona extends CI_Controller {

    	public function index()
	{        //$datos['ci']="765433";
        //$datos['nombre']="mmoscori1";
        $this->load->model("Persona_model");
        $filas = $this->Persona_model->getpersonas();
        $datos["filas"]=$filas;
		$this->load->view('persona_view',$datos);
	}
    /*public function index2(){
        //$datos['ci']="765433";
        //$datos['nombre']="mmoscori1";
        $this->load->model("Persona_model");
        $filas = $this->Persona_model->persona('765467');
        $datos["filas"]=$filas;
		$this->load->view('persona_view',$datos);
    }*/
    public function guardapersona(){
        $this->load->model("Persona_model");
      if($this->input->post()){
            
            $ci= $this->db->escape($_POST['ci']);
            $nombre= $this->db->escape($_POST['nombre']);
            $fechanac= $this->db->escape($_POST['fechanac']);
            $telefono= $this->db->escape($_POST['telefono']);
            $departamento= $this->db->escape($_POST['departamento']);
        if($this->Persona_model->guardapersona($ci,$nombre,$fechanac,$telefono,$departamento)){
            header("Location:".base_url());
               
    }} 
    }
    public function editarpersona($id=null) {
        $this->load->model("Persona_model");
        if(!$id == null){
            $id=$this->db->escape((int) $id);
            $persona = $this->Persona_Model->getpersona($id);
            $this->layout->view("editar_persona",compact("persona"));
        }
        else{
            header("Location:".base_url()."persona");
        }
    }
    public function actualizarpersona(){
        $this->load->model("Persona_model");
        if($this->input->post()){
            $id= $this->db->escape((int)$_POST['id']);
            $ci= $this->db->escape($_POST['ci']);
            $nombre= $this->db->escape($_POST['nombre']);
            $fechanac= $this->db->escape($_POST['fechanac']);
            $telefono= $this->db->escape($_POST['telefono']);
            $departamento= $this->db->escape($_POST['departamento']);
        if($this->Persona_model->actualizarpersona($id,$ci,$nombre,$fechanac,$telefono,$departamento)){
            header("Location:".base_url()."persona");
               
    }} 
    }
    public function eliminarpersona(int $id){
        $this->load->model("Persona_model");
        if($this->input->get()){
            if($this->Persona_Model->eliminarpersona($id))
            {
                header("Location:".base_url()."persona");
            }
        }
    }

}