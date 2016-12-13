<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Modelo_ex extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
function obtener_datos(){
	$query = $this->db->get('pelicula');
	if($query->num_rows()>0)
			return $query->result();
	else return false;
	}
}
?>