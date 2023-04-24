<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Summary of Persona_model
 */
class Persona_model extends CI_Model{



	public function __construct()
	{
		parent::__construct();
	}
    public function getpersonas(){
        $this->load->database();
        $query=$this->db->query("SELECT * FROM `persona`;");
        return $query->result();
    }
    
   
    public function guardapersona($ci, $nombre, $fechanac,  $telefono,  $departamento){
       
        //$this->load->database();
        
        return $this->db->query("INSERT INTO persona values (ci,nombre,fechanac,telefono,departamento) values ({$ci},{$nombre},{$fechanac},{$telefono},{$departamento})");
       
        
    }
    public function getpersona(int $id){
        return $this->db->query("SELECT id nombre, fechanac, telefono, departamento FROM persona where id={$id}")->row();
    }
    
    public function actualizarpersona(int $id , int $ci, varchar $nombre, varchar $fechanac, int $telefono, int $departamento){
        return $this->db->query("UPDATE persona SET ci = {$ci},nombre ={$nombre},telefono ={$telefono}, departamento={$departamento} where id={$id}");
    }
    public function eliminarpersona(int $id){
        return $this->db->query("DELETE FROM persona where id={$id}");
    }

}
