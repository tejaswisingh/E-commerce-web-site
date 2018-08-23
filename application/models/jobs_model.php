<?php 

	class jobs_model extends CI_Model
	{
		function add_user_details($data)
		{
			
				$this->db->insert('jobs', $data);
				
			
		}


	}
?>