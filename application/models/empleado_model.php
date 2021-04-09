<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empleado_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function listaEmpleados() {
        $query = $this->db->select("e.id, e.nombre, e.email, e.sexo, e.boletin,a.nombre as area")
            ->from('empleados as e')
            ->join('areas as a','e.area_id = a.id','LEFT')
            ->get();
           
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    }

    public function insertarEmpleado($data) {
        $this->db->insert('empleados', $data);
        // return $this->db->insert_id();
    }


}