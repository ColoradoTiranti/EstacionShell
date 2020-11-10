<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empleados_model extends CI_Model {

	public function getEmpleados(){
		$r = $this->db->query("
				SELECT emp.id as id,
				emp.nombre_empleado as nombre, 
				emp.direccion_empleado as direccion, 
				emp.telefono_empleado as telefono, 
				cargo.nombre_cargo as cargo 
				FROM empleados emp, cargos cargo 
				WHERE emp.id_cargo = cargo.id 
				ORDER BY emp.nombre_empleado DESC
			");

		return $r->result();
	}

	public function getEmpleado($id){
		$r = $this->db->query("
				SELECT 
				emp.id as id,
				emp.nombre_empleado as nombre, 
				emp.direccion_empleado as direccion, 
				emp.telefono_empleado as telefono, 
				cargo.nombre_cargo as cargo 
				FROM empleados emp, cargos cargo 
				WHERE emp.id_cargo = cargo.id AND emp.id = '$id'
		 	");

		return $r->row();
	}

	public function addEmpleado($data){
		$this->db->insert("empleados", $data);
		return true;
	}

	public function updateEmpleado($id, $data){
		$this->db->where('id', $id);
		$this->db->update('empleados', $data);
		return true;
	}

	public function deleteEmpleado($id){
		$this->db->query("DELETE FROM empleados WHERE id = '$id'");
		return true;
	}
	
}

?>