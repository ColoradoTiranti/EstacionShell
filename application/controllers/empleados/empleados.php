<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empleados extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('cargos_model');
		$this->load->model('empleados_model');
	}

	public function index(){
		$data = array(
			'cargos' => $this->cargos_model->getCargos(),
			'empleados' => $this->empleados_model->getEmpleados(),
		);

		$this->load->view('layouts/headerLTE');
		$this->load->view('layouts/asideLTE');
		$this->load->view('empleados/empleados', $data);
		$this->load->view('layouts/footerLTE');
	}

	public function addEmpleado(){
		$data = array(
			'nombre_empleado' => $this->input->post('nombre'),
			'direccion_empleado' => $this->input->post('direccion'),
			'telefono_empleado' => $this->input->post('telefono'),
			'id_cargo' => $this->input->post('cargo')
		);

		$valid = array( 'success' => false );

		if($this->empleados_model->addEmpleado($data)){
			$valid['success'] = true;
		}

		echo json_encode($valid);
	}

	public function empleadoToEdit($id){
		$data = array(
			'empleadoEditable' => $this->empleados_model->getEmpleado($id),
		);

		echo json_encode($data);
	}

	public function deleteEmpleado($id){

		$data = array( 'success' => false );
		
		if($this->empleados_model->deleteEmpleado($id)){
			$data['success'] = true;
		}

		echo json_encode($data);
	}

	public function updateEmpleado($id){
		$validation = array( 'validation' => false );

		$nombre_empleado = $this->input->post("nombre");
		$direccion_empleado = $this->input->post("direccion");
		$telefono_empleado = $this->input->post("telefono");
		$id_cargo = $this->input->post("cargo");

		$data = array( 'nombre_empleado' => $nombre_empleado,
			'direccion_empleado' => $direccion_empleado,
			'telefono_empleado' => $telefono_empleado,
			'id_cargo' => $id_cargo
		);

		if($this->empleados_model->updateEmpleado($id, $data)){
			$validation['validation'] = true;
		}

		echo json_encode($validation);

	}
}