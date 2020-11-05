<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
            
            $this->load->model('Manage_model');
         
    }
    
    function insert_tarin(){
        $table1 = array(
            'train' => $this->input->post("train"),
            'station' => $this->input->post("station"),
            'time' => $this->input->post("time"),
            'note' => $this->input->post("note"),
        );

        $table2 = array(
            'train' => $this->input->post("train"),
            'to' => $this->input->post("to"),
            'exit' => $this->input->post("exit") 
        );

        $table3 = array(
            'train' => $this->input->post("train"),
            'd_station' => $this->input->post("d_station"),
            'd_time' => $this->input->post("d_time")
        );

        $this->Manage_model->insert_origin($table1);
        $this->Manage_model->insert_huayrach($table2);
        $this->Manage_model->insert_destination($table3);

        redirect('welcome/show', 'refresh');

    }

    public function view_train()
    {
        $data['origin'] = $this->Manage_model->view_train();
        $this->load->view('view_train', $data);
    }
   
    
           
}