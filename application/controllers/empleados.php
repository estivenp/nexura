<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empleados extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('empleado_model', "md_empleado");
        // $this->load->helper('form');
    }

	public function index()
	{
		$this->load->view('base');
	}

	public function getListaEmpleados(){
        $data['empleados']= $this->md_empleado->listaEmpleados();
        $this->load->view('listar_empleados',$data);
    }

	public function vistaAgregarEmpleado(){
		$this->load->view('formulario_empleado');
	}

	public function agregarEmpleado(){
		// print_r($this->input->post("boletin"));die();
		if($this->input->post("masculino")=="on"){$sex="M";}
		else{$sex="F";}
		if($this->input->post("boletin")=="on"){$bol=1;}
		else{$bol=0;}

		$data=array("nombre"=>$this->input->post("nombre"),"email"=>$this->input->post("email"),
		"sexo"=>$sex,"area_id"=>intval($this->input->post("area")),"boletin"=>$bol
		,"descripcion"=>$this->input->post("descripcion"));
		$id=$this->md_empleado->insertarEmpleado($data);
		print_r($id);die();
		$this->load->view('base');
	}

	public function irModificar(){
		$cod = $this->uri->segment(3);
		// if($cod=="index.php"){
		// 	$this->modificarEmp();
		// }
		$data['empleado']=$this->md_empleado->obtenerEmpl($cod);
		$this->load->view('formulario_modificar',$data);
	}

	public function modificarEmp(){
		$id=$this->input->post('id');
		if($this->input->post("masculino")=="on"){$sex="M";}
		else{$sex="F";}
		if($this->input->post("boletin")=="on"){$bol=1;}
		else{$bol=0;}

		$data=array("nombre"=>$this->input->post("nombre"),"email"=>$this->input->post("email"),
		"sexo"=>$sex,"area_id"=>intval($this->input->post("area")),"boletin"=>$bol
		,"descripcion"=>$this->input->post("descripcion"));
		$this->md_empleado->editarEmp($data,intval($id));
		$this->load->view('base');
}
	
}
