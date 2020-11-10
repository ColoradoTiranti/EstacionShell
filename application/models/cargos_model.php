<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cargos_model extends CI_Model {

	public function getCargos(){
		$r = $this->db->query("
				SELECT id, nombre_cargo as nombre 
				FROM cargos
			");

		return $r->result();
	}
}

?>