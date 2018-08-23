	<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class gear_model extends CI_Model {

	// Get all details ehich store in "products" table in database.
	public function get_all()
	{
		
		$query = $this->db->get('products');
		return $query->result_array();
		
	}

	// Insert customer details in "customer" table in database.
public function insert_customer($data)
{
$this->db->insert('orders', $data);
$id = $this->db->insert_id();
return (isset($id)) ? $id : FALSE;
}

// Insert order date with customer id in "orders" table in database.
public function insert_order($data)
{
$this->db->insert('orderitems', $data);
$id = $this->db->insert_id();
return (isset($id)) ? $id : FALSE;
}
}
	?>