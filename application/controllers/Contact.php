<?php

class Contact extends CI_Controller{

    public function index(){
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');
    }

    public function store(){
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('fname','First Name','required');        
        $this->form_validation->set_rules('lname','Last Name','required');
        $this->form_validation->set_rules('dob','Date of Birth','required');
        $this->form_validation->set_rules('mobno','Mobile Number','required');
        $this->form_validation->set_rules('mailid','Email Id','required');



        if($this->form_validation->run() === FALSE){
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');
        }else{
            $data['title']=$this->input->post('title');
            $data['fname'] = $this->input->post('fname');
            $data['lname'] = $this->input->post('lname');
            $data['dob'] = $this->input->post('dob');
            $data['mobno'] = $this->input->post('mobno');
            $data['email'] = $this->input->post('mailid');
            $data['message'] = $this->input->post('message');
            $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'pdf|jpeg|jpg';//
                $config['max_size'] = '1024';
                $this->upload->initialize($config);
            if(!$this->upload->do_upload('filename')){
                $this->session->set_userdata($data);
                redirect('result');
            }else{
                
                $data['filename'] = $this->upload->data('raw_name');
                $file_path = './uploads'.$data['filename'];
                $this->session->set_userdata($data);
                unlink($file_path);
                redirect('result');
            }




        }
    }

    public function result(){
        $this->load->view('header');
        $this->load->view('result');
        $this->load->view('footer');
    }
}