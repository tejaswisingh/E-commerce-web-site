	<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class gear_controller extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	//Load Library and model.
	
	$this->load->library('cart');
	
	
	}

	public function index()
	{
		$this->load->model('gear_model');
		$data['result'] = $this->gear_model->get_all();

		
		if(count($data['result']) > 0){
				$this->load->view('gear', $data);
			}

	}
	function add()
	{
	// Set array for send data.
	$insert_data = array(
	'id' => $this->input->post('id'),
	'name' => $this->input->post('name'),
	'price' => $this->input->post('price'),
	'qty' => 1
	);

	// This function add items into cart.
	$this->cart->insert($insert_data);
	$this->load->view('cart');
	// This will show insert data in cart.
	//redirect('gear_controller');

	}

	function displayOrder()
	{
	$this->load->view('placeyourorder');
	}


	public function save_order()
	{
	// This will store all values which inserted from user.
	$customer = array(
	'name' => $this->input->post('name'),
	'email' => $this->input->post('email'),
	'address' => $this->input->post('address'),
	'city' => $this->input->post('city'),
	'state' => $this->input->post('state'),
	'zip' => $this->input->post('zip'),
	'creditcard' => $this->input->post('creditcard'),
	'expmonth' => $this->input->post('expmonth'),
	'expyear' => $this->input->post('expyear')
	);
	$this->load->library('form_validation');

	$this->form_validation->set_error_delimiters('<div class="error">','</div>');

    	$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|callback_alpha_dash_space');
    	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    	$this->form_validation->set_rules('address', 'Address', 'required|max_length[500]');
    	$this->form_validation->set_rules('city', 'City', 'trim|required|xss_clean|callback_alpha_dash_space');
    	$this->form_validation->set_rules('state', 'State', 'trim|required|xss_clean|callback_alpha_dash_space');
    	$this->form_validation->set_rules('zip', 'Zip', 'required|max_length[6]|numeric');
    	$this->form_validation->set_rules('creditcard', 'creditcard', 'required|exact_length[16]|numeric');
    	$this->form_validation->set_rules('expmonth', 'ExpMonth', 'required|max_length[2]|numeric');
    	$this->form_validation->set_rules('expyear', 'ExpYear', 'required|max_length[4]|numeric');

    	if($this->form_validation->run()== FALSE){
    		$this->load->view('placeyourorder');
    	}
    	else{

    		$insert_data = array( 
    		'Name' => $this->input->post('name'),
    		'Email' => $this->input->post('email'),
    		'Address' => $this->input->post('address'),
    		'City' => $this->input->post('city'),
    		'State' => $this->input->post('state'),
    		'Zip' => $this->input->post('zip'),
    		'Credit_Card' => $this->input->post('creditcard'),
    		'Month' => $this->input->post('expmonth'),
    		'Year' => $this->input->post('expyear')
    		);

  

    		$this->load->model('gear_model');
    		$cust_id = $this->gear_model->insert_customer($insert_data);


	if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
	$order_detail = array(
	'orderid' => $cust_id,
	'productid' => $item['id'],
	'qty' => $item['qty'],
	'price' => $item['price']
	);

	// Insert product imformation with order detail, store in cart also store in database.

	$order_id = $this->gear_model->insert_order($order_detail);
	endforeach;
	endif;


	$this->cart->destroy();


	// After storing all imformation in database load "billing_success".
	redirect(base_url() . "gear_controller/inserted");
    		
    	}
	}

	public function alpha_dash_space($name){
    if (! preg_match('/^[a-zA-Z\s]+$/', $name)) {
        $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alphabets & White spaces');
        return FALSE;
    } else {
        return TRUE;
    }
	}
	public function inserted()  
      {  
           $this->save_order();  
      }  
	}
?>
