<?php defined('BASEPATH') or exit('No direct script access allowed');
class Manage_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function insert_origin($table1)
	{
		$this->db->insert('origin', $table1);
	}

	function insert_huayrach($table2)
	{
		$this->db->insert('huayrach', $table2);
	}

	function insert_destination($table3)
	{
		$this->db->insert('destination', $table3);
    }
    
    function view_train()
	{
		$this->db->select('*');
		$this->db->from('origin');
		$this->db->join('huayrach', 'huayrach.train = origin.train');
        $this->db->join('destination', 'destination.train = origin.train');
        $this->db->order_by('origin.train','asc');
        $data = $this->db->get('');
        
		return $data;
	}

	
	
}