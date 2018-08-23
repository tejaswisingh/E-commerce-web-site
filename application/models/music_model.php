<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class music_model extends CI_Model {

	// Get all details ehich store in "products" table in database.
	public function get_all()
	{
		
		//$query = $this->db->get('products');
		//return $query->result_array();

		$this->db->select('b.Musician_Image_URL, a.Description, a.MonthYear'); 
    	$this->db->from('performance a');
   	 	$this->db->join('musician b', 'b.musicianID = a.musicianID', 'natural'); 
   	 	$this->db->order_by('a.MonthYear');
    	$query = $this->db->get();
    	return $query->result_array();
	}

}
?>