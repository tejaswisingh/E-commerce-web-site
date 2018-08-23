<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    class music_controller extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    }

    public function index()
    {
        $this->load->model('music_model');
        $data['result'] = $this->music_model->get_all();

        
        if(count($data['result']) > 0){
                $this->load->view('music', $data);
            }

    }
}
?>